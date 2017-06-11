<?php
/*
Plugin Name: MW Font Changer
Plugin URI: http://mandegarweb.com
Description: Change WordPress dashboard font and theme font
Author: Ghaem
Version: 4.3.5
Tags: admin, admin font, font, wordpress font, change font, parsi font, fonts, persian, persian fonts, persian font, admin font editor, WP-Parsi Font Editor, site font changer, font changer, site font, theme font, mandegarweb, ghaem omidi, ghaem, mw, mw fonr editor, mw font changer
Author URI: mailto:ghaemomidi@yahoo.com
Copyright: Ghaem Omidi & Mandegarweb - 2014
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
/*
Thanks to Amir Khlaji Mehr and Iman Fakhar (Mandegarweb)
*/
function my_admin_head() {
global $current_user;
get_currentuserinfo();
$mwfc_font_size = get_user_meta($current_user->ID, 'mwfc-font-size', true); 
$mwfc_font_family = get_user_meta($current_user->ID, 'mwfc-font-family', true); 
if ($mwfc_font_family || $mwfc_font_size) { ?> 
<style>
textarea#content.wp-editor-area { <?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } if ($mwfc_font_size) { ?>	font-size: <?php echo $mwfc_font_size; ?>px;<?php } ?>}
textarea#wp_mce_fullscreen { <?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } if ($mwfc_font_size) { ?> font-size: <?php echo $mwfc_font_size; ?>px;<?php } ?>}
textarea#replycontent { <?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } if ($mwfc_font_size) { ?> font-size: <?php echo $mwfc_font_size; ?>px;<?php } ?>}
#wpwrap,
#wpcontent,
#wpfooter,
.folded #wpcontent,
.folded #wpfooter,
#wpbody-content,
#adminmenuback,
#adminmenuwrap,
#adminmenu,
#adminmenu .wp-submenu,
.folded #adminmenuback,
.folded #adminmenuwrap,
.folded #adminmenu,
.rtl h1, .rtl h2, .rtl h3, .rtl h4, .rtl h5, .rtl h6,
.folded #adminmenu li.menu-top,
.wp-admin input[type="file"],
#adminmenu a:focus,
#myhead,
#adminmenu a:active,
.screen-reader-text:focus,
.wp-admin select,
.wp-admin .button-cancel,
.wp-admin select[multiple],
table.widefat span.delete a:hover,
table.widefat span.trash a:hover,
table.widefat span.spam a:hover,
#dashboard_recent_comments .delete a:hover,
#dashboard_recent_comments .trash a:hover,
#dashboard_recent_comments .spam a:hover,
.plugins a.delete:hover,
#all-plugins-table .plugins a.delete:hover,
#search-plugins-table .plugins a.delete:hover,
.submitbox .submitdelete:hover,
#media-items a.delete:hover,
#wpadminbar,
#wpadminbar ul li:before,
#wpadminbar .quicklinks > ul > li > a,
#wpadminbar *,
.rtl #wpadminbar *,
html:lang(he-il) .rtl #wpadminbar *,
#wpadminbar a.ab-item,
#wpadminbar > #wp-toolbar span.ab-label,
#wpadminbar > #wp-toolbar span.noticon,
#wpadminbar ul li:after,
#wpadminbar #wp-admin-bar-site-name a.ab-item,
#wpadminbar #wp-admin-bar-my-sites a.ab-item,
#wpadminbar ul li:before,
#wpadminbar ul li:after,
#wpadminbar a,
#wpadminbar a:hover,
#wpadminbar a img,
#wpadminbar a img:hover,
#wpadminbar a:focus,
#wpadminbar a:active,
#wpadminbar input[type="text"],
#wpadminbar input[type="password"],
#wpadminbar input[type="number"],
#wpadminbar input[type="search"],
#wpadminbar input[type="email"],
#wpadminbar input[type="url"],
#wpadminbar select,
#wpadminbar textarea,
#wpadminbar div,
#wpadminbar .ab-sub-wrapper,
#wpadminbar ul,
#wpadminbar ul li,
#wpadminbar ul#wp-admin-bar-root-default>li,
#wpadminbar .quicklinks,
#wpadminbar .quicklinks ul,
#wpadminbar li,
#wpadminbar .ab-empty-item,
#wpadminbar .quicklinks .ab-top-secondary > li,
#wpadminbar .quicklinks a,
#wpadminbar .quicklinks .ab-empty-item,
#wpadminbar .shortlink-input,
#wpadminbar .quicklinks > ul > li > a,
#wpadminbar .menupop .ab-sub-wrapper,
#wpadminbar .shortlink-input,
#wpadminbar.ie7 .menupop .ab-sub-wrapper,
#wpadminbar.ie7 .shortlink-input,
#wpadminbar .ab-top-menu > .menupop > .ab-sub-wrapper,
#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper,
#wpadminbar .ab-submenu,
#wpadminbar .selected .shortlink-input,
#wpadminbar .quicklinks .menupop ul li,
#wpadminbar .quicklinks .menupop ul li a strong,
#wpadminbar .quicklinks .menupop ul li .ab-item,
#wpadminbar .quicklinks .menupop ul li a strong,
#wpadminbar .quicklinks .menupop.hover ul li .ab-item,
#wpadminbar.nojs .quicklinks .menupop:hover ul li .ab-item,
#wpadminbar .shortlink-input,
.wp_themeSkin a:hover,.wp_themeSkin a:link,.wp_themeSkin a:visited,.wp_themeSkin a:active,
.wp_themeSkin table td,
.wp_themeSkin *,.wp_themeSkin a:hover,.wp_themeSkin a:link,.wp_themeSkin a:visited,.wp_themeSkin a:active,
.wp_themeSkin span.mce_sup,.wp_themeSkin span.mce_sub,.wp_themeSkin span.mce_media,.wp_themeSkin span.mce_styleprops,.wp_themeSkin span.mce_search,.wp_themeSkin span.mce_emotions,.wp_themeSkin span.mce_print,.wp_themeSkin span.mce_attribs,.wp_themeSkin span.mce_hr,.wp_themeSkin span.mce_cut,.wp_themeSkin span.mce_copy,.wp_themeSkin span.mce_paste,.wp_themeSkin span.mce_cite,.wp_themeSkin span.mce_visualchars,.wp_themeSkin span.mce_advhr,.wp_themeSkin span.mce_insertdate,.wp_themeSkin span.mce_anchor,.wp_themeSkin span.mce_visualaid,.wp_themeSkin span.mce_cleanup,.wp_themeSkin span.mce_table,.wp_themeSkin span.mce_row_props,.wp_themeSkin span.mce_cell_props,.wp_themeSkin span.mce_row_before,.wp_themeSkin span.mce_row_after,.wp_themeSkin span.mce_delete_row,.wp_themeSkin span.mce_col_before,.wp_themeSkin span.mce_col_after,.wp_themeSkin span.mce_delete_col,.wp_themeSkin span.mce_split_cells,.wp_themeSkin span.mce_merge_cells,.wp_themeSkin span.mce_delete_table,.wp_themeSkin span.mce_ins,.wp_themeSkin span.mce_abbr,.wp_themeSkin span.mce_acronym,.wp_themeSkin span.mce_del,.wp_themeSkin span.mce_replace,.wp_themeSkin span.mce_code,.wp_themeSkin span.mce_nonbreaking,.wp_themeSkin span.mce_inserttime,.wp_themeSkin span.mce_insertlayer,.wp_themeSkin span.mce_moveforward,.wp_themeSkin span.mce_movebackward,.wp_themeSkin span.mce_absolute,
#wp-link .toggle-arrow,
.wp_themeSkin .mceSplitButtonEnabled a.mceOpen,.wp_themeSkin .mceSplitButtonSelected a.mceOpen,.wp_themeSkin .mceSplitButtonActive a.mceOpen,.wp_themeSkin .mceSplitButtonEnabled:hover a.mceOpen,
.ui-dialog,
.ui-dialog .ui-dialog-titlebar,
.ui-dialog .ui-dialog-title,
.ui-dialog .ui-dialog-titlebar-close,
.ui-dialog .ui-dialog-content,
.ui-dialog .ui-dialog-buttonpane,
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset,
.ui-dialog .ui-dialog-buttonpane button,
.ui-dialog .ui-resizable-se,
.ui-draggable .ui-dialog-titlebar,
.wp-dialog,
.wp-dialog .ui-dialog-title,
.fade-trigger,
.wp-switch-editor switch-html,
.mceText mceTitle,
.media-menu,
.media-menu>a,
.media-menu .active,.media-menu .active:hover,
.media-menu .separator,
.media-frame-title h1,
.wp-list-table a,
.media-router a,
.attachment-details,
.acf-content-title h2,
.media-frame input[type="text"],
.media-frame input[type="password"],
.media-frame input[type="number"],
.media-frame input[type="search"],
.media-frame input[type="email"],
.media-frame input[type="url"],
.media-frame textarea,
.media-frame select,
.media-modal-content,
.rtl .media-modal,
.attachment-display-settings,
textarea.large-text,
input.large-text,
input.large-text,textarea.large-text,
text,
input[type="text"],
.wp_themeSkin .mceListBox a.mceText,
code,
kbd,code,
.titlewrap input,
.rtl .media-frame input[type="text"],
.rtl .media-frame .search,
.rtl .media-frame input[type="search"],
.rtl .media-frame select,
.media-modal .media-sidebar .setting textarea,
#TB_ajaxWindowTitle,
#sidemenu,
body *,
body,
#template textarea,
#docs-list,
#sidemenu a.current,
textarea.code,
html,
*,
.html,
#html,
.wp_themeSkin table td,
#wp-content-editor-container,
.wp_themeSkin *,
.wp_themeSkin tr,
#wp-link .toggle-arrow,
.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp_themeSkin .mceMenu,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,
.wp_themeSkin table,.wp_themeSkin tbody,.wp_themeSkin a,.wp_themeSkin img,.wp_themeSkin tr,.wp_themeSkin div,.wp_themeSkin td,.wp_themeSkin iframe,.wp_themeSkin span,.wp_themeSkin *,.wp_themeSkin .mceText,
#media-items a.delete-permanently:hover {<?php if ($mwfc_font_family) { ?> font-family: <?php echo $mwfc_font_family; ?>;<?php } if ($mwfc_font_size) { ?> font-size: <?php echo $mwfc_font_size; ?>px;<?php } ?>}
.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors,.rtl .wp-switch-editor,.rtl .quicktags-toolbar input,.rtl .clearlooks2 .mceTop span,.rtl .wp_themeSkin .mceColorSplitMenu a.mceMoreColors {<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?> !important;<?php } if ($mwfc_font_size) { ?> font-size: <?php echo $mwfc_font_size; ?>px;<?php } ?>}
.bodyparsi {<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>font-size:10pt;color:#787878;direction:rtl;text-align:right;margin:0 auto;width:72%;padding:0px;background: transparent repeating-linear-gradient(135deg, #3B3B3B, #3B3B3B 10px, #FFF 10px, #FFF 20px, #F84D3B 20px, #F84D3B 30px, #FFF 30px, #FFF 40px) repeat scroll 0% 0% !important;border-top-right-radius: 30px;border-bottom-left-radius: 30px;}
.errorwppafe{width:88%;border:1px #d3400d solid;-webkit-border-radius: 5px;-moz-border-radius: 5px;padding:10px 10px 10px 10px;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>text-align: center !important;display:block !important;float:none !important;margin-right:auto !important;margin-left:auto !important;background:yellow  !important;margin-top: 15px !important;}
.okwppafe{width:94%;border:1px #a1cb45 solid;-webkit-border-radius: 5px;-moz-border-radius: 5px;margin:5px 10px 10px 10px;padding:10px 10px 10px 10px;background:#eaf8cc;display:block;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>text-align: center;margin-left: auto;margin-right: auto;float: none;}
.contentparsi h2 {background-color:#1abc9c;border-top-left-radius: 30px;border-bottom-right-radius: 30px;padding: 15px;color: rgb(255, 255, 255);}
#mainparsi{<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>margin:10px;border-top-right-radius: 30px;border-bottom-left-radius: 30px;}
.clear{clear:both}
form {margin:0px;padding:0px;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
input, select {<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>padding:5px;font-size:10pt;border: 1px solid #cacaca;-webkit-border-radius: 5px;-moz-border-radius: 5px;}
input[type="submit"]{<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>padding:5px;font-size:11pt;-webkit-border-radius: 5px;-moz-border-radius: 5px;}
.contentparsi {-webkit-border-radius: 20px;-moz-border-radius: 20px;margin:50px 0 0 0;padding:10px;text-align: center;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.formsparsi {direction: rtl;padding-right:20px;text-align: right;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.formsparsi h2 {padding: 8px 2px;border-bottom: 1px solid #CCC;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.formsparsi label:hover {-moz-transform: scale(1.5) rotate(360deg);-webkit-transform: scale(1.5) rotate(360deg);-o-transform: scale(1.5) rotate(360deg);transform: scale(1.5) rotate(360deg);background:#f1c40f;}
.formsparsi label {width: 50%;background:#16a085;-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-ms-transition: all 1s ease;-o-transition: all 1s ease;transition: all 1s ease;text-align: center;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>display:block;float:none;margin-right:auto;margin-left:auto;background-color:#1abc9c;border-top-left-radius: 30px;border-bottom-right-radius: 30px;padding: 15px;color: rgb(255, 255, 255);}
.formsparsi .formparsi, .formsparsi .form-ltr {width: 300px;float: right;padding: 2px;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>margin: 5px 0;}
.formsparsi .form-ltr {direction: ltr;text-align: left;<?php if ($mwfc_font_family) { ?> font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.formsparsi.text {width: 250px;height: 100px;overflow: auto;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.submitbot {-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-ms-transition: all 1s ease;-o-transition: all 1s ease;transition: all 1s ease;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius:5px;background:#16a085;cursor: pointer;color:#fff;}
.submitbot:hover {<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>font-size:11pt;background:#1abc9c;-moz-transform: scale(2) rotate(360deg);-webkit-transform: scale(1.2) rotate(360deg);-o-transform: scale(2) rotate(360deg);transform: scale(2) rotate(360deg);color:#fff;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius:5px;}
.textare2:hover {border: 1px solid #6295f3;-webkit-border-radius: 5px;-moz-border-radius: 5px;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.textare2 {width:96%;}
.textare1:hover {border: 1px solid #6295f3;-webkit-border-radius: 5px;-moz-border-radius: 5px;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>}
.textare1 {width:96%;<?php if ($mwfc_font_family) { ?>	font-family: <?php echo $mwfc_font_family; ?>;<?php } ?>padding:5px;font-size:10pt;border: 1px solid #cacaca;-webkit-border-radius: 5px;-moz-border-radius: 5px;}
.pptitle {margin-top:40px;font-size:50px;text-align:center;line-height:70px;}
</style>
<?php }
}
add_action('admin_head', 'my_admin_head');
function mwfc_settings_page() { 
global $user_id;
global $current_user;
get_currentuserinfo();
$current_user->ID; ?>
<div class="wrap">
<div class="pptitle"><span class="dashicons dashicons-admin-generic"></span><?php _e('MW Font Changer - Dashboard Font', 'mwfc'); ?></div>
<br/>
<br/>
<?php
if( $_POST['mwfc-font-family'] || $_POST['mwfc-font-size'] )  {
if (!$_POST['mwfc-font-family-user']) {
update_user_meta( $current_user->ID, 'mwfc-font-family', (string)$_POST['mwfc-font-family'] );
} else {
update_user_meta( $current_user->ID, 'mwfc-font-family', (string)trim($_POST['mwfc-font-family-user']) );
update_user_meta( $current_user->ID, 'mwfc-font-family-user', (string)trim($_POST['mwfc-font-family-user']) );
}
update_user_meta( $current_user->ID, 'mwfc-font-size', $_POST['mwfc-font-size'] ); ?>						
<div id="setting-error-settings_updated" class="updated settings-error"> 
<p><strong><?php _e('Settings saved.', 'mwfc'); ?></strong></p></div>
<?php 
} ?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">
<table class="form-table">
<tr valign="top">
<th scope="row"><?php _e('Font Size (px)', 'mwfc'); ?></th>
<td>
<select name="mwfc-font-size" id="mwfc-font-size">
<option value=""><?php _e('Select Font Size', 'mwfc'); ?></option>
<?php
$mwfc_font_size = get_user_meta($current_user->ID, 'mwfc-font-size', true); 
for($i=10; $i<=22; $i++) { 
if ((string)$i !== (string)$mwfc_font_size) {  ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } else { ?>
<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
<?php }
} ?>
</select>
</td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="mwfc-font-family" id="mwfc-font-family">
<option value=""><?php _e('Select font from list or type a font name below', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>">			
<?php
$mwfc_font_family = get_user_meta($current_user->ID, 'mwfc-font-family', true);
$mwfc_font_family_user = get_user_meta($current_user->ID, 'mwfc-font-family-user', true); 
$mwfc_fonts = array('IRAN Sans','SultanAdan','BYekan','DroidArabicNaskh','DroidArabicKufi','BKoodak','BBardiya','BEsfehan','BHelal','BMahsa','BMehr','BMitra','BJadid','BHoma','BNasim','BNazanin','BSina','BTitr','DastNevis','Tahoma','YekanIR');
$mwfc_latinfonts = array('Arial','Verdana','Tahoma','ComicSansMS');	
for($i=0; $i<count($mwfc_fonts); $i++) { 
if($mwfc_fonts[$i] !== $mwfc_font_family) { ?>
<option value="<?php echo $mwfc_fonts[$i]; ?>"><?php echo $mwfc_fonts[$i]; ?></option>
<?php } else {
$using_preset = 1;  ?>
<option value="<?php echo $mwfc_fonts[$i]; ?>" selected="selected"><?php echo $mwfc_fonts[$i]; ?></option>
<?php }
} ?>
</optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>">
<?php
for($i=0; $i<count($mwfc_latinfonts); $i++) { 
if($mwfc_latinfonts[$i] !== $mwfc_font_family) { ?>
<option value="<?php echo $mwfc_latinfonts[$i]; ?>"><?php echo $mwfc_latinfonts[$i]; ?></option>
<?php } else {
$using_preset = 1;  ?>
<option value="<?php echo $mwfc_latinfonts[$i]; ?>" selected="selected"><?php echo $mwfc_latinfonts[$i]; ?></option>
<?php }
} ?>
</optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>">
<?php
$mwfc_combinedfonts = array('SultanAdan, Arial','BYekan, Arial','DroidArabicNaskh, Arial','DroidArabicKufi, Arial','BKoodak, Arial','BBardiya, Arial','BEsfehan, Arial','BHelal, Arial','BMahsa, Arial','BMehr, Arial','BMitra, Arial','BJadid, Arial','BHoma, Arial','BNasim, Arial','BNazanin, Arial','BSina, Arial','BTitr, Arial','DastNevis, Arial','Tahoma, Arial','SultanAdan, Verdana','BYekan, Verdana','DroidArabicNaskh, Verdana','DroidArabicKufi, Verdana','BKoodak, Verdana','BBardiya, Verdana','BEsfehan, Verdana','BHelal, Verdana','BMahsa, Verdana','BMehr, Verdana','BMitra, Verdana','BJadid, Verdana','BHoma, Verdana','BNasim, Verdana','BNazanin, Verdana','BSina, Verdana','BTitr, Verdana','DastNevis, Verdana','SultanAdan, ComicSansMS','BYekan, ComicSansMS','DroidArabicNaskh, ComicSansMS','DroidArabicKufi, ComicSansMS','BKoodak, ComicSansMS','BBardiya, ComicSansMS','BEsfehan, ComicSansMS','BHelal, ComicSansMS','BMahsa, ComicSansMS','BMehr, ComicSansMS','BMitra, ComicSansMS','BJadid, ComicSansMS','BHoma, ComicSansMS','BNasim, ComicSansMS','BNazanin, ComicSansMS','BSina, ComicSansMS','BTitr, ComicSansMS','DastNevis, ComicSansMS');
for($i=0; $i<count($mwfc_combinedfonts); $i++) { 
if($mwfc_combinedfonts[$i] !== $mwfc_font_family) { ?>
<option value="<?php echo $mwfc_combinedfonts[$i]; ?>"><?php echo $mwfc_combinedfonts[$i]; ?></option>
<?php } else {
$using_preset = 1;  ?>
<option value="<?php echo $mwfc_combinedfonts[$i]; ?>" selected="selected"><?php echo $mwfc_combinedfonts[$i]; ?></option>
<?php }
} ?>
</optgroup>
</select>
<br/>
</td>
</tr>
<tr valign="top">
<th scope="row" ><?php _e('Preview', 'mwfc'); ?></th>
<td>
<textarea name="mwfc-preview" style="text-align:center;font-size:<?php echo $mwfc_font_size; ?>px; font-family:<?php echo $mwfc_font_family; ?>;height:90px;color:#000;" id="mwfc-preview" class="large-text code" disabled="disabled" spellcheck="false">این متن فقط برای آزمایش است
<?php _e('This text is just to test.', 'mwfc') ?></textarea>
</td>
</tr>
</table>
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes', 'mwfc') ?>" />
</p>
</form>
</div>
<script type="text/javascript">
jQuery(document).ready( function($) {
$("#mwfc-font-family").change(function() {
$('#mwfc-preview').css("font-family", $(this).val());
$('#mwfc-font-family-user').val("");
});
$("#mwfc-font-size").change(function() {
$('#mwfc-preview').css("font-size", $(this).val() + "px");
});
$("#mwfc-font-family-user").blur(function() {
if($(this).val()) {
$('#mwfc-preview').css("font-family", $(this).val());
$('#mwfc-font-family option[value=""]').attr('selected','selected');
}
});
});
</script>
<?php
}
function mwfc_about_page() { 
global $user_id;
global $current_user;
get_currentuserinfo();
$current_user->ID; ?>
<div class="wrap">
<div class="pptitle"><span class="dashicons dashicons-lightbulb"></span><?php _e('MW Font Changer - Feedback', 'mwfc'); ?></div>
<br/>
<br/>
<?php
session_start();
if(isset($_POST['submit'])) {
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])  && !empty($_POST['subject'])) {
if($_POST['code'] == $_SESSION['rand_code']) {
// send email
$accept = __('Your message was successfully sent. Thanks', 'mwfc');
$to = "ghaemomidi@yahoo.com";
$subject = $_POST['subject'];
$name= $_POST['name'];
$from = $_POST['email'];
$user_message = $_POST['message'];
$body = "\n".
"Name: $name\n".
"Email: $from \n".
"Message: \n ".
"$user_message\n".
$headers = "From: $from \r\n";
$headers .= "Reply-To: $from \r\n";
mail($to, $subject, $body, $headers);
}
} else {
$error = __('Please fill all fields.', 'mwfc');
}
}
?>
<div class="bodyparsi">
<div id="mainparsi">
<div class="contentparsi">
<h2><?php _e('If you want your favorite font to be used in plugin or you have comments or suggestions please let us know via this form:', 'mwfc') ?></h2>
<?php if(!empty($error)) echo '<div class="errorwppafe">'.$error.'</div>'; ?>
<?php if(!empty($accept)) echo '<div class="okwppafe">'.$accept.'</div>'; ?>
<p>
<div class="formsparsi">     
<form action="" method="post">
<label for="username"><?php _e('Name', 'mwfc') ?></label>
<br/>
<input class="textare2" type="text" id="username" class="formparsi" value="" name="name">
<br/><br/>
<label for="email"><?php _e('Email', 'mwfc') ?></label>
<br/>
<input class="textare2" type="text" id="email" value="" class="form-ltr" name="email">
<br/><br/>
<label for="sub"><?php _e('Subject', 'mwfc') ?></label>
<br/>
<input class="textare2" type="text" id="sub" value="" class="formparsi" name="subject">
<br/><br/>
<label for="mess"><?php _e('Your Message', 'mwfc') ?></label>
<br/>
<textarea class="textare1" id="mess" rows="7" name="message"></textarea>
<br/><br/>
<input style="float:none !important;margin-right:auto;margin-left:auto;display:block;" class="submitbot" type="submit" name="submit" value="<?php _e('Send', 'mwfc') ?>">
</form>
</div>
</p>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<?php
}
add_action('wp_head', 'sitefont_add_css');
function sitefont_add_css(){
$options = get_option('site_font_settings');
?>
<style type="text/css">
<?php esc_attr_e($options['c1listidclass']); ?> {font-family:<?php esc_attr_e($options['c1fontname']); ?> !important;font-size:<?php esc_attr_e($options['c1fontsize']); ?>px !important;}
<?php esc_attr_e($options['c2listidclass']); ?> {font-family:<?php esc_attr_e($options['c2fontname']); ?> !important;font-size:<?php esc_attr_e($options['c2fontsize']); ?>px !important;}
<?php esc_attr_e($options['c3listidclass']); ?> {font-family:<?php esc_attr_e($options['c3fontname']); ?> !important;font-size:<?php esc_attr_e($options['c3fontsize']); ?>px !important;}
h1, h2, h3, h4, h5, h6 {font-family:<?php esc_attr_e($options['hfontname']); ?> !important;}
body {font-family:<?php esc_attr_e($options['bodyfontname']); ?> !important;}
.rtl #wpadminbar * {font:400 13px/32px <?php esc_attr_e($options['adminfontname']); ?>;}
</style>
<?php
}
function sitefont_settings_page() {
?>
<div class="wrap">
<div class="pptitle"><span class="dashicons dashicons-admin-generic"></span><?php _e('MW Font Changer - Theme Font', 'mwfc'); ?></div>
<?php
//show saved options message
if($_REQUEST['settings-updated']) : ?>
<br/><br/><div id="message" class="updated below-h2 notice is-dismissible"><p><?php _e('Settings Saved.', 'mwfc'); ?></p><button type="button" class="notice-dismiss"><span class="screen-reader-text"><?php _e('Close', 'mwfc'); ?></span></button></div>
<?php endif; ?>
<form method="post" action="options.php">
<?php settings_fields('site_font_settings'); ?>
<?php $options = get_option('site_font_settings'); ?>
<table class="form-table">
<p><h3><?php _e('Heading Font', 'mwfc'); ?></h3><h4>h1, h2, h3, h4, h5, h6</h4></p>         
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[hfontname]" id="site_font_settings[hfontname]">
<option value=""><?php _e('None', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>"><option <?php echo ($options['hfontname'] == "IRAN Sans" ? "selected ":""); ?>value="IRAN Sans">IRAN Sans</option><option <?php echo ($options['hfontname'] == "SultanAdan" ? "selected ":""); ?>value="SultanAdan">Sultan Adan</option><option <?php echo ($options['hfontname'] == "BYekan" ? "selected ":""); ?>value="BYekan">B Yekan</option><option <?php echo ($options['hfontname'] == "DroidArabicNaskh" ? "selected ":""); ?>value="DroidArabicNaskh">Droid Arabic Naskh</option><option <?php echo ($options['hfontname'] == "DroidArabicKufi" ? "selected ":""); ?>value="DroidArabicKufi">Droid Arabic Kufi</option><option <?php echo ($options['hfontname'] == "BKoodak" ? "selected ":""); ?>value="BKoodak">B Koodak</option><option <?php echo ($options['hfontname'] == "BBardiya" ? "selected ":""); ?>value="BBardiya">B Bardiya</option><option <?php echo ($options['hfontname'] == "BEsfehan" ? "selected ":""); ?>value="BEsfehan">B Esfehan</option><option <?php echo ($options['hfontname'] == "BHelal" ? "selected ":""); ?>value="BHelal">B Helal</option><option <?php echo ($options['hfontname'] == "BMahsa" ? "selected ":""); ?>value="BMahsa">B Mahsa</option><option <?php echo ($options['hfontname'] == "BMehr" ? "selected ":""); ?>value="BMehr">B Mehr</option><option <?php echo ($options['hfontname'] == "BMitra" ? "selected ":""); ?>value="BMitra">B Mitra</option><option <?php echo ($options['hfontname'] == "BJadid" ? "selected ":""); ?>value="BJadid">B Jadid</option><option <?php echo ($options['hfontname'] == "BHoma" ? "selected ":""); ?>value="BHoma">B Homa</option><option <?php echo ($options['hfontname'] == "BNasim" ? "selected ":""); ?>value="BNasim">B Nasim</option><option <?php echo ($options['hfontname'] == "BNazanin" ? "selected ":""); ?>value="BNazanin">B Nazanin</option><option <?php echo ($options['hfontname'] == "BSina" ? "selected ":""); ?>value="BSina">B Sina</option><option <?php echo ($options['hfontname'] == "BTitr" ? "selected ":""); ?>value="BTitr">B Titr</option><option <?php echo ($options['hfontname'] == "DastNevis" ? "selected ":""); ?>value="DastNevis">Dast Nevis</option><option <?php echo ($options['hfontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['hfontname'] == "YekanIR" ? "selected ":""); ?>value="YekanIR">IRYekan</option></optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>"><option <?php echo ($options['hfontname'] == "Arial" ? "selected ":""); ?>value="Arial">Arial</option><option <?php echo ($options['hfontname'] == "Verdana" ? "selected ":""); ?>value="Verdana">Verdana</option><option <?php echo ($options['hfontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['hfontname'] == "ComicSansMS" ? "selected ":""); ?>value="ComicSansMS">Comic Sans MS</option></optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>"><option <?php echo ($options['hfontname'] == "SultanAdan, Arial" ? "selected ":""); ?>value="SultanAdan, Arial">Sultan Adan, Arial</option><option <?php echo ($options['hfontname'] == "BYekan, Arial" ? "selected ":""); ?>value="BYekan, Arial">B Yekan, Arial</option><option <?php echo ($options['hfontname'] == "DroidArabicNaskh, Arial" ? "selected ":""); ?>value="DroidArabicNaskh, Arial">Droid Arabic Naskh, Arial</option><option <?php echo ($options['hfontname'] == "DroidArabicKufi, Arial" ? "selected ":""); ?>value="DroidArabicKufi, Arial">Droid Arabic Kufi, Arial</option><option <?php echo ($options['hfontname'] == "BKoodak, Arial" ? "selected ":""); ?>value="BKoodak, Arial">B Koodak, Arial</option><option <?php echo ($options['hfontname'] == "BBardiya, Arial" ? "selected ":""); ?>value="BBardiya, Arial">B Bardiya, Arial</option><option <?php echo ($options['hfontname'] == "BEsfehan, Arial" ? "selected ":""); ?>value="BEsfehan, Arial">B Esfehan, Arial</option><option <?php echo ($options['hfontname'] == "BHelal, Arial" ? "selected ":""); ?>value="BHelal, Arial">B Helal, Arial</option><option <?php echo ($options['hfontname'] == "BMahsa, Arial" ? "selected ":""); ?>value="BMahsa, Arial">B Mahsa, Arial</option><option <?php echo ($options['hfontname'] == "BMehr, Arial" ? "selected ":""); ?>value="BMehr, Arial">B Mehr, Arial</option><option <?php echo ($options['hfontname'] == "BMitra, Arial" ? "selected ":""); ?>value="BMitra, Arial">B Mitra, Arial</option><option <?php echo ($options['hfontname'] == "BJadid, Arial" ? "selected ":""); ?>value="BJadid, Arial">B Jadid, Arial</option><option <?php echo ($options['hfontname'] == "BHoma, Arial" ? "selected ":""); ?>value="BHoma, Arial">B Homa, Arial</option><option <?php echo ($options['hfontname'] == "BNasim, Arial" ? "selected ":""); ?>value="BNasim, Arial">B Nasim, Arial</option><option <?php echo ($options['hfontname'] == "BNazanin, Arial" ? "selected ":""); ?>value="BNazanin, Arial">B Nazanin, Arial</option><option <?php echo ($options['hfontname'] == "BSina, Arial" ? "selected ":""); ?>value="BSina, Arial">B Sina, Arial</option><option <?php echo ($options['hfontname'] == "BTitr, Arial" ? "selected ":""); ?>value="BTitr, Arial">B Titr, Arial</option><option <?php echo ($options['hfontname'] == "DastNevis, Arial" ? "selected ":""); ?>value="DastNevis, Arial">Dast Nevis, Arial</option><option <?php echo ($options['hfontname'] == "Tahoma, Arial" ? "selected ":""); ?>value="Tahoma, Arial">Tahoma, Arial</option><option <?php echo ($options['hfontname'] == "SultanAdan, Verdana" ? "selected ":""); ?>value="SultanAdan, Verdana">Sultan Adan, Verdana</option><option <?php echo ($options['hfontname'] == "BYekan, Verdana" ? "selected ":""); ?>value="BYekan, Verdana">B Yekan, Verdana</option><option <?php echo ($options['hfontname'] == "DroidArabicNaskh, Verdana" ? "selected ":""); ?>value="DroidArabicNaskh, Verdana">Droid Arabic Naskh, Verdana</option><option <?php echo ($options['hfontname'] == "DroidArabicKufi, Verdana" ? "selected ":""); ?>value="DroidArabicKufi, Verdana">Droid Arabic Kufi, Verdana</option><option <?php echo ($options['hfontname'] == "BKoodak, Verdana" ? "selected ":""); ?>value="BKoodak, Verdana">B Koodak, Verdana</option><option <?php echo ($options['hfontname'] == "BBardiya, Verdana" ? "selected ":""); ?>value="BBardiya, Verdana">B Bardiya, Verdana</option><option <?php echo ($options['hfontname'] == "BEsfehan, Verdana" ? "selected ":""); ?>value="BEsfehan, Verdana">B Esfehan, Verdana</option><option <?php echo ($options['hfontname'] == "BHelal, Verdana" ? "selected ":""); ?>value="BHelal, Verdana">B Helal, Verdana</option><option <?php echo ($options['hfontname'] == "BMahsa, Verdana" ? "selected ":""); ?>value="BMahsa, Verdana">B Mahsa, Verdana</option><option <?php echo ($options['hfontname'] == "BMehr, Verdana" ? "selected ":""); ?>value="BMehr, Verdana">B Mehr, Verdana</option><option <?php echo ($options['hfontname'] == "BMitra, Verdana" ? "selected ":""); ?>value="BMitra, Verdana">B Mitra, Verdana</option><option <?php echo ($options['hfontname'] == "BJadid, Verdana" ? "selected ":""); ?>value="BJadid, Verdana">B Jadid, Verdana</option><option <?php echo ($options['hfontname'] == "BHoma, Verdana" ? "selected ":""); ?>value="BHoma, Verdana">B Homa, Verdana</option><option <?php echo ($options['hfontname'] == "BNasim, Verdana" ? "selected ":""); ?>value="BNasim, Verdana">B Nasim, Verdana</option><option <?php echo ($options['hfontname'] == "BNazanin, Verdana" ? "selected ":""); ?>value="BNazanin, Verdana">B Nazanin, Verdana</option><option <?php echo ($options['hfontname'] == "BSina, Verdana" ? "selected ":""); ?>value="BSina, Verdana">B Sina, Verdana</option><option <?php echo ($options['hfontname'] == "BTitr, Verdana" ? "selected ":""); ?>value="BTitr, Verdana">B Titr, Verdana</option><option <?php echo ($options['hfontname'] == "DastNevis, Verdana" ? "selected ":""); ?>value="DastNevis, Verdana">Dast Nevis, Verdana</option><option <?php echo ($options['hfontname'] == "SultanAdan, ComicSansMS" ? "selected ":""); ?>value="SultanAdan, ComicSansMS">Sultan Adan, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BYekan, ComicSansMS" ? "selected ":""); ?>value="BYekan, ComicSansMS">B Yekan, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "DroidArabicNaskh, ComicSansMS" ? "selected ":""); ?>value="DroidArabicNaskh, ComicSansMS">Droid Arabic Naskh, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "DroidArabicKufi, ComicSansMS" ? "selected ":""); ?>value="DroidArabicKufi, ComicSansMS">Droid Arabic Kufi, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BKoodak, ComicSansMS" ? "selected ":""); ?>value="BKoodak, ComicSansMS">B Koodak, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BBardiya, ComicSansMS" ? "selected ":""); ?>value="BBardiya, ComicSansMS">B Bardiya, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BEsfehan, ComicSansMS" ? "selected ":""); ?>value="BEsfehan, ComicSansMS">B Esfehan, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BHelal, ComicSansMS" ? "selected ":""); ?>value="BHelal, ComicSansMS">B Helal, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BMahsa, ComicSansMS" ? "selected ":""); ?>value="BMahsa, ComicSansMS">B Mahsa, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BMehr, ComicSansMS" ? "selected ":""); ?>value="BMehr, ComicSansMS">B Mehr, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BMitra, ComicSansMS" ? "selected ":""); ?>value="BMitra, ComicSansMS">B Mitra, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BJadid, ComicSansMS" ? "selected ":""); ?>value="BJadid, ComicSansMS">B Jadid, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BHoma, ComicSansMS" ? "selected ":""); ?>value="BHoma, ComicSansMS">B Homa, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BNasim, ComicSansMS" ? "selected ":""); ?>value="BNasim, ComicSansMS">B Nasim, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BNazanin, ComicSansMS" ? "selected ":""); ?>value="BNazanin, ComicSansMS">B Nazanin, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BSina, ComicSansMS" ? "selected ":""); ?>value="BSina, ComicSansMS">B Sina, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "BTitr, ComicSansMS" ? "selected ":""); ?>value="BTitr, ComicSansMS">B Titr, Comic Sans MS</option><option <?php echo ($options['hfontname'] == "DastNevis, ComicSansMS" ? "selected ":""); ?>value="DastNevis, ComicSansMS">Dast Nevis, Comic Sans MS</option></optgroup>
</select>
<p class="description"><?php _e('Please select font family.', 'mwfc'); ?></p></td>
</tr>
</table>
<hr/>		
<table class="form-table">
<h3><?php _e('Body Font', 'mwfc'); ?></h3>
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[bodyfontname]" id="site_font_settings[bodyfontname]">
<option value=""><?php _e('None', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>"><option <?php echo ($options['bodyfontname'] == "IRAN Sans" ? "selected ":""); ?>value="IRAN Sans">IRAN Sans</option><option <?php echo ($options['bodyfontname'] == "SultanAdan" ? "selected ":""); ?>value="SultanAdan">Sultan Adan</option><option <?php echo ($options['bodyfontname'] == "BYekan" ? "selected ":""); ?>value="BYekan">B Yekan</option><option <?php echo ($options['bodyfontname'] == "DroidArabicNaskh" ? "selected ":""); ?>value="DroidArabicNaskh">Droid Arabic Naskh</option><option <?php echo ($options['bodyfontname'] == "DroidArabicKufi" ? "selected ":""); ?>value="DroidArabicKufi">Droid Arabic Kufi</option><option <?php echo ($options['bodyfontname'] == "BKoodak" ? "selected ":""); ?>value="BKoodak">B Koodak</option><option <?php echo ($options['bodyfontname'] == "BBardiya" ? "selected ":""); ?>value="BBardiya">B Bardiya</option><option <?php echo ($options['bodyfontname'] == "BEsfehan" ? "selected ":""); ?>value="BEsfehan">B Esfehan</option><option <?php echo ($options['bodyfontname'] == "BHelal" ? "selected ":""); ?>value="BHelal">B Helal</option><option <?php echo ($options['bodyfontname'] == "BMahsa" ? "selected ":""); ?>value="BMahsa">B Mahsa</option><option <?php echo ($options['bodyfontname'] == "BMehr" ? "selected ":""); ?>value="BMehr">B Mehr</option><option <?php echo ($options['bodyfontname'] == "BMitra" ? "selected ":""); ?>value="BMitra">B Mitra</option><option <?php echo ($options['bodyfontname'] == "BJadid" ? "selected ":""); ?>value="BJadid">B Jadid</option><option <?php echo ($options['bodyfontname'] == "BHoma" ? "selected ":""); ?>value="BHoma">B Homa</option><option <?php echo ($options['bodyfontname'] == "BNasim" ? "selected ":""); ?>value="BNasim">B Nasim</option><option <?php echo ($options['bodyfontname'] == "BNazanin" ? "selected ":""); ?>value="BNazanin">B Nazanin</option><option <?php echo ($options['bodyfontname'] == "BSina" ? "selected ":""); ?>value="BSina">B Sina</option><option <?php echo ($options['bodyfontname'] == "BTitr" ? "selected ":""); ?>value="BTitr">B Titr</option><option <?php echo ($options['bodyfontname'] == "DastNevis" ? "selected ":""); ?>value="DastNevis">Dast Nevis</option><option <?php echo ($options['bodyfontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['bodyfontname'] == "YekanIR" ? "selected ":""); ?>value="YekanIR">IRYekan</option></optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>"><option <?php echo ($options['bodyfontname'] == "Arial" ? "selected ":""); ?>value="Arial">Arial</option><option <?php echo ($options['bodyfontname'] == "Verdana" ? "selected ":""); ?>value="Verdana">Verdana</option><option <?php echo ($options['bodyfontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['bodyfontname'] == "ComicSansMS" ? "selected ":""); ?>value="ComicSansMS">Comic Sans MS</option></optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>"><option <?php echo ($options['bodyfontname'] == "SultanAdan, Arial" ? "selected ":""); ?>value="SultanAdan, Arial">Sultan Adan, Arial</option><option <?php echo ($options['bodyfontname'] == "BYekan, Arial" ? "selected ":""); ?>value="BYekan, Arial">B Yekan, Arial</option><option <?php echo ($options['bodyfontname'] == "DroidArabicNaskh, Arial" ? "selected ":""); ?>value="DroidArabicNaskh, Arial">Droid Arabic Naskh, Arial</option><option <?php echo ($options['bodyfontname'] == "DroidArabicKufi, Arial" ? "selected ":""); ?>value="DroidArabicKufi, Arial">Droid Arabic Kufi, Arial</option><option <?php echo ($options['bodyfontname'] == "BKoodak, Arial" ? "selected ":""); ?>value="BKoodak, Arial">B Koodak, Arial</option><option <?php echo ($options['bodyfontname'] == "BBardiya, Arial" ? "selected ":""); ?>value="BBardiya, Arial">B Bardiya, Arial</option><option <?php echo ($options['bodyfontname'] == "BEsfehan, Arial" ? "selected ":""); ?>value="BEsfehan, Arial">B Esfehan, Arial</option><option <?php echo ($options['bodyfontname'] == "BHelal, Arial" ? "selected ":""); ?>value="BHelal, Arial">B Helal, Arial</option><option <?php echo ($options['bodyfontname'] == "BMahsa, Arial" ? "selected ":""); ?>value="BMahsa, Arial">B Mahsa, Arial</option><option <?php echo ($options['bodyfontname'] == "BMehr, Arial" ? "selected ":""); ?>value="BMehr, Arial">B Mehr, Arial</option><option <?php echo ($options['bodyfontname'] == "BMitra, Arial" ? "selected ":""); ?>value="BMitra, Arial">B Mitra, Arial</option><option <?php echo ($options['bodyfontname'] == "BJadid, Arial" ? "selected ":""); ?>value="BJadid, Arial">B Jadid, Arial</option><option <?php echo ($options['bodyfontname'] == "BHoma, Arial" ? "selected ":""); ?>value="BHoma, Arial">B Homa, Arial</option><option <?php echo ($options['bodyfontname'] == "BNasim, Arial" ? "selected ":""); ?>value="BNasim, Arial">B Nasim, Arial</option><option <?php echo ($options['bodyfontname'] == "BNazanin, Arial" ? "selected ":""); ?>value="BNazanin, Arial">B Nazanin, Arial</option><option <?php echo ($options['bodyfontname'] == "BSina, Arial" ? "selected ":""); ?>value="BSina, Arial">B Sina, Arial</option><option <?php echo ($options['bodyfontname'] == "BTitr, Arial" ? "selected ":""); ?>value="BTitr, Arial">B Titr, Arial</option><option <?php echo ($options['bodyfontname'] == "DastNevis, Arial" ? "selected ":""); ?>value="DastNevis, Arial">Dast Nevis, Arial</option><option <?php echo ($options['bodyfontname'] == "Tahoma, Arial" ? "selected ":""); ?>value="Tahoma, Arial">Tahoma, Arial</option><option <?php echo ($options['bodyfontname'] == "SultanAdan, Verdana" ? "selected ":""); ?>value="SultanAdan, Verdana">Sultan Adan, Verdana</option><option <?php echo ($options['bodyfontname'] == "BYekan, Verdana" ? "selected ":""); ?>value="BYekan, Verdana">B Yekan, Verdana</option><option <?php echo ($options['bodyfontname'] == "DroidArabicNaskh, Verdana" ? "selected ":""); ?>value="DroidArabicNaskh, Verdana">Droid Arabic Naskh, Verdana</option><option <?php echo ($options['bodyfontname'] == "DroidArabicKufi, Verdana" ? "selected ":""); ?>value="DroidArabicKufi, Verdana">Droid Arabic Kufi, Verdana</option><option <?php echo ($options['bodyfontname'] == "BKoodak, Verdana" ? "selected ":""); ?>value="BKoodak, Verdana">B Koodak, Verdana</option><option <?php echo ($options['bodyfontname'] == "BBardiya, Verdana" ? "selected ":""); ?>value="BBardiya, Verdana">B Bardiya, Verdana</option><option <?php echo ($options['bodyfontname'] == "BEsfehan, Verdana" ? "selected ":""); ?>value="BEsfehan, Verdana">B Esfehan, Verdana</option><option <?php echo ($options['bodyfontname'] == "BHelal, Verdana" ? "selected ":""); ?>value="BHelal, Verdana">B Helal, Verdana</option><option <?php echo ($options['bodyfontname'] == "BMahsa, Verdana" ? "selected ":""); ?>value="BMahsa, Verdana">B Mahsa, Verdana</option><option <?php echo ($options['bodyfontname'] == "BMehr, Verdana" ? "selected ":""); ?>value="BMehr, Verdana">B Mehr, Verdana</option><option <?php echo ($options['bodyfontname'] == "BMitra, Verdana" ? "selected ":""); ?>value="BMitra, Verdana">B Mitra, Verdana</option><option <?php echo ($options['bodyfontname'] == "BJadid, Verdana" ? "selected ":""); ?>value="BJadid, Verdana">B Jadid, Verdana</option><option <?php echo ($options['bodyfontname'] == "BHoma, Verdana" ? "selected ":""); ?>value="BHoma, Verdana">B Homa, Verdana</option><option <?php echo ($options['bodyfontname'] == "BNasim, Verdana" ? "selected ":""); ?>value="BNasim, Verdana">B Nasim, Verdana</option><option <?php echo ($options['bodyfontname'] == "BNazanin, Verdana" ? "selected ":""); ?>value="BNazanin, Verdana">B Nazanin, Verdana</option><option <?php echo ($options['bodyfontname'] == "BSina, Verdana" ? "selected ":""); ?>value="BSina, Verdana">B Sina, Verdana</option><option <?php echo ($options['bodyfontname'] == "BTitr, Verdana" ? "selected ":""); ?>value="BTitr, Verdana">B Titr, Verdana</option><option <?php echo ($options['bodyfontname'] == "DastNevis, Verdana" ? "selected ":""); ?>value="DastNevis, Verdana">Dast Nevis, Verdana</option><option <?php echo ($options['bodyfontname'] == "SultanAdan, ComicSansMS" ? "selected ":""); ?>value="SultanAdan, ComicSansMS">Sultan Adan, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BYekan, ComicSansMS" ? "selected ":""); ?>value="BYekan, ComicSansMS">B Yekan, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "DroidArabicNaskh, ComicSansMS" ? "selected ":""); ?>value="DroidArabicNaskh, ComicSansMS">Droid Arabic Naskh, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "DroidArabicKufi, ComicSansMS" ? "selected ":""); ?>value="DroidArabicKufi, ComicSansMS">Droid Arabic Kufi, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BKoodak, ComicSansMS" ? "selected ":""); ?>value="BKoodak, ComicSansMS">B Koodak, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BBardiya, ComicSansMS" ? "selected ":""); ?>value="BBardiya, ComicSansMS">B Bardiya, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BEsfehan, ComicSansMS" ? "selected ":""); ?>value="BEsfehan, ComicSansMS">B Esfehan, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BHelal, ComicSansMS" ? "selected ":""); ?>value="BHelal, ComicSansMS">B Helal, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BMahsa, ComicSansMS" ? "selected ":""); ?>value="BMahsa, ComicSansMS">B Mahsa, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BMehr, ComicSansMS" ? "selected ":""); ?>value="BMehr, ComicSansMS">B Mehr, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BMitra, ComicSansMS" ? "selected ":""); ?>value="BMitra, ComicSansMS">B Mitra, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BJadid, ComicSansMS" ? "selected ":""); ?>value="BJadid, ComicSansMS">B Jadid, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BHoma, ComicSansMS" ? "selected ":""); ?>value="BHoma, ComicSansMS">B Homa, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BNasim, ComicSansMS" ? "selected ":""); ?>value="BNasim, ComicSansMS">B Nasim, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BNazanin, ComicSansMS" ? "selected ":""); ?>value="BNazanin, ComicSansMS">B Nazanin, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BSina, ComicSansMS" ? "selected ":""); ?>value="BSina, ComicSansMS">B Sina, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "BTitr, ComicSansMS" ? "selected ":""); ?>value="BTitr, ComicSansMS">B Titr, Comic Sans MS</option><option <?php echo ($options['bodyfontname'] == "DastNevis, ComicSansMS" ? "selected ":""); ?>value="DastNevis, ComicSansMS">Dast Nevis, Comic Sans MS</option></optgroup>
</select>
<p class="description"><?php _e('Please select font family.', 'mwfc'); ?></p></td>
</tr>
</table>
<hr/>		
<table class="form-table">
<h3><?php _e('Adminbar Font', 'mwfc'); ?></h3>         
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[adminfontname]" id="site_font_settings[adminfontname]">
<option value=""><?php _e('None', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>"><option <?php echo ($options['adminfontname'] == "IRAN Sans" ? "selected ":""); ?>value="IRAN Sans">IRAN Sans</option><option <?php echo ($options['adminfontname'] == "SultanAdan" ? "selected ":""); ?>value="SultanAdan">Sultan Adan</option><option <?php echo ($options['adminfontname'] == "BYekan" ? "selected ":""); ?>value="BYekan">B Yekan</option><option <?php echo ($options['adminfontname'] == "DroidArabicNaskh" ? "selected ":""); ?>value="DroidArabicNaskh">Droid Arabic Naskh</option><option <?php echo ($options['adminfontname'] == "DroidArabicKufi" ? "selected ":""); ?>value="DroidArabicKufi">Droid Arabic Kufi</option><option <?php echo ($options['adminfontname'] == "BKoodak" ? "selected ":""); ?>value="BKoodak">B Koodak</option><option <?php echo ($options['adminfontname'] == "BBardiya" ? "selected ":""); ?>value="BBardiya">B Bardiya</option><option <?php echo ($options['adminfontname'] == "BEsfehan" ? "selected ":""); ?>value="BEsfehan">B Esfehan</option><option <?php echo ($options['adminfontname'] == "BHelal" ? "selected ":""); ?>value="BHelal">B Helal</option><option <?php echo ($options['adminfontname'] == "BMahsa" ? "selected ":""); ?>value="BMahsa">B Mahsa</option><option <?php echo ($options['adminfontname'] == "BMehr" ? "selected ":""); ?>value="BMehr">B Mehr</option><option <?php echo ($options['adminfontname'] == "BMitra" ? "selected ":""); ?>value="BMitra">B Mitra</option><option <?php echo ($options['adminfontname'] == "BJadid" ? "selected ":""); ?>value="BJadid">B Jadid</option><option <?php echo ($options['adminfontname'] == "BHoma" ? "selected ":""); ?>value="BHoma">B Homa</option><option <?php echo ($options['adminfontname'] == "BNasim" ? "selected ":""); ?>value="BNasim">B Nasim</option><option <?php echo ($options['adminfontname'] == "BNazanin" ? "selected ":""); ?>value="BNazanin">B Nazanin</option><option <?php echo ($options['adminfontname'] == "BSina" ? "selected ":""); ?>value="BSina">B Sina</option><option <?php echo ($options['adminfontname'] == "BTitr" ? "selected ":""); ?>value="BTitr">B Titr</option><option <?php echo ($options['adminfontname'] == "DastNevis" ? "selected ":""); ?>value="DastNevis">Dast Nevis</option><option <?php echo ($options['adminfontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['adminfontname'] == "YekanIR" ? "selected ":""); ?>value="YekanIR">IRYekan</option></optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>"><option <?php echo ($options['adminfontname'] == "Arial" ? "selected ":""); ?>value="Arial">Arial</option><option <?php echo ($options['adminfontname'] == "Verdana" ? "selected ":""); ?>value="Verdana">Verdana</option><option <?php echo ($options['adminfontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['adminfontname'] == "ComicSansMS" ? "selected ":""); ?>value="ComicSansMS">Comic Sans MS</option></optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>"><option <?php echo ($options['adminfontname'] == "SultanAdan, Arial" ? "selected ":""); ?>value="SultanAdan, Arial">Sultan Adan, Arial</option><option <?php echo ($options['adminfontname'] == "BYekan, Arial" ? "selected ":""); ?>value="BYekan, Arial">B Yekan, Arial</option><option <?php echo ($options['adminfontname'] == "DroidArabicNaskh, Arial" ? "selected ":""); ?>value="DroidArabicNaskh, Arial">Droid Arabic Naskh, Arial</option><option <?php echo ($options['adminfontname'] == "DroidArabicKufi, Arial" ? "selected ":""); ?>value="DroidArabicKufi, Arial">Droid Arabic Kufi, Arial</option><option <?php echo ($options['adminfontname'] == "BKoodak, Arial" ? "selected ":""); ?>value="BKoodak, Arial">B Koodak, Arial</option><option <?php echo ($options['adminfontname'] == "BBardiya, Arial" ? "selected ":""); ?>value="BBardiya, Arial">B Bardiya, Arial</option><option <?php echo ($options['adminfontname'] == "BEsfehan, Arial" ? "selected ":""); ?>value="BEsfehan, Arial">B Esfehan, Arial</option><option <?php echo ($options['adminfontname'] == "BHelal, Arial" ? "selected ":""); ?>value="BHelal, Arial">B Helal, Arial</option><option <?php echo ($options['adminfontname'] == "BMahsa, Arial" ? "selected ":""); ?>value="BMahsa, Arial">B Mahsa, Arial</option><option <?php echo ($options['adminfontname'] == "BMehr, Arial" ? "selected ":""); ?>value="BMehr, Arial">B Mehr, Arial</option><option <?php echo ($options['adminfontname'] == "BMitra, Arial" ? "selected ":""); ?>value="BMitra, Arial">B Mitra, Arial</option><option <?php echo ($options['adminfontname'] == "BJadid, Arial" ? "selected ":""); ?>value="BJadid, Arial">B Jadid, Arial</option><option <?php echo ($options['adminfontname'] == "BHoma, Arial" ? "selected ":""); ?>value="BHoma, Arial">B Homa, Arial</option><option <?php echo ($options['adminfontname'] == "BNasim, Arial" ? "selected ":""); ?>value="BNasim, Arial">B Nasim, Arial</option><option <?php echo ($options['adminfontname'] == "BNazanin, Arial" ? "selected ":""); ?>value="BNazanin, Arial">B Nazanin, Arial</option><option <?php echo ($options['adminfontname'] == "BSina, Arial" ? "selected ":""); ?>value="BSina, Arial">B Sina, Arial</option><option <?php echo ($options['adminfontname'] == "BTitr, Arial" ? "selected ":""); ?>value="BTitr, Arial">B Titr, Arial</option><option <?php echo ($options['adminfontname'] == "DastNevis, Arial" ? "selected ":""); ?>value="DastNevis, Arial">Dast Nevis, Arial</option><option <?php echo ($options['adminfontname'] == "Tahoma, Arial" ? "selected ":""); ?>value="Tahoma, Arial">Tahoma, Arial</option><option <?php echo ($options['adminfontname'] == "SultanAdan, Verdana" ? "selected ":""); ?>value="SultanAdan, Verdana">Sultan Adan, Verdana</option><option <?php echo ($options['adminfontname'] == "BYekan, Verdana" ? "selected ":""); ?>value="BYekan, Verdana">B Yekan, Verdana</option><option <?php echo ($options['adminfontname'] == "DroidArabicNaskh, Verdana" ? "selected ":""); ?>value="DroidArabicNaskh, Verdana">Droid Arabic Naskh, Verdana</option><option <?php echo ($options['adminfontname'] == "DroidArabicKufi, Verdana" ? "selected ":""); ?>value="DroidArabicKufi, Verdana">Droid Arabic Kufi, Verdana</option><option <?php echo ($options['adminfontname'] == "BKoodak, Verdana" ? "selected ":""); ?>value="BKoodak, Verdana">B Koodak, Verdana</option><option <?php echo ($options['adminfontname'] == "BBardiya, Verdana" ? "selected ":""); ?>value="BBardiya, Verdana">B Bardiya, Verdana</option><option <?php echo ($options['adminfontname'] == "BEsfehan, Verdana" ? "selected ":""); ?>value="BEsfehan, Verdana">B Esfehan, Verdana</option><option <?php echo ($options['adminfontname'] == "BHelal, Verdana" ? "selected ":""); ?>value="BHelal, Verdana">B Helal, Verdana</option><option <?php echo ($options['adminfontname'] == "BMahsa, Verdana" ? "selected ":""); ?>value="BMahsa, Verdana">B Mahsa, Verdana</option><option <?php echo ($options['adminfontname'] == "BMehr, Verdana" ? "selected ":""); ?>value="BMehr, Verdana">B Mehr, Verdana</option><option <?php echo ($options['adminfontname'] == "BMitra, Verdana" ? "selected ":""); ?>value="BMitra, Verdana">B Mitra, Verdana</option><option <?php echo ($options['adminfontname'] == "BJadid, Verdana" ? "selected ":""); ?>value="BJadid, Verdana">B Jadid, Verdana</option><option <?php echo ($options['adminfontname'] == "BHoma, Verdana" ? "selected ":""); ?>value="BHoma, Verdana">B Homa, Verdana</option><option <?php echo ($options['adminfontname'] == "BNasim, Verdana" ? "selected ":""); ?>value="BNasim, Verdana">B Nasim, Verdana</option><option <?php echo ($options['adminfontname'] == "BNazanin, Verdana" ? "selected ":""); ?>value="BNazanin, Verdana">B Nazanin, Verdana</option><option <?php echo ($options['adminfontname'] == "BSina, Verdana" ? "selected ":""); ?>value="BSina, Verdana">B Sina, Verdana</option><option <?php echo ($options['adminfontname'] == "BTitr, Verdana" ? "selected ":""); ?>value="BTitr, Verdana">B Titr, Verdana</option><option <?php echo ($options['adminfontname'] == "DastNevis, Verdana" ? "selected ":""); ?>value="DastNevis, Verdana">Dast Nevis, Verdana</option><option <?php echo ($options['adminfontname'] == "SultanAdan, ComicSansMS" ? "selected ":""); ?>value="SultanAdan, ComicSansMS">Sultan Adan, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BYekan, ComicSansMS" ? "selected ":""); ?>value="BYekan, ComicSansMS">B Yekan, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "DroidArabicNaskh, ComicSansMS" ? "selected ":""); ?>value="DroidArabicNaskh, ComicSansMS">Droid Arabic Naskh, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "DroidArabicKufi, ComicSansMS" ? "selected ":""); ?>value="DroidArabicKufi, ComicSansMS">Droid Arabic Kufi, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BKoodak, ComicSansMS" ? "selected ":""); ?>value="BKoodak, ComicSansMS">B Koodak, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BBardiya, ComicSansMS" ? "selected ":""); ?>value="BBardiya, ComicSansMS">B Bardiya, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BEsfehan, ComicSansMS" ? "selected ":""); ?>value="BEsfehan, ComicSansMS">B Esfehan, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BHelal, ComicSansMS" ? "selected ":""); ?>value="BHelal, ComicSansMS">B Helal, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BMahsa, ComicSansMS" ? "selected ":""); ?>value="BMahsa, ComicSansMS">B Mahsa, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BMehr, ComicSansMS" ? "selected ":""); ?>value="BMehr, ComicSansMS">B Mehr, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BMitra, ComicSansMS" ? "selected ":""); ?>value="BMitra, ComicSansMS">B Mitra, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BJadid, ComicSansMS" ? "selected ":""); ?>value="BJadid, ComicSansMS">B Jadid, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BHoma, ComicSansMS" ? "selected ":""); ?>value="BHoma, ComicSansMS">B Homa, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BNasim, ComicSansMS" ? "selected ":""); ?>value="BNasim, ComicSansMS">B Nasim, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BNazanin, ComicSansMS" ? "selected ":""); ?>value="BNazanin, ComicSansMS">B Nazanin, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BSina, ComicSansMS" ? "selected ":""); ?>value="BSina, ComicSansMS">B Sina, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "BTitr, ComicSansMS" ? "selected ":""); ?>value="BTitr, ComicSansMS">B Titr, Comic Sans MS</option><option <?php echo ($options['adminfontname'] == "DastNevis, ComicSansMS" ? "selected ":""); ?>value="DastNevis, ComicSansMS">Dast Nevis, Comic Sans MS</option></optgroup>
</select>
<p class="description"><?php _e('Please select font family.', 'mwfc'); ?></p></td>
</tr>
</table>	
<hr/>		
<table class="form-table">
<h3><?php _e('Custom class and id 1', 'mwfc'); ?></h3>         
<tr valign="top">
<th scope="row"><?php _e('Enter theme classes and ids. You can separate theme with latin comma (,).', 'mwfc'); ?></th>
<td><textarea name="site_font_settings[c1listidclass]" style="direction:ltr;" cols="60" rows="5" id="site_font_settings[c1listidclass]" class="regular-text"><?php esc_attr_e($options['c1listidclass']); ?></textarea></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[c1fontname]" id="site_font_settings[c1fontname]">
<option value=""><?php _e('None', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>"><option <?php echo ($options['c1fontname'] == "IRAN Sans" ? "selected ":""); ?>value="IRAN Sans">IRAN Sans</option><option <?php echo ($options['c1fontname'] == "SultanAdan" ? "selected ":""); ?>value="SultanAdan">Sultan Adan</option><option <?php echo ($options['c1fontname'] == "BYekan" ? "selected ":""); ?>value="BYekan">B Yekan</option><option <?php echo ($options['c1fontname'] == "DroidArabicNaskh" ? "selected ":""); ?>value="DroidArabicNaskh">Droid Arabic Naskh</option><option <?php echo ($options['c1fontname'] == "DroidArabicKufi" ? "selected ":""); ?>value="DroidArabicKufi">Droid Arabic Kufi</option><option <?php echo ($options['c1fontname'] == "BKoodak" ? "selected ":""); ?>value="BKoodak">B Koodak</option><option <?php echo ($options['c1fontname'] == "BBardiya" ? "selected ":""); ?>value="BBardiya">B Bardiya</option><option <?php echo ($options['c1fontname'] == "BEsfehan" ? "selected ":""); ?>value="BEsfehan">B Esfehan</option><option <?php echo ($options['c1fontname'] == "BHelal" ? "selected ":""); ?>value="BHelal">B Helal</option><option <?php echo ($options['c1fontname'] == "BMahsa" ? "selected ":""); ?>value="BMahsa">B Mahsa</option><option <?php echo ($options['c1fontname'] == "BMehr" ? "selected ":""); ?>value="BMehr">B Mehr</option><option <?php echo ($options['c1fontname'] == "BMitra" ? "selected ":""); ?>value="BMitra">B Mitra</option><option <?php echo ($options['c1fontname'] == "BJadid" ? "selected ":""); ?>value="BJadid">B Jadid</option><option <?php echo ($options['c1fontname'] == "BHoma" ? "selected ":""); ?>value="BHoma">B Homa</option><option <?php echo ($options['c1fontname'] == "BNasim" ? "selected ":""); ?>value="BNasim">B Nasim</option><option <?php echo ($options['c1fontname'] == "BNazanin" ? "selected ":""); ?>value="BNazanin">B Nazanin</option><option <?php echo ($options['c1fontname'] == "BSina" ? "selected ":""); ?>value="BSina">B Sina</option><option <?php echo ($options['c1fontname'] == "BTitr" ? "selected ":""); ?>value="BTitr">B Titr</option><option <?php echo ($options['c1fontname'] == "DastNevis" ? "selected ":""); ?>value="DastNevis">Dast Nevis</option><option <?php echo ($options['c1fontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['c1fontname'] == "YekanIR" ? "selected ":""); ?>value="YekanIR">IRYekan</option></optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>"><option <?php echo ($options['c1fontname'] == "Arial" ? "selected ":""); ?>value="Arial">Arial</option><option <?php echo ($options['c1fontname'] == "Verdana" ? "selected ":""); ?>value="Verdana">Verdana</option><option <?php echo ($options['c1fontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['c1fontname'] == "ComicSansMS" ? "selected ":""); ?>value="ComicSansMS">Comic Sans MS</option></optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>"><option <?php echo ($options['c1fontname'] == "SultanAdan, Arial" ? "selected ":""); ?>value="SultanAdan, Arial">Sultan Adan, Arial</option><option <?php echo ($options['c1fontname'] == "BYekan, Arial" ? "selected ":""); ?>value="BYekan, Arial">B Yekan, Arial</option><option <?php echo ($options['c1fontname'] == "DroidArabicNaskh, Arial" ? "selected ":""); ?>value="DroidArabicNaskh, Arial">Droid Arabic Naskh, Arial</option><option <?php echo ($options['c1fontname'] == "DroidArabicKufi, Arial" ? "selected ":""); ?>value="DroidArabicKufi, Arial">Droid Arabic Kufi, Arial</option><option <?php echo ($options['c1fontname'] == "BKoodak, Arial" ? "selected ":""); ?>value="BKoodak, Arial">B Koodak, Arial</option><option <?php echo ($options['c1fontname'] == "BBardiya, Arial" ? "selected ":""); ?>value="BBardiya, Arial">B Bardiya, Arial</option><option <?php echo ($options['c1fontname'] == "BEsfehan, Arial" ? "selected ":""); ?>value="BEsfehan, Arial">B Esfehan, Arial</option><option <?php echo ($options['c1fontname'] == "BHelal, Arial" ? "selected ":""); ?>value="BHelal, Arial">B Helal, Arial</option><option <?php echo ($options['c1fontname'] == "BMahsa, Arial" ? "selected ":""); ?>value="BMahsa, Arial">B Mahsa, Arial</option><option <?php echo ($options['c1fontname'] == "BMehr, Arial" ? "selected ":""); ?>value="BMehr, Arial">B Mehr, Arial</option><option <?php echo ($options['c1fontname'] == "BMitra, Arial" ? "selected ":""); ?>value="BMitra, Arial">B Mitra, Arial</option><option <?php echo ($options['c1fontname'] == "BJadid, Arial" ? "selected ":""); ?>value="BJadid, Arial">B Jadid, Arial</option><option <?php echo ($options['c1fontname'] == "BHoma, Arial" ? "selected ":""); ?>value="BHoma, Arial">B Homa, Arial</option><option <?php echo ($options['c1fontname'] == "BNasim, Arial" ? "selected ":""); ?>value="BNasim, Arial">B Nasim, Arial</option><option <?php echo ($options['c1fontname'] == "BNazanin, Arial" ? "selected ":""); ?>value="BNazanin, Arial">B Nazanin, Arial</option><option <?php echo ($options['c1fontname'] == "BSina, Arial" ? "selected ":""); ?>value="BSina, Arial">B Sina, Arial</option><option <?php echo ($options['c1fontname'] == "BTitr, Arial" ? "selected ":""); ?>value="BTitr, Arial">B Titr, Arial</option><option <?php echo ($options['c1fontname'] == "DastNevis, Arial" ? "selected ":""); ?>value="DastNevis, Arial">Dast Nevis, Arial</option><option <?php echo ($options['c1fontname'] == "Tahoma, Arial" ? "selected ":""); ?>value="Tahoma, Arial">Tahoma, Arial</option><option <?php echo ($options['c1fontname'] == "SultanAdan, Verdana" ? "selected ":""); ?>value="SultanAdan, Verdana">Sultan Adan, Verdana</option><option <?php echo ($options['c1fontname'] == "BYekan, Verdana" ? "selected ":""); ?>value="BYekan, Verdana">B Yekan, Verdana</option><option <?php echo ($options['c1fontname'] == "DroidArabicNaskh, Verdana" ? "selected ":""); ?>value="DroidArabicNaskh, Verdana">Droid Arabic Naskh, Verdana</option><option <?php echo ($options['c1fontname'] == "DroidArabicKufi, Verdana" ? "selected ":""); ?>value="DroidArabicKufi, Verdana">Droid Arabic Kufi, Verdana</option><option <?php echo ($options['c1fontname'] == "BKoodak, Verdana" ? "selected ":""); ?>value="BKoodak, Verdana">B Koodak, Verdana</option><option <?php echo ($options['c1fontname'] == "BBardiya, Verdana" ? "selected ":""); ?>value="BBardiya, Verdana">B Bardiya, Verdana</option><option <?php echo ($options['c1fontname'] == "BEsfehan, Verdana" ? "selected ":""); ?>value="BEsfehan, Verdana">B Esfehan, Verdana</option><option <?php echo ($options['c1fontname'] == "BHelal, Verdana" ? "selected ":""); ?>value="BHelal, Verdana">B Helal, Verdana</option><option <?php echo ($options['c1fontname'] == "BMahsa, Verdana" ? "selected ":""); ?>value="BMahsa, Verdana">B Mahsa, Verdana</option><option <?php echo ($options['c1fontname'] == "BMehr, Verdana" ? "selected ":""); ?>value="BMehr, Verdana">B Mehr, Verdana</option><option <?php echo ($options['c1fontname'] == "BMitra, Verdana" ? "selected ":""); ?>value="BMitra, Verdana">B Mitra, Verdana</option><option <?php echo ($options['c1fontname'] == "BJadid, Verdana" ? "selected ":""); ?>value="BJadid, Verdana">B Jadid, Verdana</option><option <?php echo ($options['c1fontname'] == "BHoma, Verdana" ? "selected ":""); ?>value="BHoma, Verdana">B Homa, Verdana</option><option <?php echo ($options['c1fontname'] == "BNasim, Verdana" ? "selected ":""); ?>value="BNasim, Verdana">B Nasim, Verdana</option><option <?php echo ($options['c1fontname'] == "BNazanin, Verdana" ? "selected ":""); ?>value="BNazanin, Verdana">B Nazanin, Verdana</option><option <?php echo ($options['c1fontname'] == "BSina, Verdana" ? "selected ":""); ?>value="BSina, Verdana">B Sina, Verdana</option><option <?php echo ($options['c1fontname'] == "BTitr, Verdana" ? "selected ":""); ?>value="BTitr, Verdana">B Titr, Verdana</option><option <?php echo ($options['c1fontname'] == "DastNevis, Verdana" ? "selected ":""); ?>value="DastNevis, Verdana">Dast Nevis, Verdana</option><option <?php echo ($options['c1fontname'] == "SultanAdan, ComicSansMS" ? "selected ":""); ?>value="SultanAdan, ComicSansMS">Sultan Adan, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BYekan, ComicSansMS" ? "selected ":""); ?>value="BYekan, ComicSansMS">B Yekan, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "DroidArabicNaskh, ComicSansMS" ? "selected ":""); ?>value="DroidArabicNaskh, ComicSansMS">Droid Arabic Naskh, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "DroidArabicKufi, ComicSansMS" ? "selected ":""); ?>value="DroidArabicKufi, ComicSansMS">Droid Arabic Kufi, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BKoodak, ComicSansMS" ? "selected ":""); ?>value="BKoodak, ComicSansMS">B Koodak, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BBardiya, ComicSansMS" ? "selected ":""); ?>value="BBardiya, ComicSansMS">B Bardiya, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BEsfehan, ComicSansMS" ? "selected ":""); ?>value="BEsfehan, ComicSansMS">B Esfehan, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BHelal, ComicSansMS" ? "selected ":""); ?>value="BHelal, ComicSansMS">B Helal, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BMahsa, ComicSansMS" ? "selected ":""); ?>value="BMahsa, ComicSansMS">B Mahsa, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BMehr, ComicSansMS" ? "selected ":""); ?>value="BMehr, ComicSansMS">B Mehr, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BMitra, ComicSansMS" ? "selected ":""); ?>value="BMitra, ComicSansMS">B Mitra, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BJadid, ComicSansMS" ? "selected ":""); ?>value="BJadid, ComicSansMS">B Jadid, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BHoma, ComicSansMS" ? "selected ":""); ?>value="BHoma, ComicSansMS">B Homa, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BNasim, ComicSansMS" ? "selected ":""); ?>value="BNasim, ComicSansMS">B Nasim, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BNazanin, ComicSansMS" ? "selected ":""); ?>value="BNazanin, ComicSansMS">B Nazanin, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BSina, ComicSansMS" ? "selected ":""); ?>value="BSina, ComicSansMS">B Sina, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "BTitr, ComicSansMS" ? "selected ":""); ?>value="BTitr, ComicSansMS">B Titr, Comic Sans MS</option><option <?php echo ($options['c1fontname'] == "DastNevis, ComicSansMS" ? "selected ":""); ?>value="DastNevis, ComicSansMS">Dast Nevis, Comic Sans MS</option></optgroup>
</select>
<p class="description"><?php _e('Please select font family.', 'mwfc'); ?></p></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Size', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[c1fontsize]" id="site_font_settings[c1fontsize]">
<option value=""><?php _e('None', 'mwfc'); ?></option><option <?php echo ($options['c1fontsize'] == "5" ? "selected ":""); ?>value="5">5</option><option <?php echo ($options['c1fontsize'] == "6" ? "selected ":""); ?>value="6">6</option><option <?php echo ($options['c1fontsize'] == "7" ? "selected ":""); ?>value="7">7</option><option <?php echo ($options['c1fontsize'] == "8" ? "selected ":""); ?>value="8">8</option><option <?php echo ($options['c1fontsize'] == "9" ? "selected ":""); ?>value="9">9</option><option <?php echo ($options['c1fontsize'] == "10" ? "selected ":""); ?>value="10">10</option><option <?php echo ($options['c1fontsize'] == "11" ? "selected ":""); ?>value="11">11</option><option <?php echo ($options['c1fontsize'] == "12" ? "selected ":""); ?>value="12">12</option><option <?php echo ($options['c1fontsize'] == "13" ? "selected ":""); ?>value="13">13</option><option <?php echo ($options['c1fontsize'] == "14" ? "selected ":""); ?>value="14">14</option><option <?php echo ($options['c1fontsize'] == "15" ? "selected ":""); ?>value="15">15</option><option <?php echo ($options['c1fontsize'] == "16" ? "selected ":""); ?>value="16">16</option><option <?php echo ($options['c1fontsize'] == "17" ? "selected ":""); ?>value="17">17</option><option <?php echo ($options['c1fontsize'] == "18" ? "selected ":""); ?>value="18">18</option><option <?php echo ($options['c1fontsize'] == "19" ? "selected ":""); ?>value="19">19</option><option <?php echo ($options['c1fontsize'] == "20" ? "selected ":""); ?>value="20">20</option><option <?php echo ($options['c1fontsize'] == "21" ? "selected ":""); ?>value="21">21</option><option <?php echo ($options['c1fontsize'] == "22" ? "selected ":""); ?>value="22">22</option><option <?php echo ($options['c1fontsize'] == "23" ? "selected ":""); ?>value="23">23</option><option <?php echo ($options['c1fontsize'] == "24" ? "selected ":""); ?>value="24">24</option><option <?php echo ($options['c1fontsize'] == "25" ? "selected ":""); ?>value="25">25</option><option <?php echo ($options['c1fontsize'] == "26" ? "selected ":""); ?>value="26">26</option><option <?php echo ($options['c1fontsize'] == "27" ? "selected ":""); ?>value="27">27</option><option <?php echo ($options['c1fontsize'] == "28" ? "selected ":""); ?>value="28">28</option><option <?php echo ($options['c1fontsize'] == "29" ? "selected ":""); ?>value="29">29</option><option <?php echo ($options['c1fontsize'] == "30" ? "selected ":""); ?>value="30">30</option><option <?php echo ($options['c1fontsize'] == "31" ? "selected ":""); ?>value="31">31</option><option <?php echo ($options['c1fontsize'] == "32" ? "selected ":""); ?>value="32">32</option><option <?php echo ($options['c1fontsize'] == "33" ? "selected ":""); ?>value="33">33</option><option <?php echo ($options['c1fontsize'] == "34" ? "selected ":""); ?>value="34">34</option><option <?php echo ($options['c1fontsize'] == "35" ? "selected ":""); ?>value="35">35</option><option <?php echo ($options['c1fontsize'] == "36" ? "selected ":""); ?>value="36">36</option><option <?php echo ($options['c1fontsize'] == "37" ? "selected ":""); ?>value="37">37</option><option <?php echo ($options['c1fontsize'] == "38" ? "selected ":""); ?>value="38">38</option><option <?php echo ($options['c1fontsize'] == "39" ? "selected ":""); ?>value="39">39</option><option <?php echo ($options['c1fontsize'] == "40" ? "selected ":""); ?>value="40">40</option><option <?php echo ($options['c1fontsize'] == "41" ? "selected ":""); ?>value="41">41</option><option <?php echo ($options['c1fontsize'] == "42" ? "selected ":""); ?>value="42">42</option><option <?php echo ($options['c1fontsize'] == "43" ? "selected ":""); ?>value="43">43</option><option <?php echo ($options['c1fontsize'] == "44" ? "selected ":""); ?>value="44">44</option><option <?php echo ($options['c1fontsize'] == "45" ? "selected ":""); ?>value="45">45</option><option <?php echo ($options['c1fontsize'] == "46" ? "selected ":""); ?>value="46">46</option><option <?php echo ($options['c1fontsize'] == "47" ? "selected ":""); ?>value="47">47</option><option <?php echo ($options['c1fontsize'] == "48" ? "selected ":""); ?>value="48">48</option><option <?php echo ($options['c1fontsize'] == "49" ? "selected ":""); ?>value="49">49</option><option <?php echo ($options['c1fontsize'] == "50" ? "selected ":""); ?>value="50">50</option><option <?php echo ($options['c1fontsize'] == "51" ? "selected ":""); ?>value="51">51</option><option <?php echo ($options['c1fontsize'] == "52" ? "selected ":""); ?>value="52">52</option><option <?php echo ($options['c1fontsize'] == "53" ? "selected ":""); ?>value="53">53</option><option <?php echo ($options['c1fontsize'] == "54" ? "selected ":""); ?>value="54">54</option><option <?php echo ($options['c1fontsize'] == "55" ? "selected ":""); ?>value="55">55</option><option <?php echo ($options['c1fontsize'] == "56" ? "selected ":""); ?>value="56">56</option><option <?php echo ($options['c1fontsize'] == "57" ? "selected ":""); ?>value="57">57</option><option <?php echo ($options['c1fontsize'] == "58" ? "selected ":""); ?>value="58">58</option><option <?php echo ($options['c1fontsize'] == "59" ? "selected ":""); ?>value="59">59</option><option <?php echo ($options['c1fontsize'] == "60" ? "selected ":""); ?>value="60">60</option>	
</select>
<p class="description"><?php _e('Please select font size.', 'mwfc'); ?></p></td>
</tr>
</table>
<hr/>		
<table class="form-table">
<h3><?php _e('Custom class and id 2', 'mwfc'); ?></h3>         
<tr valign="top">
<th scope="row"><?php _e('Enter theme classes and ids. You can separate theme with latin comma (,).', 'mwfc'); ?></th>
<td><textarea name="site_font_settings[c2listidclass]" cols="60" rows="5" style="direction:ltr;" id="site_font_settings[c2listidclass]" class="regular-text"><?php esc_attr_e($options['c2listidclass']); ?></textarea></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[c2fontname]" id="site_font_settings[c2fontname]">
<option value=""><?php _e('None', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>"><option <?php echo ($options['c2fontname'] == "IRAN Sans" ? "selected ":""); ?>value="IRAN Sans">IRAN Sans</option><option <?php echo ($options['c2fontname'] == "SultanAdan" ? "selected ":""); ?>value="SultanAdan">Sultan Adan</option><option <?php echo ($options['c2fontname'] == "BYekan" ? "selected ":""); ?>value="BYekan">B Yekan</option><option <?php echo ($options['c2fontname'] == "DroidArabicNaskh" ? "selected ":""); ?>value="DroidArabicNaskh">Droid Arabic Naskh</option><option <?php echo ($options['c2fontname'] == "DroidArabicKufi" ? "selected ":""); ?>value="DroidArabicKufi">Droid Arabic Kufi</option><option <?php echo ($options['c2fontname'] == "BKoodak" ? "selected ":""); ?>value="BKoodak">B Koodak</option><option <?php echo ($options['c2fontname'] == "BBardiya" ? "selected ":""); ?>value="BBardiya">B Bardiya</option><option <?php echo ($options['c2fontname'] == "BEsfehan" ? "selected ":""); ?>value="BEsfehan">B Esfehan</option><option <?php echo ($options['c2fontname'] == "BHelal" ? "selected ":""); ?>value="BHelal">B Helal</option><option <?php echo ($options['c2fontname'] == "BMahsa" ? "selected ":""); ?>value="BMahsa">B Mahsa</option><option <?php echo ($options['c2fontname'] == "BMehr" ? "selected ":""); ?>value="BMehr">B Mehr</option><option <?php echo ($options['c2fontname'] == "BMitra" ? "selected ":""); ?>value="BMitra">B Mitra</option><option <?php echo ($options['c2fontname'] == "BJadid" ? "selected ":""); ?>value="BJadid">B Jadid</option><option <?php echo ($options['c2fontname'] == "BHoma" ? "selected ":""); ?>value="BHoma">B Homa</option><option <?php echo ($options['c2fontname'] == "BNasim" ? "selected ":""); ?>value="BNasim">B Nasim</option><option <?php echo ($options['c2fontname'] == "BNazanin" ? "selected ":""); ?>value="BNazanin">B Nazanin</option><option <?php echo ($options['c2fontname'] == "BSina" ? "selected ":""); ?>value="BSina">B Sina</option><option <?php echo ($options['c2fontname'] == "BTitr" ? "selected ":""); ?>value="BTitr">B Titr</option><option <?php echo ($options['c2fontname'] == "DastNevis" ? "selected ":""); ?>value="DastNevis">Dast Nevis</option><option <?php echo ($options['c2fontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['c2fontname'] == "YekanIR" ? "selected ":""); ?>value="YekanIR">IRYekan</option></optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>"><option <?php echo ($options['c2fontname'] == "Arial" ? "selected ":""); ?>value="Arial">Arial</option><option <?php echo ($options['c2fontname'] == "Verdana" ? "selected ":""); ?>value="Verdana">Verdana</option><option <?php echo ($options['c2fontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['c2fontname'] == "ComicSansMS" ? "selected ":""); ?>value="ComicSansMS">Comic Sans MS</option></optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>"><option <?php echo ($options['c2fontname'] == "SultanAdan, Arial" ? "selected ":""); ?>value="SultanAdan, Arial">Sultan Adan, Arial</option><option <?php echo ($options['c2fontname'] == "BYekan, Arial" ? "selected ":""); ?>value="BYekan, Arial">B Yekan, Arial</option><option <?php echo ($options['c2fontname'] == "DroidArabicNaskh, Arial" ? "selected ":""); ?>value="DroidArabicNaskh, Arial">Droid Arabic Naskh, Arial</option><option <?php echo ($options['c2fontname'] == "DroidArabicKufi, Arial" ? "selected ":""); ?>value="DroidArabicKufi, Arial">Droid Arabic Kufi, Arial</option><option <?php echo ($options['c2fontname'] == "BKoodak, Arial" ? "selected ":""); ?>value="BKoodak, Arial">B Koodak, Arial</option><option <?php echo ($options['c2fontname'] == "BBardiya, Arial" ? "selected ":""); ?>value="BBardiya, Arial">B Bardiya, Arial</option><option <?php echo ($options['c2fontname'] == "BEsfehan, Arial" ? "selected ":""); ?>value="BEsfehan, Arial">B Esfehan, Arial</option><option <?php echo ($options['c2fontname'] == "BHelal, Arial" ? "selected ":""); ?>value="BHelal, Arial">B Helal, Arial</option><option <?php echo ($options['c2fontname'] == "BMahsa, Arial" ? "selected ":""); ?>value="BMahsa, Arial">B Mahsa, Arial</option><option <?php echo ($options['c2fontname'] == "BMehr, Arial" ? "selected ":""); ?>value="BMehr, Arial">B Mehr, Arial</option><option <?php echo ($options['c2fontname'] == "BMitra, Arial" ? "selected ":""); ?>value="BMitra, Arial">B Mitra, Arial</option><option <?php echo ($options['c2fontname'] == "BJadid, Arial" ? "selected ":""); ?>value="BJadid, Arial">B Jadid, Arial</option><option <?php echo ($options['c2fontname'] == "BHoma, Arial" ? "selected ":""); ?>value="BHoma, Arial">B Homa, Arial</option><option <?php echo ($options['c2fontname'] == "BNasim, Arial" ? "selected ":""); ?>value="BNasim, Arial">B Nasim, Arial</option><option <?php echo ($options['c2fontname'] == "BNazanin, Arial" ? "selected ":""); ?>value="BNazanin, Arial">B Nazanin, Arial</option><option <?php echo ($options['c2fontname'] == "BSina, Arial" ? "selected ":""); ?>value="BSina, Arial">B Sina, Arial</option><option <?php echo ($options['c2fontname'] == "BTitr, Arial" ? "selected ":""); ?>value="BTitr, Arial">B Titr, Arial</option><option <?php echo ($options['c2fontname'] == "DastNevis, Arial" ? "selected ":""); ?>value="DastNevis, Arial">Dast Nevis, Arial</option><option <?php echo ($options['c2fontname'] == "Tahoma, Arial" ? "selected ":""); ?>value="Tahoma, Arial">Tahoma, Arial</option><option <?php echo ($options['c2fontname'] == "SultanAdan, Verdana" ? "selected ":""); ?>value="SultanAdan, Verdana">Sultan Adan, Verdana</option><option <?php echo ($options['c2fontname'] == "BYekan, Verdana" ? "selected ":""); ?>value="BYekan, Verdana">B Yekan, Verdana</option><option <?php echo ($options['c2fontname'] == "DroidArabicNaskh, Verdana" ? "selected ":""); ?>value="DroidArabicNaskh, Verdana">Droid Arabic Naskh, Verdana</option><option <?php echo ($options['c2fontname'] == "DroidArabicKufi, Verdana" ? "selected ":""); ?>value="DroidArabicKufi, Verdana">Droid Arabic Kufi, Verdana</option><option <?php echo ($options['c2fontname'] == "BKoodak, Verdana" ? "selected ":""); ?>value="BKoodak, Verdana">B Koodak, Verdana</option><option <?php echo ($options['c2fontname'] == "BBardiya, Verdana" ? "selected ":""); ?>value="BBardiya, Verdana">B Bardiya, Verdana</option><option <?php echo ($options['c2fontname'] == "BEsfehan, Verdana" ? "selected ":""); ?>value="BEsfehan, Verdana">B Esfehan, Verdana</option><option <?php echo ($options['c2fontname'] == "BHelal, Verdana" ? "selected ":""); ?>value="BHelal, Verdana">B Helal, Verdana</option><option <?php echo ($options['c2fontname'] == "BMahsa, Verdana" ? "selected ":""); ?>value="BMahsa, Verdana">B Mahsa, Verdana</option><option <?php echo ($options['c2fontname'] == "BMehr, Verdana" ? "selected ":""); ?>value="BMehr, Verdana">B Mehr, Verdana</option><option <?php echo ($options['c2fontname'] == "BMitra, Verdana" ? "selected ":""); ?>value="BMitra, Verdana">B Mitra, Verdana</option><option <?php echo ($options['c2fontname'] == "BJadid, Verdana" ? "selected ":""); ?>value="BJadid, Verdana">B Jadid, Verdana</option><option <?php echo ($options['c2fontname'] == "BHoma, Verdana" ? "selected ":""); ?>value="BHoma, Verdana">B Homa, Verdana</option><option <?php echo ($options['c2fontname'] == "BNasim, Verdana" ? "selected ":""); ?>value="BNasim, Verdana">B Nasim, Verdana</option><option <?php echo ($options['c2fontname'] == "BNazanin, Verdana" ? "selected ":""); ?>value="BNazanin, Verdana">B Nazanin, Verdana</option><option <?php echo ($options['c2fontname'] == "BSina, Verdana" ? "selected ":""); ?>value="BSina, Verdana">B Sina, Verdana</option><option <?php echo ($options['c2fontname'] == "BTitr, Verdana" ? "selected ":""); ?>value="BTitr, Verdana">B Titr, Verdana</option><option <?php echo ($options['c2fontname'] == "DastNevis, Verdana" ? "selected ":""); ?>value="DastNevis, Verdana">Dast Nevis, Verdana</option><option <?php echo ($options['c2fontname'] == "SultanAdan, ComicSansMS" ? "selected ":""); ?>value="SultanAdan, ComicSansMS">Sultan Adan, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BYekan, ComicSansMS" ? "selected ":""); ?>value="BYekan, ComicSansMS">B Yekan, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "DroidArabicNaskh, ComicSansMS" ? "selected ":""); ?>value="DroidArabicNaskh, ComicSansMS">Droid Arabic Naskh, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "DroidArabicKufi, ComicSansMS" ? "selected ":""); ?>value="DroidArabicKufi, ComicSansMS">Droid Arabic Kufi, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BKoodak, ComicSansMS" ? "selected ":""); ?>value="BKoodak, ComicSansMS">B Koodak, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BBardiya, ComicSansMS" ? "selected ":""); ?>value="BBardiya, ComicSansMS">B Bardiya, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BEsfehan, ComicSansMS" ? "selected ":""); ?>value="BEsfehan, ComicSansMS">B Esfehan, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BHelal, ComicSansMS" ? "selected ":""); ?>value="BHelal, ComicSansMS">B Helal, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BMahsa, ComicSansMS" ? "selected ":""); ?>value="BMahsa, ComicSansMS">B Mahsa, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BMehr, ComicSansMS" ? "selected ":""); ?>value="BMehr, ComicSansMS">B Mehr, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BMitra, ComicSansMS" ? "selected ":""); ?>value="BMitra, ComicSansMS">B Mitra, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BJadid, ComicSansMS" ? "selected ":""); ?>value="BJadid, ComicSansMS">B Jadid, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BHoma, ComicSansMS" ? "selected ":""); ?>value="BHoma, ComicSansMS">B Homa, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BNasim, ComicSansMS" ? "selected ":""); ?>value="BNasim, ComicSansMS">B Nasim, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BNazanin, ComicSansMS" ? "selected ":""); ?>value="BNazanin, ComicSansMS">B Nazanin, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BSina, ComicSansMS" ? "selected ":""); ?>value="BSina, ComicSansMS">B Sina, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "BTitr, ComicSansMS" ? "selected ":""); ?>value="BTitr, ComicSansMS">B Titr, Comic Sans MS</option><option <?php echo ($options['c2fontname'] == "DastNevis, ComicSansMS" ? "selected ":""); ?>value="DastNevis, ComicSansMS">Dast Nevis, Comic Sans MS</option></optgroup>
</select>
<p class="description"><?php _e('Please select font family.', 'mwfc'); ?></p></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Size', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[c2fontsize]" id="site_font_settings[c2fontsize]">
<option value=""><?php _e('None', 'mwfc'); ?></option><option <?php echo ($options['c2fontsize'] == "5" ? "selected ":""); ?>value="5">5</option><option <?php echo ($options['c2fontsize'] == "6" ? "selected ":""); ?>value="6">6</option><option <?php echo ($options['c2fontsize'] == "7" ? "selected ":""); ?>value="7">7</option><option <?php echo ($options['c2fontsize'] == "8" ? "selected ":""); ?>value="8">8</option><option <?php echo ($options['c2fontsize'] == "9" ? "selected ":""); ?>value="9">9</option><option <?php echo ($options['c2fontsize'] == "10" ? "selected ":""); ?>value="10">10</option><option <?php echo ($options['c2fontsize'] == "11" ? "selected ":""); ?>value="11">11</option><option <?php echo ($options['c2fontsize'] == "12" ? "selected ":""); ?>value="12">12</option><option <?php echo ($options['c2fontsize'] == "13" ? "selected ":""); ?>value="13">13</option><option <?php echo ($options['c2fontsize'] == "14" ? "selected ":""); ?>value="14">14</option><option <?php echo ($options['c2fontsize'] == "15" ? "selected ":""); ?>value="15">15</option><option <?php echo ($options['c2fontsize'] == "16" ? "selected ":""); ?>value="16">16</option><option <?php echo ($options['c2fontsize'] == "17" ? "selected ":""); ?>value="17">17</option><option <?php echo ($options['c2fontsize'] == "18" ? "selected ":""); ?>value="18">18</option><option <?php echo ($options['c2fontsize'] == "19" ? "selected ":""); ?>value="19">19</option><option <?php echo ($options['c2fontsize'] == "20" ? "selected ":""); ?>value="20">20</option><option <?php echo ($options['c2fontsize'] == "21" ? "selected ":""); ?>value="21">21</option><option <?php echo ($options['c2fontsize'] == "22" ? "selected ":""); ?>value="22">22</option><option <?php echo ($options['c2fontsize'] == "23" ? "selected ":""); ?>value="23">23</option><option <?php echo ($options['c2fontsize'] == "24" ? "selected ":""); ?>value="24">24</option><option <?php echo ($options['c2fontsize'] == "25" ? "selected ":""); ?>value="25">25</option><option <?php echo ($options['c2fontsize'] == "26" ? "selected ":""); ?>value="26">26</option><option <?php echo ($options['c2fontsize'] == "27" ? "selected ":""); ?>value="27">27</option><option <?php echo ($options['c2fontsize'] == "28" ? "selected ":""); ?>value="28">28</option><option <?php echo ($options['c2fontsize'] == "29" ? "selected ":""); ?>value="29">29</option><option <?php echo ($options['c2fontsize'] == "30" ? "selected ":""); ?>value="30">30</option><option <?php echo ($options['c2fontsize'] == "31" ? "selected ":""); ?>value="31">31</option><option <?php echo ($options['c2fontsize'] == "32" ? "selected ":""); ?>value="32">32</option><option <?php echo ($options['c2fontsize'] == "33" ? "selected ":""); ?>value="33">33</option><option <?php echo ($options['c2fontsize'] == "34" ? "selected ":""); ?>value="34">34</option><option <?php echo ($options['c2fontsize'] == "35" ? "selected ":""); ?>value="35">35</option><option <?php echo ($options['c2fontsize'] == "36" ? "selected ":""); ?>value="36">36</option><option <?php echo ($options['c2fontsize'] == "37" ? "selected ":""); ?>value="37">37</option><option <?php echo ($options['c2fontsize'] == "38" ? "selected ":""); ?>value="38">38</option><option <?php echo ($options['c2fontsize'] == "39" ? "selected ":""); ?>value="39">39</option><option <?php echo ($options['c2fontsize'] == "40" ? "selected ":""); ?>value="40">40</option><option <?php echo ($options['c2fontsize'] == "41" ? "selected ":""); ?>value="41">41</option><option <?php echo ($options['c2fontsize'] == "42" ? "selected ":""); ?>value="42">42</option><option <?php echo ($options['c2fontsize'] == "43" ? "selected ":""); ?>value="43">43</option><option <?php echo ($options['c2fontsize'] == "44" ? "selected ":""); ?>value="44">44</option><option <?php echo ($options['c2fontsize'] == "45" ? "selected ":""); ?>value="45">45</option><option <?php echo ($options['c2fontsize'] == "46" ? "selected ":""); ?>value="46">46</option><option <?php echo ($options['c2fontsize'] == "47" ? "selected ":""); ?>value="47">47</option><option <?php echo ($options['c2fontsize'] == "48" ? "selected ":""); ?>value="48">48</option><option <?php echo ($options['c2fontsize'] == "49" ? "selected ":""); ?>value="49">49</option><option <?php echo ($options['c2fontsize'] == "50" ? "selected ":""); ?>value="50">50</option><option <?php echo ($options['c2fontsize'] == "51" ? "selected ":""); ?>value="51">51</option><option <?php echo ($options['c2fontsize'] == "52" ? "selected ":""); ?>value="52">52</option><option <?php echo ($options['c2fontsize'] == "53" ? "selected ":""); ?>value="53">53</option><option <?php echo ($options['c2fontsize'] == "54" ? "selected ":""); ?>value="54">54</option><option <?php echo ($options['c2fontsize'] == "55" ? "selected ":""); ?>value="55">55</option><option <?php echo ($options['c2fontsize'] == "56" ? "selected ":""); ?>value="56">56</option><option <?php echo ($options['c2fontsize'] == "57" ? "selected ":""); ?>value="57">57</option><option <?php echo ($options['c2fontsize'] == "58" ? "selected ":""); ?>value="58">58</option><option <?php echo ($options['c2fontsize'] == "59" ? "selected ":""); ?>value="59">59</option><option <?php echo ($options['c2fontsize'] == "60" ? "selected ":""); ?>value="60">60</option>	
</select>
<p class="description"><?php _e('Please select font size.', 'mwfc'); ?></p></td>
</tr>
</table>
<hr/>		
<table class="form-table">
<h3><?php _e('Custom class and id 3', 'mwfc'); ?></h3>         
<tr valign="top">
<th scope="row"><?php _e('Enter theme classes and ids. You can separate theme with latin comma (,).', 'mwfc'); ?></th>
<td><textarea name="site_font_settings[c3listidclass]" cols="60" rows="5" style="direction:ltr;" id="site_font_settings[c3listidclass]" class="regular-text"><?php esc_attr_e($options['c3listidclass']); ?></textarea></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Family', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[c3fontname]" id="site_font_settings[c3fontname]">
<option value=""><?php _e('None', 'mwfc'); ?></option>
<optgroup label="<?php _e('Persian Fonts', 'mwfc'); ?>"><option <?php echo ($options['c3fontname'] == "IRAN Sans" ? "selected ":""); ?>value="IRAN Sans">IRAN Sans</option><option <?php echo ($options['c3fontname'] == "SultanAdan" ? "selected ":""); ?>value="SultanAdan">Sultan Adan</option><option <?php echo ($options['c3fontname'] == "BYekan" ? "selected ":""); ?>value="BYekan">B Yekan</option><option <?php echo ($options['c3fontname'] == "DroidArabicNaskh" ? "selected ":""); ?>value="DroidArabicNaskh">Droid Arabic Naskh</option><option <?php echo ($options['c3fontname'] == "DroidArabicKufi" ? "selected ":""); ?>value="DroidArabicKufi">Droid Arabic Kufi</option><option <?php echo ($options['c3fontname'] == "BKoodak" ? "selected ":""); ?>value="BKoodak">B Koodak</option><option <?php echo ($options['c3fontname'] == "BBardiya" ? "selected ":""); ?>value="BBardiya">B Bardiya</option><option <?php echo ($options['c3fontname'] == "BEsfehan" ? "selected ":""); ?>value="BEsfehan">B Esfehan</option><option <?php echo ($options['c3fontname'] == "BHelal" ? "selected ":""); ?>value="BHelal">B Helal</option><option <?php echo ($options['c3fontname'] == "BMahsa" ? "selected ":""); ?>value="BMahsa">B Mahsa</option><option <?php echo ($options['c3fontname'] == "BMehr" ? "selected ":""); ?>value="BMehr">B Mehr</option><option <?php echo ($options['c3fontname'] == "BMitra" ? "selected ":""); ?>value="BMitra">B Mitra</option><option <?php echo ($options['c3fontname'] == "BJadid" ? "selected ":""); ?>value="BJadid">B Jadid</option><option <?php echo ($options['c3fontname'] == "BHoma" ? "selected ":""); ?>value="BHoma">B Homa</option><option <?php echo ($options['c3fontname'] == "BNasim" ? "selected ":""); ?>value="BNasim">B Nasim</option><option <?php echo ($options['c3fontname'] == "BNazanin" ? "selected ":""); ?>value="BNazanin">B Nazanin</option><option <?php echo ($options['c3fontname'] == "BSina" ? "selected ":""); ?>value="BSina">B Sina</option><option <?php echo ($options['c3fontname'] == "BTitr" ? "selected ":""); ?>value="BTitr">B Titr</option><option <?php echo ($options['c3fontname'] == "DastNevis" ? "selected ":""); ?>value="DastNevis">Dast Nevis</option><option <?php echo ($options['c3fontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['c3fontname'] == "YekanIR" ? "selected ":""); ?>value="YekanIR">IRYekan</option></optgroup>
<optgroup label="<?php _e('Latin Fonts', 'mwfc'); ?>"><option <?php echo ($options['c3fontname'] == "Arial" ? "selected ":""); ?>value="Arial">Arial</option><option <?php echo ($options['c3fontname'] == "Verdana" ? "selected ":""); ?>value="Verdana">Verdana</option><option <?php echo ($options['c3fontname'] == "Tahoma" ? "selected ":""); ?>value="Tahoma">Tahoma</option><option <?php echo ($options['c3fontname'] == "ComicSansMS" ? "selected ":""); ?>value="ComicSansMS">Comic Sans MS</option></optgroup>
<optgroup label="<?php _e('Fonts Combination', 'mwfc'); ?>"><option <?php echo ($options['c3fontname'] == "SultanAdan, Arial" ? "selected ":""); ?>value="SultanAdan, Arial">Sultan Adan, Arial</option><option <?php echo ($options['c3fontname'] == "BYekan, Arial" ? "selected ":""); ?>value="BYekan, Arial">B Yekan, Arial</option><option <?php echo ($options['c3fontname'] == "DroidArabicNaskh, Arial" ? "selected ":""); ?>value="DroidArabicNaskh, Arial">Droid Arabic Naskh, Arial</option><option <?php echo ($options['c3fontname'] == "DroidArabicKufi, Arial" ? "selected ":""); ?>value="DroidArabicKufi, Arial">Droid Arabic Kufi, Arial</option><option <?php echo ($options['c3fontname'] == "BKoodak, Arial" ? "selected ":""); ?>value="BKoodak, Arial">B Koodak, Arial</option><option <?php echo ($options['c3fontname'] == "BBardiya, Arial" ? "selected ":""); ?>value="BBardiya, Arial">B Bardiya, Arial</option><option <?php echo ($options['c3fontname'] == "BEsfehan, Arial" ? "selected ":""); ?>value="BEsfehan, Arial">B Esfehan, Arial</option><option <?php echo ($options['c3fontname'] == "BHelal, Arial" ? "selected ":""); ?>value="BHelal, Arial">B Helal, Arial</option><option <?php echo ($options['c3fontname'] == "BMahsa, Arial" ? "selected ":""); ?>value="BMahsa, Arial">B Mahsa, Arial</option><option <?php echo ($options['c3fontname'] == "BMehr, Arial" ? "selected ":""); ?>value="BMehr, Arial">B Mehr, Arial</option><option <?php echo ($options['c3fontname'] == "BMitra, Arial" ? "selected ":""); ?>value="BMitra, Arial">B Mitra, Arial</option><option <?php echo ($options['c3fontname'] == "BJadid, Arial" ? "selected ":""); ?>value="BJadid, Arial">B Jadid, Arial</option><option <?php echo ($options['c3fontname'] == "BHoma, Arial" ? "selected ":""); ?>value="BHoma, Arial">B Homa, Arial</option><option <?php echo ($options['c3fontname'] == "BNasim, Arial" ? "selected ":""); ?>value="BNasim, Arial">B Nasim, Arial</option><option <?php echo ($options['c3fontname'] == "BNazanin, Arial" ? "selected ":""); ?>value="BNazanin, Arial">B Nazanin, Arial</option><option <?php echo ($options['c3fontname'] == "BSina, Arial" ? "selected ":""); ?>value="BSina, Arial">B Sina, Arial</option><option <?php echo ($options['c3fontname'] == "BTitr, Arial" ? "selected ":""); ?>value="BTitr, Arial">B Titr, Arial</option><option <?php echo ($options['c3fontname'] == "DastNevis, Arial" ? "selected ":""); ?>value="DastNevis, Arial">Dast Nevis, Arial</option><option <?php echo ($options['c3fontname'] == "Tahoma, Arial" ? "selected ":""); ?>value="Tahoma, Arial">Tahoma, Arial</option><option <?php echo ($options['c3fontname'] == "SultanAdan, Verdana" ? "selected ":""); ?>value="SultanAdan, Verdana">Sultan Adan, Verdana</option><option <?php echo ($options['c3fontname'] == "BYekan, Verdana" ? "selected ":""); ?>value="BYekan, Verdana">B Yekan, Verdana</option><option <?php echo ($options['c3fontname'] == "DroidArabicNaskh, Verdana" ? "selected ":""); ?>value="DroidArabicNaskh, Verdana">Droid Arabic Naskh, Verdana</option><option <?php echo ($options['c3fontname'] == "DroidArabicKufi, Verdana" ? "selected ":""); ?>value="DroidArabicKufi, Verdana">Droid Arabic Kufi, Verdana</option><option <?php echo ($options['c3fontname'] == "BKoodak, Verdana" ? "selected ":""); ?>value="BKoodak, Verdana">B Koodak, Verdana</option><option <?php echo ($options['c3fontname'] == "BBardiya, Verdana" ? "selected ":""); ?>value="BBardiya, Verdana">B Bardiya, Verdana</option><option <?php echo ($options['c3fontname'] == "BEsfehan, Verdana" ? "selected ":""); ?>value="BEsfehan, Verdana">B Esfehan, Verdana</option><option <?php echo ($options['c3fontname'] == "BHelal, Verdana" ? "selected ":""); ?>value="BHelal, Verdana">B Helal, Verdana</option><option <?php echo ($options['c3fontname'] == "BMahsa, Verdana" ? "selected ":""); ?>value="BMahsa, Verdana">B Mahsa, Verdana</option><option <?php echo ($options['c3fontname'] == "BMehr, Verdana" ? "selected ":""); ?>value="BMehr, Verdana">B Mehr, Verdana</option><option <?php echo ($options['c3fontname'] == "BMitra, Verdana" ? "selected ":""); ?>value="BMitra, Verdana">B Mitra, Verdana</option><option <?php echo ($options['c3fontname'] == "BJadid, Verdana" ? "selected ":""); ?>value="BJadid, Verdana">B Jadid, Verdana</option><option <?php echo ($options['c3fontname'] == "BHoma, Verdana" ? "selected ":""); ?>value="BHoma, Verdana">B Homa, Verdana</option><option <?php echo ($options['c3fontname'] == "BNasim, Verdana" ? "selected ":""); ?>value="BNasim, Verdana">B Nasim, Verdana</option><option <?php echo ($options['c3fontname'] == "BNazanin, Verdana" ? "selected ":""); ?>value="BNazanin, Verdana">B Nazanin, Verdana</option><option <?php echo ($options['c3fontname'] == "BSina, Verdana" ? "selected ":""); ?>value="BSina, Verdana">B Sina, Verdana</option><option <?php echo ($options['c3fontname'] == "BTitr, Verdana" ? "selected ":""); ?>value="BTitr, Verdana">B Titr, Verdana</option><option <?php echo ($options['c3fontname'] == "DastNevis, Verdana" ? "selected ":""); ?>value="DastNevis, Verdana">Dast Nevis, Verdana</option><option <?php echo ($options['c3fontname'] == "SultanAdan, ComicSansMS" ? "selected ":""); ?>value="SultanAdan, ComicSansMS">Sultan Adan, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BYekan, ComicSansMS" ? "selected ":""); ?>value="BYekan, ComicSansMS">B Yekan, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "DroidArabicNaskh, ComicSansMS" ? "selected ":""); ?>value="DroidArabicNaskh, ComicSansMS">Droid Arabic Naskh, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "DroidArabicKufi, ComicSansMS" ? "selected ":""); ?>value="DroidArabicKufi, ComicSansMS">Droid Arabic Kufi, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BKoodak, ComicSansMS" ? "selected ":""); ?>value="BKoodak, ComicSansMS">B Koodak, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BBardiya, ComicSansMS" ? "selected ":""); ?>value="BBardiya, ComicSansMS">B Bardiya, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BEsfehan, ComicSansMS" ? "selected ":""); ?>value="BEsfehan, ComicSansMS">B Esfehan, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BHelal, ComicSansMS" ? "selected ":""); ?>value="BHelal, ComicSansMS">B Helal, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BMahsa, ComicSansMS" ? "selected ":""); ?>value="BMahsa, ComicSansMS">B Mahsa, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BMehr, ComicSansMS" ? "selected ":""); ?>value="BMehr, ComicSansMS">B Mehr, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BMitra, ComicSansMS" ? "selected ":""); ?>value="BMitra, ComicSansMS">B Mitra, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BJadid, ComicSansMS" ? "selected ":""); ?>value="BJadid, ComicSansMS">B Jadid, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BHoma, ComicSansMS" ? "selected ":""); ?>value="BHoma, ComicSansMS">B Homa, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BNasim, ComicSansMS" ? "selected ":""); ?>value="BNasim, ComicSansMS">B Nasim, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BNazanin, ComicSansMS" ? "selected ":""); ?>value="BNazanin, ComicSansMS">B Nazanin, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BSina, ComicSansMS" ? "selected ":""); ?>value="BSina, ComicSansMS">B Sina, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "BTitr, ComicSansMS" ? "selected ":""); ?>value="BTitr, ComicSansMS">B Titr, Comic Sans MS</option><option <?php echo ($options['c3fontname'] == "DastNevis, ComicSansMS" ? "selected ":""); ?>value="DastNevis, ComicSansMS">Dast Nevis, Comic Sans MS</option></optgroup>                   
</select>
<p class="description"><?php _e('Please select font family.', 'mwfc'); ?></p></td>
</tr>
<tr valign="top">
<th scope="row"><?php _e('Font Size', 'mwfc'); ?></th>
<td>
<select name="site_font_settings[c3fontsize]" id="site_font_settings[c3fontsize]">
<option value=""><?php _e('None', 'mwfc'); ?></option><option <?php echo ($options['c3fontsize'] == "5" ? "selected ":""); ?>value="5">5</option><option <?php echo ($options['c3fontsize'] == "6" ? "selected ":""); ?>value="6">6</option><option <?php echo ($options['c3fontsize'] == "7" ? "selected ":""); ?>value="7">7</option><option <?php echo ($options['c3fontsize'] == "8" ? "selected ":""); ?>value="8">8</option><option <?php echo ($options['c3fontsize'] == "9" ? "selected ":""); ?>value="9">9</option><option <?php echo ($options['c3fontsize'] == "10" ? "selected ":""); ?>value="10">10</option><option <?php echo ($options['c3fontsize'] == "11" ? "selected ":""); ?>value="11">11</option><option <?php echo ($options['c3fontsize'] == "12" ? "selected ":""); ?>value="12">12</option><option <?php echo ($options['c3fontsize'] == "13" ? "selected ":""); ?>value="13">13</option><option <?php echo ($options['c3fontsize'] == "14" ? "selected ":""); ?>value="14">14</option><option <?php echo ($options['c3fontsize'] == "15" ? "selected ":""); ?>value="15">15</option><option <?php echo ($options['c3fontsize'] == "16" ? "selected ":""); ?>value="16">16</option><option <?php echo ($options['c3fontsize'] == "17" ? "selected ":""); ?>value="17">17</option><option <?php echo ($options['c3fontsize'] == "18" ? "selected ":""); ?>value="18">18</option><option <?php echo ($options['c3fontsize'] == "19" ? "selected ":""); ?>value="19">19</option><option <?php echo ($options['c3fontsize'] == "20" ? "selected ":""); ?>value="20">20</option><option <?php echo ($options['c3fontsize'] == "21" ? "selected ":""); ?>value="21">21</option><option <?php echo ($options['c3fontsize'] == "22" ? "selected ":""); ?>value="22">22</option><option <?php echo ($options['c3fontsize'] == "23" ? "selected ":""); ?>value="23">23</option><option <?php echo ($options['c3fontsize'] == "24" ? "selected ":""); ?>value="24">24</option><option <?php echo ($options['c3fontsize'] == "25" ? "selected ":""); ?>value="25">25</option><option <?php echo ($options['c3fontsize'] == "26" ? "selected ":""); ?>value="26">26</option><option <?php echo ($options['c3fontsize'] == "27" ? "selected ":""); ?>value="27">27</option><option <?php echo ($options['c3fontsize'] == "28" ? "selected ":""); ?>value="28">28</option><option <?php echo ($options['c3fontsize'] == "29" ? "selected ":""); ?>value="29">29</option><option <?php echo ($options['c3fontsize'] == "30" ? "selected ":""); ?>value="30">30</option><option <?php echo ($options['c3fontsize'] == "31" ? "selected ":""); ?>value="31">31</option><option <?php echo ($options['c3fontsize'] == "32" ? "selected ":""); ?>value="32">32</option><option <?php echo ($options['c3fontsize'] == "33" ? "selected ":""); ?>value="33">33</option><option <?php echo ($options['c3fontsize'] == "34" ? "selected ":""); ?>value="34">34</option><option <?php echo ($options['c3fontsize'] == "35" ? "selected ":""); ?>value="35">35</option><option <?php echo ($options['c3fontsize'] == "36" ? "selected ":""); ?>value="36">36</option><option <?php echo ($options['c3fontsize'] == "37" ? "selected ":""); ?>value="37">37</option><option <?php echo ($options['c3fontsize'] == "38" ? "selected ":""); ?>value="38">38</option><option <?php echo ($options['c3fontsize'] == "39" ? "selected ":""); ?>value="39">39</option><option <?php echo ($options['c3fontsize'] == "40" ? "selected ":""); ?>value="40">40</option><option <?php echo ($options['c3fontsize'] == "41" ? "selected ":""); ?>value="41">41</option><option <?php echo ($options['c3fontsize'] == "42" ? "selected ":""); ?>value="42">42</option><option <?php echo ($options['c3fontsize'] == "43" ? "selected ":""); ?>value="43">43</option><option <?php echo ($options['c3fontsize'] == "44" ? "selected ":""); ?>value="44">44</option><option <?php echo ($options['c3fontsize'] == "45" ? "selected ":""); ?>value="45">45</option><option <?php echo ($options['c3fontsize'] == "46" ? "selected ":""); ?>value="46">46</option><option <?php echo ($options['c3fontsize'] == "47" ? "selected ":""); ?>value="47">47</option><option <?php echo ($options['c3fontsize'] == "48" ? "selected ":""); ?>value="48">48</option><option <?php echo ($options['c3fontsize'] == "49" ? "selected ":""); ?>value="49">49</option><option <?php echo ($options['c3fontsize'] == "50" ? "selected ":""); ?>value="50">50</option><option <?php echo ($options['c3fontsize'] == "51" ? "selected ":""); ?>value="51">51</option><option <?php echo ($options['c3fontsize'] == "52" ? "selected ":""); ?>value="52">52</option><option <?php echo ($options['c3fontsize'] == "53" ? "selected ":""); ?>value="53">53</option><option <?php echo ($options['c3fontsize'] == "54" ? "selected ":""); ?>value="54">54</option><option <?php echo ($options['c3fontsize'] == "55" ? "selected ":""); ?>value="55">55</option><option <?php echo ($options['c3fontsize'] == "56" ? "selected ":""); ?>value="56">56</option><option <?php echo ($options['c3fontsize'] == "57" ? "selected ":""); ?>value="57">57</option><option <?php echo ($options['c3fontsize'] == "58" ? "selected ":""); ?>value="58">58</option><option <?php echo ($options['c3fontsize'] == "59" ? "selected ":""); ?>value="59">59</option><option <?php echo ($options['c3fontsize'] == "60" ? "selected ":""); ?>value="60">60</option>				
</select>
<p class="description"><?php _e('Please select font size.', 'mwfc'); ?></p></td>
</tr>
</table>
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes', 'mwfc'); ?>" />
</p>
</form>
</div>
<?php }
function mwfc_create_menu() {
add_menu_page( __("Dashboard Font", 'mwfc'), __("MW Font Changer", 'mwfc'), 1,"mwfc-settings","mwfc_settings_page" ,'dashicons-admin-customizer' );
add_submenu_page("mwfc-settings", __("Dashboard Font", 'mwfc'), __("Dashboard Font", 'mwfc'), 1, "mwfc-settings","mwfc_settings_page");
add_submenu_page('mwfc-settings', __("Theme Font", 'mwfc'), __("Theme Font", 'mwfc'), 'edit_others_pages', 'mwfc-site-font', 'sitefont_settings_page');
add_submenu_page("mwfc-settings", __("Feedback", 'mwfc'), __("Feedback", 'mwfc'), 1, "mwfc-about","mwfc_about_page");
add_action('admin_init', 'register_mwfcsettings');
}
add_action('admin_menu', 'mwfc_create_menu');
function register_mwfcsettings(){
// Register our settings
register_setting('site_font_settings', 'site_font_settings');
}
// Font-Face
add_action ('wp_head', 'csspersianandlatinfonts') ;
add_action ('admin_head', 'csspersianandlatinfonts') ;
function csspersianandlatinfonts() {
echo '<style type="text/css" media="all">
@import url(' . plugins_url( 'parsi-font/fonts/fonts.css', dirname(__FILE__) ) . ');
</style>';
}
// for transalations
function mwfc_action_init() {
load_plugin_textdomain('mwfc', false, dirname(plugin_basename(__FILE__) ) . '/languages/' );
}
add_action('init', 'mwfc_action_init');