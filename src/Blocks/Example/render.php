<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\Blocks\RegistrationForm;

use AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\Controller\Block as BlockController;

$block_controller = new BlockController;
$block_controller->extend($block);

$classNameDefault = $block['shp']['classNameDefault'];

?>
<div class="<?php echo $block['shp']['class_names']; ?>">
	<p class="<?php echo $classNameDefault; ?>__message"><?php esc_html_e('Hello world', ''); ?>
</div>
