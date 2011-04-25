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
				<br /><small>ex: "Information" or "News Flash" without quotes.</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Width:</td>
			<td class="forminp">
				<input name="NewsFlashAink_width" id="NewsFlashAink_width" style="width:100px;" value="<?php echo $options[NewsFlashAink_width]; ?>" type="text">
				<br /><small>ex: "500px" or "50%" without quotes.</small>
			</td>
		</tr><tr>
			<td class="titledesc">NewsFlash Speed:</td>
			<td class="forminp">
				<input name="NewsFlashAink_speed" id="NewsFlashAink_speed" style="width:100px;" value="<?php echo $options[NewsFlashAink_speed]; ?>" type="text">
				<br /><small>ex: "1000" or "10000" without quotes.</small>
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
		</tr>
	</tbody>
</table>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="<?php get_option($options) ?>" />
<p class="submit bbot"><input name="save" type="submit" value="<?php esc_attr_e("Save Changes"); ?>" /></p>
</form>
</div>

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
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
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

switch($theswitch) { case 'addNewsFlash': ?>

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
<p style="text-align:center;padding-top:50px;font-size:22px;">Creating your NewsFlash.....<br /><br /><img src="<?php echo $NewsFlashAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=NewsFlashAink_new">

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
				<textarea name="content" id="content" style="width:500px;height:100px;" class="required" minlength="5"></textarea>
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
			<td class="titledesc">NNewsFlash Show for:</td>
			<td class="forminp">
				<select name="showfor" id="showfor" style="min-width: 125px;" class="required">
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
	<input name="cancel" type="button" onClick="location.href='?page=NewsFlashAink_new'" value="<?php _e('Cancel','k0z3y')?>" />
	<input name="submitted" type="hidden" value="yes" />
</p>
</form>

<?php } ?>
</div>

<?php break; case 'editNewsFlash': ?>

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
<p style="text-align:center;padding-top:50px;font-size:22px;">Saving your changes.....<br /><br /><img src="<?php echo $NewsFlashAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=NewsFlashAink_new">

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
				<textarea name="content" id="content" style="width:500px;height:100px;" class="required" minlength="5"><?php foreach ($wpdb->get_results($AllUser) as $All) { ?><?php echo $All->content; ?><?php } ?></textarea>
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
	<input name="cancel" type="button" onClick="location.href='?page=NewsFlashAink_new'" value="<?php _e('Cancel','k0z3y') ?>" />
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
<p style="text-align:center;padding-top:50px;font-size:22px;">Deleting NewsFlash.....<br /><br /><img src="<?php echo $NewsFlashAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=NewsFlashAink_new">

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
<h2>NewsFlash Aink&nbsp;<a class="button add-new-h2" href="?page=NewsFlashAink_new&amp;action=addNewsFlash">Add New Newsflash</a></h2>


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
				<a href="?page=NewsFlashAink_new&amp;action=editNewsFlash&amp;id=<?php echo $result->id ?>" class="edit" title="Edit"><span></span></a>&nbsp;&nbsp;&nbsp;<a onclick="return confirmBeforeDelete();" href="?page=newsflash_aink_new&amp;action=delete&amp;id=<?php echo $result->id ?>" class="delete" title="Delete"><span></span></a>
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