<?php
/**
 * Common Template - tpl_box_default_right.php
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_box_default_right.php 2975 2006-02-05 19:33:51Z birdbrain $
 */

// choose box images based on box position
  if ($title_link) {
    $title = '<a href="' . zen_href_link($title_link) . '">' . $title . BOX_HEADING_LINKS . '</a>';
  }
//
?>
<!--// bof: <?php echo $box_id; ?> //-->
<div class="rightBoxContainer well sidebar-nav" id="<?php echo str_replace('_', '-', $box_id ); ?>">
	<ul class="nav nav-list">
		<li id="<?php echo str_replace('_', '-', $box_id) . 'Heading'; ?>" class="nav-header"><?php echo $title; ?></li>
		<?php echo $content; ?>
	</ul>
</div>
<!--// eof: <?php echo $box_id; ?> //-->

