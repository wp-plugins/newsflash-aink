<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Plugin Name: NewsFlash Aink
Plugin URI: http://www.classifindo.com/newsflash-aink/
Description: Inserts a text with animation, like fade, scrollUp, slideX, shuffle, cover, and more....
Author: Dannie Herdyawan a.k.a k0z3y
Version: 5.0
Author URI: http://www.classifindo.com/
*/


/*
   _____                                                 ___  ___
  /\  __'\                           __                 /\  \/\  \
  \ \ \/\ \     __      ___     ___ /\_\     __         \ \  \_\  \
   \ \ \ \ \  /'__`\  /' _ `\ /` _ `\/\ \  /'__'\        \ \   __  \
    \ \ \_\ \/\ \L\.\_/\ \/\ \/\ \/\ \ \ \/\  __/    ___  \ \  \ \  \
     \ \____/\ \__/.\_\ \_\ \_\ \_\ \_\ \_\ \____\  /\__\  \ \__\/\__\
      \/___/  \/__/\/_/\/_/\/_/\/_/\/_/\/_/\/____/  \/__/   \/__/\/__/

*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

global $NewsFlashAink_path;
$NewsFlashAink_path = get_settings('home').'/wp-content/plugins/'.dirname(plugin_basename(__FILE__));

require_once ('newsflash-aink_fields.php');

$EasingJS		= "wp-content/plugins/newsflash-aink/js/easing.js";
$jCarouselLite	= "wp-content/plugins/newsflash-aink/js/jcarousellite.js";

if(@file_exists($jCarouselLite) || @file_exists($EasingJS))
	{ UnLinkNewsFlashFile(); }

function UnLinkNewsFlashFile()
{
	global $EasingJS, $jCarouselLite;
	unlink($EasingJS);
	unlink($jCarouselLite);
}

/* When plugin is activated */
register_activation_hook(__FILE__,'install_NewsFlashAink');
function install_NewsFlashAink()
{
	global $wpdb;

    $collate = '';
    if($wpdb->supports_collation()) {
        if(!empty($wpdb->charset)) $collate = "DEFAULT CHARACTER SET $wpdb->charset";
        if(!empty($wpdb->collate)) $collate .= " COLLATE $wpdb->collate";
    }

    $sql = "CREATE TABLE IF NOT EXISTS ". $wpdb->prefix . "newsflash_aink" ." (
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`content` LONGTEXT NOT NULL,
		`status` varchar(25) NOT NULL,
		`showfor` varchar(25) NOT NULL,
		`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
		`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY id (`id`)) $collate;";
    $wpdb->query($sql);
}

/* When plugin is deactivation*/
register_deactivation_hook( __FILE__, 'hapus_NewsFlashAink' );
function hapus_NewsFlashAink()
{
	/* Deletes the database field */
	global $wpdb, $options;
	$options = get_option('NewsFlashAink_option');

    $sql = "DROP TABLE ". $wpdb->prefix . "newsflash_aink";
    $wpdb->query($sql);

	delete_option($options);
}

add_action('admin_menu', 'NewsFlashAink_admin_menu');
function NewsFlashAink_admin_menu() {
	global $NewsFlashAink_path;
	if((current_user_can('manage_options') || is_admin)) {
		add_object_page('NewsFlash-Aink','NewsFlash',1,'NewsFlash-Aink','NewsFlashAink_page',$NewsFlashAink_path.'/images/favicon.png');
		add_submenu_page('NewsFlash-Aink','NewsFlash Aink Settings','Settings',1,'NewsFlash-Aink','NewsFlashAink_page');
		add_submenu_page('NewsFlash-Aink','Create New','Create New',1,'NewsFlashAink-new','NewsFlashAink_new');
	}
}

function NewsFlashAink_page() {
	if (isset($_POST['save'])) {
		$options['NewsFlashAink_enable']		= trim($_POST['NewsFlashAink_enable'],'{}');
		$options['NewsFlashAink_title']			= trim($_POST['NewsFlashAink_title'],'{}');
		$options['NewsFlashAink_width']			= trim($_POST['NewsFlashAink_width'],'{}');
		$options['NewsFlashAink_timeout']		= trim($_POST['NewsFlashAink_timeout'],'{}');
		$options['NewsFlashAink_text_align']	= trim($_POST['NewsFlashAink_text_align'],'{}');
		$options['NewsFlashAink_animation']		= trim($_POST['NewsFlashAink_animation'],'{}');
		$options['NewsFlashAink_link']			= trim($_POST['NewsFlashAink_link'],'{}');
		update_option('NewsFlashAink_option', $options);
		// Show a message to say we've done something
		echo '<div class="updated"><p>' . __("Save Changes") . '</p></div>';
	} else {		
		$options = get_option('NewsFlashAink_option');
	}
	echo NewsFlashAinkSettings();
}

