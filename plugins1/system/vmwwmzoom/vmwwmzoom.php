<?php
/*------------------------------------------------------------------------
# Plg_vmwwmzoom : WWM Product Zoom for Virtuemart
# ------------------------------------------------------------------------
# author    walkswithme.net
# copyright Copyright (C) 2013 walkswithme.net. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.walkswithme.net/
# Technical Support:  Forum - http://www.walkswithme.net/joomla-virtuemart-product-image-zoom
-------------------------------------------------------------------------*/

defined( '_JEXEC' ) or die( 'Restricted access' );
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
jimport('joomla.application.component.helper');
class PlgSystemVmWWMZoom extends JPlugin{

	public function onBeforeRender() {
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
		$view = JRequest::getVar('view');
		if ($app->isAdmin()){
					return true;
				}
			if ($view !='productdetails'){
				return true;
			}
		$pluginLivePath = JURI::root(true).'/plugins/system/vmwwmzoom/';
		$show_jquery = $this->params->get('show_jquery',1);
			if($show_jquery==1){
				$doc->addScript('http://code.jquery.com/jquery-1.8.1.min.js');
			}
			$doc->addScript($pluginLivePath.'js/wwm_zoom.js');
			$doc->addScript($pluginLivePath.'js/cycle.js');
			$doc->addScriptDeclaration($this->getCustomJs());
			$doc->addStyleSheet($pluginLivePath.'css/wwm_zoom.css');	
	}
	public function onAfterRender() {
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
		$view = JRequest::getVar('view');
		if ($app->isAdmin()){
				return true;
			}
		if ($view !='productdetails'){
			return true;
		}
						
		$buffer = JResponse::getBody();		
		$regx = '/<div class="main-image">([^`]*?)<\/div>/';
		$regx2 = '/<div class="floatleft">([^`]*?)<\/div>/';
		$regx3 = '/<div class="additional-images">/';
		$getMainImage = $this->getMainImage();
		$getAddImages = $this->getAddImages();
		
		$buffer = preg_replace($regx2,'',$buffer);		
		$buffer = preg_replace($regx3,$getAddImages,$buffer);		
		$buffer = preg_replace($regx,$getMainImage,$buffer);		
		JResponse::setBody($buffer);

		return true;
	}
	
