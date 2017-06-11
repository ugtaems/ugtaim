<?php
/*
Plugin Name: Virastar
Plugin URI: http://iran98.org/category/wordpress/virastar/
Description: Correcting bugs in the Persian language.
Version: 2.3
Author: Mostafa Soufi
Author URI: http://iran98.org
License: GPL2
*/
	load_plugin_textdomain('replacing-half-space','wp-content/plugins/replacing-half-space/lang');

	add_action('admin_menu', 'virastar_menu');

	add_filter("the_content", "virastar_content");
	add_filter("comment_text", "virastar_comment");
	add_filter("the_title", "virastar_title");
	add_filter("the_tags", "virastar_tag");

	$word	=	array ("می ","نمی "," ها");
	$repl	=	array ("می‌","نمی‌","‌ها");

	$word_a	=	array ("ك","ي");
	$word_p	=	array ("ک","ی");

	$en_num	=	array ("1","2","3","4","5","6","7","8","9","0");
	$ar_num	=	array ("١","٢","٣","٤","٥","٦","٧","٨","٩","٠");
	$fa_num	=	array ("۱","۲","۳","۴","۵","۶","۷","۸","۹","۰");

	function virastar_htmlsp($text) {
		return str_replace( array('<', '>', '"', '&'), array('&lt;', '&gt;', '&quot;', '&amp;'), $text);
	}

	function virastar_get_backlinks_words() {
		$backlinks_texts = Array();
		$backlinks_links = Array();

		$backlinks_words = get_option('backlinks_option_words');
		$backlinks_words_array = explode("\r\n", $backlinks_words);

		foreach($backlinks_words_array as $cycleword) {
			list($iword, $ilink) = explode("==", $cycleword);
			if(is_null($iword) OR is_null($ilink)) continue;
			$backlinks_texts[] = $iword;
			$backlinks_links[] = '<a title="'.virastar_htmlsp($iword).'" href="'.virastar_htmlsp($ilink).'">'.$iword.'</a>';
		}
		return array($backlinks_texts , $backlinks_links);
	}

	function virastar_menu() {
		if (function_exists('add_options_page')) {
		add_options_page(__('Virastar configuration', 'replacing-half-space'), __('Virastar', 'replacing-half-space'), 'manage_options', 'replacing-half-space/replacing-half-space.php', 'my_plugin_options'); }
	}

	function my_plugin_options() {
		if (!current_user_can('manage_options'))  {
			wp_die( __('You do not have sufficient permissions to access this page.', 'replacing-half-space') );

		settings_fields( 'virastar_options' );
		function register_mysettings() {
			register_setting( 'virastar_options', 'content_option' );
			register_setting( 'virastar_options', 'comment_option' );
			register_setting( 'virastar_options', 'tags_option' );
			register_setting( 'virastar_options', 'title_option' );

			register_setting( 'virastar_options', 'en_number_option' );
			register_setting( 'virastar_options', 'ar_number_option' );
			register_setting( 'virastar_options', 'ar_words_option' );

			register_setting( 'virastar_options', 'backlinks_option_enable' );
			register_setting( 'virastar_options', 'backlinks_option_words' );
		}}
	?>

	<div class="wrap">
	<h2> <?php _e('Virastar configuration', 'replacing-half-space'); ?> </h2>
	<table class="form-table">
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options');?>
		<tr>
			<td colspan=2><h3> <?php _e('Half-Space settings', 'replacing-half-space'); ?> </h3></td>
		</tr>
		<tr>
			<td width="260"> <?php _e('Half-Space in Posts:', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('content_option')) {
				$checkbox_content = ' checked="checked"'; } else {
				$checkbox_content = ''; }?>			
			<td> <input type="checkbox" name="content_option" value="1" <?php echo $checkbox_content?> />
				 <font size="1"> <?php _e('Convert', 'replacing-half-space'); ?> «می‌خواهم» <?php _e('Instead of', 'replacing-half-space'); ?> «می خواهم» </font> </td>
		</tr>
		<tr>
			<td> <?php _e('Half-Space in Comments:', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('comment_option')) {
				$checkbox_comment = ' checked="checked"'; } else {
				$checkbox_comment = ''; }?>
			<td> <input type="checkbox" name="comment_option" value="1" <?php echo $checkbox_comment;?> />
			</td>
		</tr>	
		<tr>
			<td> <?php _e('Half-Space in Tags:', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('tags_option')) {
				$checkbox_tags = ' checked="checked"'; } else {
				$checkbox_tags = ''; }?>			
			<td> <input type="checkbox" name="tags_option" value="1" <?php echo $checkbox_tags;?> />
				 <font size="1"> (<?php _e('Does not change the permalink.', 'replacing-half-space'); ?>) </font> </td>
		</tr>
		<tr>
			<td> <?php _e('Half-Space in Title:', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('title_option')) {
				$checkbox_tags = ' checked="checked"'; } else {
				$checkbox_tags = ''; }?>			
			<td> <input type="checkbox" name="title_option" value="1" <?php echo $checkbox_tags;?> />
				 <font size="1"> (<?php _e('As for Post title And Page title', 'replacing-half-space'); ?>) </font> </td>
		</tr>
		<tr>
			<td colspan=2><h3> <?php _e('Settings to display letters and numbers', 'replacing-half-space'); ?> </h3></td>
		</tr>
		<tr>
			<td> <?php _e('Show Persian numbers instead of English numbers', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('en_number_option')) {
				$checkbox_en = ' checked="checked"'; } else {
				$checkbox_en = ''; }?>				
			<td> <input type="checkbox" name="en_number_option" value="1" <?php echo $checkbox_en?> />
				 <font size="1"> <?php _e('Convert', 'replacing-half-space'); ?> «۴۵۶» <?php _e('Instead of', 'replacing-half-space'); ?> «456» </font> </td>
			</tr>
		<tr>
			<td> <?php _e('Show Persian numbers instead of Arabic numbers', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('ar_number_option')) {
				$checkbox_ar = ' checked="checked"'; } else {
				$checkbox_ar = ''; }?>				
			<td> <input type="checkbox" name="ar_number_option" value="1" <?php echo $checkbox_ar?> />
				 <font size="1"> <?php _e('Convert', 'replacing-half-space'); ?> «۴۵۶» <?php _e('Instead of', 'replacing-half-space'); ?> «٤٥٦» </font> </td>
		</tr>
			<td colspan=2> <font size="1"><?php _e('Links in post will change! If you use the plugin wp-jalali need not to enable this part.', 'replacing-half-space'); ?> </font> </td>
		<tr>
			<td> <?php _e('Show Persian Words instead of Arabic Words', 'replacing-half-space'); ?> </td>
			<?php
				if (get_option('ar_words_option')) {
				$checkbox_ar = ' checked="checked"'; } else {
				$checkbox_ar = ''; }?>				
			<td> <input type="checkbox" name="ar_words_option" value="1" <?php echo $checkbox_ar?> />
				 <font size="1"> <?php _e('Convert', 'replacing-half-space'); ?> «ك,ي» <?php _e('Instead of', 'replacing-half-space'); ?> «ک,ی»  </font> </td>
		</tr>
		<tr>
			<td colspan=2>
				<h3> <?php _e('Link to Word settings', 'replacing-half-space'); ?> </h3><br />
				<?php _e('Using this feature can The content post a link to put certain words.', 'replacing-half-space'); ?> 
			</td>
		</tr>
		
		<tr>
			<td> <?php _e('Selected words into a link:', 'replacing-half-space'); ?></td>
			<?php
				if (get_option('backlinks_option_enable')) {
				$checkbox_boe = ' checked="checked"'; } else {
				$checkbox_boe = ''; }?>				
			<td> <input type="checkbox" name="backlinks_option_enable" value="1" <?php echo $checkbox_boe?> />
				 <?php _e('Enabled.', 'replacing-half-space'); ?> </td>
		</tr>
		<tr>
			<?php
				$repl_words = get_option("backlinks_option_words");
				if(!$repl_words) $repl_words = "Wordpress==http://www.wordpress.org
	Google==http://www.google.com
	Yahoo==http://www.yahoo.com
	وردپرس فارسی==http://wp-persian.com"
			?>
				<td>
					<b><?php _e('Total words:', 'replacing-half-space'); ?></b>
					<br><br>
					<?php _e('Please insert the new option of a new line (NewLine) use.', 'replacing-half-space');?><br>
					<?php _e('Please link to isolate as the use of ==.', 'replacing-half-space'); ?><br>
					<b><?php _e('For example', 'replacing-half-space'); ?></b><br>
					Wordpress==http://www.wordpress.org<br>
					Google==http://www.google.com<br>
					Yahoo==http://www.yahoo.com<br>
					وردپرس فارسی==http://wp-persian.com
				</td>
				<td>
					<textarea id="backlinks_option_words" name="backlinks_option_words" style="width: 500px; height: 500px; direction: ltr;"><?php echo virastar_htmlsp($repl_words); ?></textarea>
				</td>
		</tr>

		<tr>
			<td><p class="submit">
				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="content_option,comment_option,tags_option,title_option,en_number_option,ar_number_option,ar_words_option,backlinks_option_words,backlinks_option_enable" />
				<input type="submit" class="button-primary" name="Submit" value="<?php _e('Update', 'replacing-half-space'); ?>" />
			</p></td>
		</tr>
	</form>	
	</table>
	<p> فارسی را پاس بداریم. | <a href="http://iran98.org/category/wordpress/virastar"/><?php _e('Website Plugin', 'replacing-half-space'); ?></a> | <a href="http://wpdelicio.us"/><?php _e('Wordpress Delicious!', 'replacing-half-space'); ?></a>
	</p>
	</div>

<?php }

	// Function: Half Space in Comment
	function virastar_comment($content) {
	if ( get_option('comment_option') ) {
		global $word,$repl;
		$correction_content = str_replace ($word , $repl , $content);
		return $correction_content;
	} else {
		return $content; }
	}

	// Function: Half Space in Title
	function virastar_title($content) {
	if ( get_option('title_option') ) {
		global $word,$repl;
		$correction_content = str_replace ($word , $repl , $content);
		return $correction_content;
	} else {
		return $content; }
	}

	// Function: Half Space in Tags
	function virastar_tag($content) {
	if ( get_option('tags_option') ) {
		global $word,$repl;
		$correction_content = str_replace ($word , $repl , $content);
		return $correction_content;
	} else {
		return $content; }
	}

	// Function: Virastar
	function virastar () {
		
		echo __('Enter your text in Persian:', 'replacing-half-space')."<br />";
		echo "
		<form method=post>
		<textarea class='input' name=virastar cols=100 rows=15>". @($_POST['virastar'])."</textarea><br/>
		<input type=submit class='button' value="; _e('Editor Now!', 'replacing-half-space'); echo ">
		</form><br>";
		
		if(@$_POST['virastar']) {
			$content = $_POST['virastar'];
			$content = virastar_content($content, true);
			$content = str_replace ($word , $repl , $content);
			echo __('Modified Text:', 'replacing-half-space')."<br />";
			echo "
			<form method=post>
			<textarea class='input' name=virastar cols=100 rows=15>".$content."</textarea>
			</form>";
		}
	}

	function virastar_content($content, $editor = false) {
		global $en_num,$fa_num,$ar_num;

		if ( get_option('content_option') OR $editor ){
			global $word,$repl;
			$content = str_replace ($word , $repl , $content);
		}

		// Fix English Number
		if ( get_option('en_number_option') OR $editor ) {
			$content = str_replace ($en_num , $fa_num , $content);
		}

		// Fix Arabic Numbers
		if ( get_option('ar_number_option') OR $editor ) {
			$content = str_replace ($ar_num , $fa_num , $content);
		}

		// Fix Arabic Words
		if ( get_option('ar_words_option') OR $editor ) {
			global $word_a,$word_p;
			$content = str_replace ($word_a , $word_p , $content);
		} 

		// Add Link to text
		if ( get_option('backlinks_option_enable') OR $editor ) {
			list($backlinks_texts,$backlinks_links) = virastar_get_backlinks_words();
			$content = str_replace ($backlinks_texts , $backlinks_links , $content);
		}

		return $content;
	}

?>