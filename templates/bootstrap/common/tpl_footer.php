<?php
/**
 * Common Template - tpl_footer.php
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_footer.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_footer = true;<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_footer.php 15511 2010-02-18 07:19:44Z drbyte $
 */
require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>

<?php
if (!isset($flag_disable_footer) || !$flag_disable_footer) {
?>
<hr>
	<!--bof-navigation display -->
	<div id="navSuppWrapper" class="pull-left">
		<div id="navSupp" class="subnav">
			<ul class="nav nav-pills">
			<li><?php echo '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'; ?><?php echo HEADER_TITLE_CATALOG; ?></a></li>
			<?php if (EZPAGES_STATUS_FOOTER == '1' or (EZPAGES_STATUS_FOOTER == '2' and (strstr(EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'])))) { ?>
			<?php require($template->get_template_dir('tpl_ezpages_bar_footer.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_ezpages_bar_footer.php'); ?>
			<?php } ?>
			</ul>
		</div>
	</div>
	<!--eof-navigation display -->

	<!--bof-ip address display -->
	<?php
	if (SHOW_FOOTER_IP == '1') {
	?>
	<div id="siteinfoIP" class="pull-right"><?php echo TEXT_YOUR_IP_ADDRESS . '  ' . $_SERVER['REMOTE_ADDR']; ?></div>
	<br class="clearBoth"/>
	<?php
	}
	?>
	<!--eof-ip address display -->

	<!--bof-banner #5 display -->
	<?php
	  if (SHOW_BANNERS_GROUP_SET5 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET5)) {
		if ($banner->RecordCount() > 0) {
	?>
	<br class="clearBoth"/>
	<div id="bannerFive" class="banners centeredContent"><?php echo zen_display_banner('static', $banner); ?></div>
	<br class="clearBoth"/>
	<?php
		}
	  }
	?>
	<!--eof-banner #5 display -->

	<!--bof- site copyright display -->
	<div id="siteinfoLegal" class="legalCopyright pull-right"><?php echo FOOTER_TEXT_BODY; ?></div>
	<!--eof- site copyright display -->
<?php
} // flag_disable_footer
?>