	function getCustomJs(){
		
		$zoomType = 		$this->params->get('zoomType','standard');
		
		
		$slider			 = 	$this->params->get('slider',1);
		$product_title	 = 	$this->params->get('enable_product_title',1);
		
		
		
		$custome_js  = "";
		
		if($slider){
		$custome_js  .= 'jQuery(document).ready(function() {
			jQuery("#WWM_thumbs_images").cycle({ 
			fx:      "scrollHorz", 
			speed:   "slow", 
			timeout: 0, 
			prev:    "#prev_wwm",
			next:    "#next_wwm",
			autostop : 1,
			activePagerClass: "activeSlide",
			});
		});	';
		}
		if($zoomType == "standard"){
			$custome_js  .= 'CloudZoom.quickStart();';
			$custome_js  .= "var Imgoptions = {zoomSizeMode:'image',zoomPosition:'3',zoomPosition:'inside'};";
			$custome_js  .= 'jQuery("#zoom1").CloudZoom(Imgoptions);';
		}
		elseif($zoomType == "innerzoom"){
			$custome_js  .= "window.onload =function() {
								 CloudZoom.quickStart();
								 var Imgoptions = {zoomOffsetX:'0',zoomPosition:'inside'};
								 var ImgObj = new CloudZoom(jQuery('#zoom1'),Imgoptions);
								 ImgObj.closeZoom();
							};
							jQuery(document).ready(function() {
								jQuery('#WWM_thumbs_images img').on('click',function(){
								var Imgoptions = {zoomOffsetX:'0',zoomPosition:'inside'};
								var ImgObj = new CloudZoom(jQuery('#zoom1'),Imgoptions);
								ImgObj.loadImage(jQuery(this).parent().attr('href'),jQuery(this).parent().attr('href'));
								ImgObj.closeZoom();
							});
							});
							";
		}
		
	return $custome_js;
		
	}
	
	function getMainImage(){
		if (!class_exists( 'VmConfig' )) require(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'config.php');
		$config = VmConfig::loadConfig();
		$pluginLivePath = JURI::root(true).'/plugins/system/vmwwmzoom/';
		$product_model = VmModel::getModel('product');
		$virtuemart_product_id = JRequest::getInt('virtuemart_product_id', 0);
		$product = $product_model->getProduct($virtuemart_product_id);
		$images = $product->images;
		$main_image_url = $images[0]->file_url;// [file_title][file_description][file_meta]
		$main_image_title = $images[0]->file_title;// [file_title][file_description][file_meta]
		$main_image_description = $images[0]->file_description;// [file_title][file_description][file_meta]
		$main_image_alt = $images[0]->file_meta;// [file_title][file_description][file_meta]

		$j = count($images);
		$imageWidth = 		trim($this->params->get('imageWidth',350));
		if($imageWidth==''){$imageWidth = 'auto';}
		$imageHeight = 		trim($this->params->get('imageHeight'));
		if($imageHeight==''){$imageHeight = 'auto';}
		$containerwidth 	= 		trim($this->params->get('containerwidth',300));
		//add HTML
		$slider			 = 	$this->params->get('slider',1);
		if($this->params->get('enable_product_title'))
		$product_title = $product->product_name;
		else
		$product_title = "";
		
		$html = "";
		$html .= "<div class=\"wwm_image_zoom\" style='width:".$containerwidth."px;'>";
		$html .= "<img id=\"zoom1\" class = \"cloudzoom\" src ='".JURI::root().$main_image_url."'
             data-cloudzoom = \"zoomImage: '".JURI::root().$main_image_url."'\" width='".$imageWidth."' height='".$imageHeight."' alt='".$product_title."' title='".$product_title."'   />";
		
		if($slider && $j >1){
		$html .= '<div class="WWM_slide_control">
				 <a id="prev_wwm" class="prev1" href="javascript:;">prev</a>
				 <a class="next1" id="next_wwm" href="javascript:;">next</a>
				 </div>';
		}else{
			$html .= '</div>';
		}
    return $html;
	}
	
	
	function getAddImages(){
		if (!class_exists( 'VmConfig' )) require(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'config.php');
		$config = VmConfig::loadConfig();
		$pluginLivePath = JURI::root(true).'/plugins/system/vmwwmzoom/';
		$product_model = VmModel::getModel('product');
		$virtuemart_product_id = JRequest::getInt('virtuemart_product_id', 0);
		$product = $product_model->getProduct($virtuemart_product_id);
		$images = $product->images;
		
		$main_image_url = JURI::root(true). $images[0]->file_url;// [file_title][file_description][file_meta]
		$main_image_title = $images[0]->file_title;// [file_title][file_description][file_meta]
		$main_image_description = $images[0]->file_description;// [file_title][file_description][file_meta]
		$main_image_alt = $images[0]->file_meta;// [file_title][file_description][file_meta]

		$j = count($images);
		$thumbimageWidth = 		trim($this->params->get('thumbimageWidth',75));
		if($thumbimageWidth==''){$thumbimageWidth = 'auto';}
		$thumbimageHeight = 		trim($this->params->get('thumbimageHeight',75));
		if($thumbimageHeight==''){$thumbimageHeight = 'auto';}
		//add HTML
		if($this->params->get('enable_product_title'))
		$product_title = $product->product_name;
		else
		$product_title = "";
		$customMarginOnlyIftitle = "";
		if($this->params->get('zoomType','standard')=='innerzoom' && $this->params->get('enable_product_title')){
			$customMarginOnlyIftitle = "style='margin-top:35px;'";
		}
		$html = "";
		$html .= "<div id=\"WWM_thumbs_images\" ".$customMarginOnlyIftitle."><div class=\"slides\">";	
		
		if($j >1){
			$index_count = 0;
			for($i=1; $i<$j; $i++){
				
				if($index_count % 3 == 0 && $index_count !=0)
				$html .= "</div><div class=\"slides\">";
				
				 $html .= "<a class=\"thumb-link\" href='".JURI::root().$images[$i]->file_url."'>    
                    <img style=\"width:".$thumbimageWidth."px !important;height:".$thumbimageHeight."px !important;\" data-cloudzoom=\"
                         useZoom:'#zoom1',
                         image:'".JURI::root(). $images[$i]->file_url."',
                         zoomImage:'".JURI::root().$images[$i]->file_url."'\" alt=\"$product_title\" title=\"$product_title\" src='".JURI::root().$images[$i]->file_url_thumb."' class=\"cloudzoom-gallery\">
                </a>";
				
				$index_count++;
				
				
			}	
		}		
		$html .= "</div></div>";
				
    return $html;
	}
	
	
}