function NewsFlashAink_new()
{
	echo CreateNewNewsFlashAink();
}

add_action("plugins_loaded", "install_NewsFlashAink");
add_action("wp_head", "NewsFlashAink_head");


function NewsFlashAink_head()
{
	global $options, $NewsFlashAink_path;
	$options = get_option('NewsFlashAink_option');

	if ($options[NewsFlashAink_enable] == 'yes') {

	echo '
	<!-- NewsFlash Aink -->

		<script type="text/javascript" language="javascript" src="'.$NewsFlashAink_path.'/js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" language="javascript">
			$(document).ready(function(){
				$("ul.newsflash-list").cycle({
					timeout: '.$options[NewsFlashAink_timeout].',	// milliseconds between slide transitions
					fx: "'.$options[NewsFlashAink_animation].'",	// choose your transition type
					pause: 1,										// true to enable "pause on hover"
				});
			});
		</script>
		<link href="'.$NewsFlashAink_path.'/css/newsflash-aink.css" type="text/css" rel="stylesheet" />

	<!-- NewsFlash Aink -->';

	}	
}

function NewsFlashAink()
{
	global $wpdb, $options, $NewsFlashAink_path, $userdata;
	get_currentuserinfo();
	$options = get_option('NewsFlashAink_option');

	$AllUser = $wpdb->prepare("SELECT content "
	. "FROM ". $wpdb->prefix . "newsflash_aink "
	. "WHERE status='Active'"
	. "AND showfor='All User'"
	. "ORDER BY RAND()");

	$UserLogin = $wpdb->prepare("SELECT content "
	. "FROM ". $wpdb->prefix . "newsflash_aink "
	. "WHERE status='Active'"
	. "AND showfor='User Login'"
	. "ORDER BY RAND()");

	$UserNotLogin = $wpdb->prepare("SELECT content "
	. "FROM ". $wpdb->prefix . "newsflash_aink "
	. "WHERE status='Active'"
	. "AND showfor='User Not Login'"
	. "ORDER BY RAND()");

?>

<?php if ($options[NewsFlashAink_enable] == 'yes'): ?>

<style type="text/css">ul.newsflash-list li{text-align:<?php echo $options[NewsFlashAink_text_align];?>!important;}</style>

<div id="NewsFlashAink" align="center">
<div class="container-bg" style="width:<?php echo $options[NewsFlashAink_width]; ?>;margin:0 auto;clear:both;">
	<div class="container-left"></div>
	<div class="container-bg-content">
		<div class="newsflash-name">
		<?php
			if ($options[NewsFlashAink_title] != '' ) {
				echo $options[NewsFlashAink_title];
			} else {
				if($options[NewsFlashAink_link] == 'check'){
					echo '<a href="http://www.classifindo.com/newsflash-aink/" target="_blank">NewsFlash Aink</a>';
				} else {
					echo 'NewsFlash Aink';
				}
			};
		?>
		</div>
		<div class="newsflash-right">
			<span>
				<?php if($options[NewsFlashAink_link] == 'check'){ ?>
					<a href="http://www.classifindo.com/newsflash-aink/" target="_blank">
						<img src="<?php echo $NewsFlashAink_path; ?>/images/info.png" />
					</a>
				<?php } ?>
			</span>
		</div>
		<div class="news-bg">
			<div class="news-left"></div>
			<div class="news-right"></div>
			<div class="news-bg-content">
				<div class="newsflash-container">
					<ul class="newsflash-list">
						<?php foreach ($wpdb->get_results($AllUser) as $All) { ?>
							<li><?php echo $All->content; ?></li>
						<?php } ?>
						<?php if (is_user_logged_in()): ?>
							<?php foreach ($wpdb->get_results($UserLogin) as $Login) { ?>
								<li><?php echo $Login->content; ?></li>
							<?php } ?>
						<?php endif; ?>
						<?php if (!is_user_logged_in()): ?>
							<?php foreach ($wpdb->get_results($UserNotLogin) as $NotLogin) { ?>
								<li><?php echo $NotLogin->content; ?></li>
							<?php } ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-right"></div>
</div>
</div>

<?php endif; } ?>