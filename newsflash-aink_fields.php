<?php function NewsFlashAinkSettings() { global $options; $options = get_option('NewsFlashAink_option'); ?>
<div class="wrap">
<div class="icon32" id="icon-tools"><br/></div>
<h2><?php echo __('NewsFlash Aink'); ?></h2>

<form method="post" id="mainform" action="">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">NewsFlash Aink Settings</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="titledesc">NewsFlash Enable:</td>
			<td class="forminp">
				<select name="NewsFlashAink_enable" id="NewsFlashAink_enable" style="min-width:100px;">
					<?php if ($options[NewsFlashAink_enable] == 'yes'){ ?>
						<option value="yes" selected="selected">Yes</option>
						<option value="no">No</option>
					<?php } else if ($options[NewsFlashAink_enable] == 'no'){ ?>
						<option value="yes">Yes</option>
						<option value="no" selected="selected">No</option>
					<?php } else { ?>
						<option value="yes" selected="selected">Yes</option>
						<option value="no">No</option>
					<?php } ?>
				</select>
				<br /><small>If you do not want to show NewsFlash Aink on your site, select "No".</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Title:</td>
			<td class="forminp">
				<input name="NewsFlashAink_title" id="NewsFlashAink_title" style="width:250px;" value="<?php echo $options[NewsFlashAink_title]; ?>" type="text">
				<br /><small>ex: "Information" or "News Flash" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Width:</td>
			<td class="forminp">
				<input name="NewsFlashAink_width" id="NewsFlashAink_width" style="width:100px;" value="<?php echo $options[NewsFlashAink_width]; ?>" type="text">
				<br /><small>ex: "500px" or "50%" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Timeout:</td>
			<td class="forminp">
				<input name="NewsFlashAink_timeout" id="NewsFlashAink_timeout" style="width:100px;" value="<?php echo $options[NewsFlashAink_timeout]; ?>" type="text">
				<br /><small>Milliseconds between slide transitions. For example: "5000" (without quotes)</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Text Align:</td>
			<td class="forminp">
				<select name="NewsFlashAink_text_align" id="NewsFlashAink_text_align" style="min-width:100px;">
					<?php if ($options[NewsFlashAink_text_align] == 'left'){ ?>
						<option value="left" selected="selected">Left</option>
						<option value="center">Center</option>
						<option value="right">Right</option>
					<?php } else if ($options[NewsFlashAink_text_align] == 'center'){ ?>
						<option value="left">Left</option>
						<option value="center" selected="selected">Center</option>
						<option value="right">Right</option>
					<?php } else if ($options[NewsFlashAink_text_align] == 'right'){ ?>
						<option value="left">Left</option>
						<option value="center">Center</option>
						<option value="right" selected="selected">Right</option>
					<?php } else { ?>
						<option value="left" selected="selected">Left</option>
						<option value="center">Center</option>
						<option value="right">Right</option>
					<?php } ?>
				</select>
				<br /><small>Text align for NewsFlash.</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Animation:</td>
			<td class="forminp">
				<select name="NewsFlashAink_animation" id="NewsFlashAink_animation" style="min-width:100px;">
						<option value="none" <?php if(($options[NewsFlashAink_animation]==''||$options[NewsFlashAink_animation]=='none')){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>none</option>
						<option value="fade" <?php if($options[NewsFlashAink_animation]=='fade'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>fade</option>
						<option value="fadeout" <?php if($options[NewsFlashAink_animation]=='fadeout'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>fadeout</option>
						<option value="scrollUp" <?php if($options[NewsFlashAink_animation]=='scrollUp'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollUp</option>
						<option value="scrollDown" <?php if($options[NewsFlashAink_animation]=='scrollDown'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollDown</option>
						<option value="scrollLeft" <?php if($options[NewsFlashAink_animation]=='scrollLeft'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollLeft</option>
						<option value="scrollRight" <?php if($options[NewsFlashAink_animation]=='scrollRight'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollRight</option>
						<option value="scrollHorz" <?php if($options[NewsFlashAink_animation]=='scrollHorz'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollHorz</option>
						<option value="scrollVert" <?php if($options[NewsFlashAink_animation]=='scrollVert'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollVert</option>
						<option value="slideX" <?php if($options[NewsFlashAink_animation]=='slideX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>slideX</option>
						<option value="slideY" <?php if($options[NewsFlashAink_animation]=='slideY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>slideY</option>
						<option value="shuffle" <?php if($options[NewsFlashAink_animation]=='shuffle'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>shuffle</option>
						<option value="turnUp" <?php if($options[NewsFlashAink_animation]=='turnUp'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnUp</option>
						<option value="turnDown" <?php if($options[NewsFlashAink_animation]=='turnDown'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnDown</option>
						<option value="turnLeft" <?php if($options[NewsFlashAink_animation]=='turnLeft'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnLeft</option>
						<option value="turnRight" <?php if($options[NewsFlashAink_animation]=='turnRight'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnRight</option>
						<option value="zoom" <?php if($options[NewsFlashAink_animation]=='zoom'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>zoom</option>
						<option value="fadeZoom" <?php if($options[NewsFlashAink_animation]=='fadeZoom'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>fadeZoom</option>
						<option value="blindX" <?php if($options[NewsFlashAink_animation]=='blindX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>blindX</option>
						<option value="blindY" <?php if($options[NewsFlashAink_animation]=='blindY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>blindY</option>
						<option value="blindZ" <?php if($options[NewsFlashAink_animation]=='blindZ'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>blindZ</option>
						<option value="growX" <?php if($options[NewsFlashAink_animation]=='growX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>growX</option>
						<option value="growY" <?php if($options[NewsFlashAink_animation]=='growY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>growY</option>
						<option value="curtainX" <?php if($options[NewsFlashAink_animation]=='curtainX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>curtainX</option>
						<option value="curtainY" <?php if($options[NewsFlashAink_animation]=='curtainY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>curtainY</option>
						<option value="cover" <?php if($options[NewsFlashAink_animation]=='cover'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>cover</option>
						<option value="uncover" <?php if($options[NewsFlashAink_animation]=='uncover'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>uncover</option>
						<option value="toss" <?php if($options[NewsFlashAink_animation]=='toss'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>toss</option>
						<option value="wipe" <?php if($options[NewsFlashAink_animation]=='wipe'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>wipe</option>
				</select>
				<br /><small>Choose your transition type.</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Show Link:</td>
			<td class="forminp">
				<input name="NewsFlashAink_link" type="checkbox" <?php
				if($options[NewsFlashAink_link] == 'check') {
					echo 'checked="checked" value="check"';
				} else if($options[NewsFlashAink_link] != 'check') {
					echo 'value="check"';					
				} else {
					echo 'checked="checked" value="check"';
				}
				?> />
				<br /><small>Show NewsFlash Aink link.</small>
			</td>
		</tr>
	</tbody>
</table>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="<?php get_option($options) ?>" />
<p class="submit bbot"><input name="save" type="submit" value="<?php esc_attr_e("Save Changes"); ?>" /></p>
</form>
</div>

	<div class="wrap"><hr /></div>

		<p style="margin-left:9px;">Place the following code into your theme files where you want the menu to appear:</p>
		<p style="margin-left:9px;"><code>&lt;?php if(function_exists('NewsFlashAink')) { echo NewsFlashAink(); } ?&gt;</code></p>

	<div class="wrap"><hr /></div>

<div class="wrap">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">Donate for NewsFlash Aink</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="forminp">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="AGA6PY4PFSFMW">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/id_ID/i/scr/pixel.gif" width="1" height="1">
<p class="submit bbot"><input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online."></p>
</form>					
			</td>
		</tr>
	</tbody>
</table>
</div>

<?php } function CreateNewNewsFlashAink() {
global $newsflash, $wpdb;

// check to prevent php "notice: undefined index" msg
if(isset($_GET['action'])) $theswitch = $_GET['action']; else $theswitch ='';

switch($theswitch) { case 'addNewsFlashAink': ?>

<div class="wrap">
<div class="icon32" id="icon-themes"><br/></div>
<h2><?php _e('Create NewsFlash Aink','k0z3y') ?></h2>

<?php
// check and make sure the form was submitted
if(isset($_POST['submitted'])) {

	 $insert = "INSERT INTO " . $wpdb->prefix . "newsflash_aink" .
			   " (content, status, showfor, created) " .
			   "VALUES ('" .
					$_POST['content'] . "','" .
					$wpdb->escape($_POST['status']) . "','" .
					$wpdb->escape($_POST['showfor']) . "','" .
					gmdate('Y-m-d H:i:s') .
				"')";
	$results = $wpdb->query($insert);

if ($results) : ?>

<?php global $NewsFlashAink_path; ?>
<p style="text-align:center;padding-top:50px;font-size:22px;">Creating your NewsFlash.....<br /><br /><img src="<?php echo $NewsFlashAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=NewsFlashAink-new">

<?php endif; } else { ?>

<form method="post" id="mainform" action="">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">NewsFlash Aink</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="titledesc">NewsFlash Content:</td>
			<td class="forminp">
				<textarea name="content" id="content" style="width:550px;height:150px;" class="required" minlength="5"></textarea>
				<br><small>HTML is allowed.</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Status:</td>
			<td class="forminp">
				<select name="status" id="status" style="min-width:100px;" class="required">
					<option value="Active">Active</option>
					<option value="Inactive">Inactive</option>
				</select>
				<br><small>If you do not want this NewsFlash live, select "Inactive".</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Show for:</td>
			<td class="forminp">
				<select name="showfor" id="showfor" style="min-width:125px;" class="required">
					<option value="All User">All User</option>
					<option value="User Login">User Login</option>
					<option value="User Not Login">User Not Login</option>
				</select>
				<br><small>Show NewsFlash for selected user.</small>
			</td>
		</tr>
	</tbody>
</table>
<p class="submit">
	<input class="btn button-primary" name="save" type="submit" value="<?php _e('Create New NewsFlash', 'k0z3y') ?>" />
		&nbsp;&nbsp;&nbsp;
	<input name="cancel" type="button" onClick="location.href='?page=NewsFlashAink-new'" value="<?php _e('Cancel','k0z3y')?>" />
	<input name="submitted" type="hidden" value="yes" />
</p>
</form>

<?php } ?>
</div>

<?php break; case 'editNewsFlashAink': ?>

<div class="wrap">
<div class="icon32" id="icon-themes"><br/></div>
<h2>Edit NewsFlash Aink</h2>

<?php if(isset($_POST['submitted']) && $_POST['submitted'] == 'yes') {

	$update = "UPDATE " . $wpdb->prefix . "newsflash_aink SET" .
			  " content = '" . $_POST['content'] . "'," .
			  " status = '" . $wpdb->escape($_POST['status']) . "'," .
			  " showfor = '" . $wpdb->escape($_POST['showfor']) . "'," .
			  " modified = '" . gmdate('Y-m-d H:i:s') . "'" .
			  " WHERE id ='" . $_GET['id'] ."'";
	$results = $wpdb->get_row($update);

?>
<?php global $NewsFlashAink_path; ?>
<p style="text-align:center;padding-top:50px;font-size:22px;">Saving your changes.....<br /><br /><img src="<?php echo $NewsFlashAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=NewsFlashAink-new">

<?php } else { global $wpdb;

	$AllUser = $wpdb->prepare("SELECT * "
			 . "FROM ". $wpdb->prefix . "newsflash_aink "
			 . "WHERE id='" . $_GET['id'] ."'");

?>

<form method="post" id="mainform" action="">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">NewsFlash Aink</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="titledesc">NewsFlash Content:</td>
			<td class="forminp">
				<textarea name="content" id="content" style="width:550px;height:150px;" class="required" minlength="5"><?php foreach ($wpdb->get_results($AllUser) as $All) { ?><?php echo $All->content; ?><?php } ?></textarea>
				<br><small>HTML is allowed.</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Status:</td>
			<td class="forminp">
				<select name="status" id="status" style="min-width: 100px;" class="required">
					<?php foreach ($wpdb->get_results($AllUser) as $Status) { ?>
						<?php if ($Status->status == 'Active') { ?>
							<option value="Active" selected="selected">Active</option>
							<option value="Inactive">Inactive</option>
						<?php } else if ($Status->status == 'Inactive') { ?>
							<option value="Active">Active</option>
							<option value="Inactive" selected="selected">Inactive</option>
						<?php } ?>
					<?php } ?>
				</select>
				<br><small>If you do not want this NewsFlash live, select "Inactive".</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Show for:</td>
			<td class="forminp">
				<select name="showfor" id="showfor" style="min-width: 125px;" class="required">
					<?php foreach ($wpdb->get_results($AllUser) as $Show) { ?>
						<?php if ($Show->showfor == 'All User') { ?>
							<option value="All User" selected="selected">All User</option>
							<option value="User Login">User Login</option>
							<option value="User Not Login">User Not Login</option>
						<?php } else if ($Show->showfor == 'User Login') { ?>
							<option value="All User">All User</option>
							<option value="User Login" selected="selected">User Login</option>
							<option value="User Not Login">User Not Login</option>
						<?php } else if ($Show->showfor == 'User Not Login') { ?>
							<option value="All User">All User</option>
							<option value="User Login">User Login</option>
							<option value="User Not Login" selected="selected">User Not Login</option>
						<?php } ?>
					<?php } ?>
				</select>
				<br><small>Show NewsFlash for selected user.</small>
			</td>
		</tr>
	</tbody>
</table>

<p class="submit">
	<input class="btn button-primary" name="save" type="submit" value="<?php _e('Save changes','k0z3y') ?>" />
		&nbsp;&nbsp;&nbsp;
	<input name="cancel" type="button" onClick="location.href='?page=NewsFlashAink-new'" value="<?php _e('Cancel','k0z3y') ?>" />
	<input name="submitted" type="hidden" value="yes" />
</p>

</form>

<?php } ?>
</div>

<?php break; case 'delete':

	$delete = "DELETE FROM " . $wpdb->prefix . "newsflash_aink "
			. "WHERE id = '". $_GET['id'] ."'";
	$wpdb->query($delete);

?>
<?php global $NewsFlashAink_path; ?>
<p style="text-align:center;padding-top:50px;font-size:22px;">Deleting NewsFlash.....<br /><br /><img src="<?php echo $NewsFlashAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=NewsFlashAink-new">

<?php break; default: global $NewsFlashAink_path;

	$sql = "SELECT * "
		 . "FROM " . $wpdb->prefix . "newsflash_aink "
		 . "ORDER BY id desc";
	$results = $wpdb->get_results($sql);

?>

<style type="text/css">
a.edit {
	background:url('<?php echo $NewsFlashAink_path; ?>/images/edit-grey.png') no-repeat;
	display:block;
	width:16px;
	height:16px;
	float:left;
	margin-left:17.6px;
}
a.edit:hover {
	background:url('<?php echo $NewsFlashAink_path; ?>/images/edit.png') no-repeat;
}
a.delete {
	background:url('<?php echo $NewsFlashAink_path; ?>/images/cross-grey.png') no-repeat;
	display:block;
	width:16px;
	height:16px;
	float:left;
	margin-left:5.5px;
}
a.delete:hover {
	background:url('<?php echo $NewsFlashAink_path; ?>/images/cross.png') no-repeat;
}
</style>

<div class="wrap">
<div class="icon32" id="icon-themes"><br/></div>
<h2>NewsFlash Aink&nbsp;<a class="button add-new-h2" href="?page=NewsFlashAink-new&amp;action=addNewsFlashAink">Add New NewsFlash</a></h2>


<table id="tblspacer" class="widefat fixed" style="margin:25px 0;">
	<thead style="width:100%;">
		<tr style="width:100%;">
			<th scope="col" style="width:20px;">&nbsp;</th>
			<th scope="col"><?php _e('NewsFlash','k0z3y') ?></th>
			<th scope="col" style="width:120px;"><?php _e('Created','k0z3y') ?></th>
			<th scope="col" style="width:120px;"><?php _e('Modified','k0z3y') ?></th>
			<th scope="col" style="width:50px;"><?php _e('Status','k0z3y') ?></th>
			<th scope="col" style="width:100px;"><?php _e('Show for','k0z3y') ?></th>
			<th scope="col" style="text-align:center;width:70px;"><?php _e('Actions','k0z3y') ?></th>
		</tr>
	</thead>
	<?php if ($results) { $rowclass = ''; $i=1; ?>
	<tbody id="list">
	<?php foreach( $results as $result ) { $rowclass = 'even' == $rowclass ? 'alt' : 'even'; ?>
		<tr class="<?php echo $rowclass ?>">
			<td style="padding-left:10px;"><?php echo $i ?>.</td>
			<td><?php if(mb_strlen($result->content)>=250)echo mb_substr($result->content,0,250).'....';else echo $result->content ?></td>
			<td><?php echo mysql2date(get_option('date_format') .' '. get_option('time_format'), $result->created) ?></td>
			<td><?php echo mysql2date(get_option('date_format') .' '. get_option('time_format'), $result->modified) ?></td>
			<td><?php echo ucfirst($result->status) ?></td>
			<td><?php echo ucfirst($result->showfor) ?></td>
			<td style="text-align:center">
				<a href="?page=NewsFlashAink-new&amp;action=editNewsFlashAink&amp;id=<?php echo $result->id ?>" class="edit" title="Edit"><span></span></a>&nbsp;&nbsp;&nbsp;<a onclick="return confirmBeforeDelete();" href="?page=NewsFlashAink-new&amp;action=delete&amp;id=<?php echo $result->id ?>" class="delete" title="Delete"><span></span></a>
			</td>
		</tr>
	<?php $i++; } ?>
	</tbody>	
	<?php } else { ?>
		<tr>
			<td colspan="7">No NewsFlash found.</td>
		</tr>
	<?php } ?>

</table>
</div>

<?php } ?>

<script type="text/javascript">
	/* <![CDATA[ */
		function confirmBeforeDelete() { return confirm("Are you sure you want to delete this NewsFlash?"); }
	/* ]]> */
</script>

<?php } ?>