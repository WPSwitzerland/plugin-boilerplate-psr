<?php

namespace AUTHOR_NAMESPACE\PLUGIN_NAMESPACE\Controller;

class Assets
{
	public function run()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueueAssets']);
	}

	/**
	 * Scripts and styles for shared usage across all blocks
	 *
	 * @return void
	 */
	public function enqueueAssets(): void
	{
		$min = !defined('WP_DEBUG') || !WP_DEBUG ? '.min' : '';

		$loader_script = "/assets/scripts/ui{$min}.js";
		wp_enqueue_script('PLUGIN_PREFIX_ui', PLUGIN_PREFIX_get_instance()->url . $loader_script, ['wp-api'], filemtime(PLUGIN_PREFIX_get_instance()->dir . $loader_script), true);
		wp_localize_script('PLUGIN_PREFIX_ui', 'PLUGIN_PREFIX_ui', [
			'version' => PLUGIN_PREFIX_get_instance()->version,
			'url' => PLUGIN_PREFIX_get_instance()->url,
			'min' => $min ? 1 : 0,
			'debug' => $min ? 1 : 0,
		]);

		$loader_style = "assets/styles/ui/index{$min}.css";
		wp_enqueue_style('PLUGIN_PREFIX_ui', PLUGIN_PREFIX_get_instance()->url . $loader_style, [], filemtime(PLUGIN_PREFIX_get_instance()->dir . $loader_style));
	}
}
