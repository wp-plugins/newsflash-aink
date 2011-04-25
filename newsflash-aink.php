<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Plugin Name: Newsflash Aink
Plugin URI: http://www.classifindo.com/newsflash-aink/
Description: Inserts a scroll up text
Author: Dannie Herdyawan a.k.a k0z3y
Version: 2.0.0
Author URI: http://www.classifindo.com/
*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

global $NewsFlashAink_path;
$NewsFlashAink_path = get_settings('home').'/wp-content/plugins/'.dirname(plugin_basename(__FILE__));

require_once ('newsflash-aink_fields.php');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action('admin_menu', 'NewsFlashAink_admin_menu');

function NewsFlashAink_admin_menu() {
	global $NewsFlashAink_path;
	if(current_user_can('manage_options')){
		add_object_page('NewsFlashAink','NewsFlash',1,'NewsFlashAink','NewsFlashAink_page',$NewsFlashAink_path.'/images/favicon.png');
		add_submenu_page('NewsFlashAink','NewsFlash','Settings',1,'NewsFlashAink','NewsFlashAink_page');
		add_submenu_page('NewsFlashAink','Create New','Create New',1,'NewsFlashAink_new','NewsFlashAink_new');
	}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function NewsFlashAink_page() {
	if (isset($_POST['save'])) {
		$options['NewsFlashAink_enable']		= trim($_POST['NewsFlashAink_enable'],'{}');
		$options['NewsFlashAink_title']			= trim($_POST['NewsFlashAink_title'],'{}');
		$options['NewsFlashAink_width']			= trim($_POST['NewsFlashAink_width'],'{}');
		$options['NewsFlashAink_speed']			= trim($_POST['NewsFlashAink_speed'],'{}');
		$options['NewsFlashAink_text_align']	= trim($_POST['NewsFlashAink_text_align'],'{}');
		update_option('NewsFlashAink_option', $options);
		// Show a message to say we've done something
		echo '<div class="updated"><p>' . __("Save Changes") . '</p></div>';
	} else {		
		$options = get_option('NewsFlashAink_option');
	}
	echo NewsFlashAinkSettings();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function NewsFlashAink_new()
{
	echo CreateNewNewsFlashAink();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action("plugins_loaded", "install_NewsFlashAink");
add_action("wp_head", "NewsFlashAink_head");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function NewsFlashAink_head()
{
	global $options, $NewsFlashAink_path;
	$options = get_option('NewsFlashAink_option');
///////////////////////////////////////////////////////////////////////////////

	echo '<!-- NewsFlash Aink -->';
///////////////////////////////////////////////////////////////////////////////
	echo '<script type="text/javascript" language="javascript" src="'.$NewsFlashAink_path.'/js/jcarousellite.js"></script>';
	echo '<script type="text/javascript" language="javascript" src="'.$NewsFlashAink_path.'/js/easing.js"></script>';
	echo '
		<script type="text/javascript" language="javascript">
		jQuery(document).ready(function(){
			jQuery("div.newsflash-container").jCarouselLite({
				vertical: true,
				hoverPause: true,
				visible: 1,
				auto: 3500,
				speed: ' . $options[NewsFlashAink_speed] . ',
				easing: "easeOutSine"
			});
		});
		</script>';
////////////////////////////////////////////////////////////////////////////////
	echo '<link href="'.$NewsFlashAink_path.'/css/newsflash-aink.css" type="text/css" rel="stylesheet" />';
///////////////////////////////////////////////////////////////////////////////
	echo '<!-- NewsFlash Aink -->';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function NewsFlashAink()
{
	global $wpdb, $options, $NewsFlashAink_path, $userdata;
	get_currentuserinfo();
	$options = get_option('NewsFlashAink_option');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
				echo 'NewsFlash Aink';
			};
		?>
		</div>
		<div class="newsflash-right">
			<span>
				<a href="http://www.classifindo.com/newsflash-aink/" target="_blank">
					<img src="<?php echo $NewsFlashAink_path; ?>/images/info.png" />
				</a>
			</span>
		</div>
		<div class="news-bg">
			<div class="news-left"></div>
			<div class="news-right"></div>
			<div class="news-bg-content">
				<div class="newsflash-container">
					<ul class="newsflash-list">
<?php /////////////////////////////////////////////////////////////////////////////// ?>
						<?php foreach ($wpdb->get_results($AllUser) as $All) { ?>
							<li><?php echo $All->content; ?></li>
						<?php } ?>
<?php /////////////////////////////////////////////////////////////////////////////// ?>
						<?php if (is_user_logged_in()): ?>
							<?php foreach ($wpdb->get_results($UserLogin) as $Login) { ?>
								<li><?php echo $Login->content; ?></li>
							<?php } ?>
						<?php endif; ?>
<?php /////////////////////////////////////////////////////////////////////////////// ?>
						<?php if (!is_user_logged_in()): ?>
							<?php foreach ($wpdb->get_results($UserNotLogin) as $NotLogin) { ?>
								<li><?php echo $NotLogin->content; ?></li>
							<?php } ?>
						<?php endif; ?>
<?php /////////////////////////////////////////////////////////////////////////////// ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-right"></div>
</div>
</div>

<?php
///////////////////////////////////////////////////////////////////////////////

	endif;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>