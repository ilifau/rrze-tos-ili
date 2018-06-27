<?php
/**
 * DOC
 *
 * @package WordPress
 */

namespace RRZE\Wcag;

use RRZE\Wcag\Options;
use RRZE\Wcag\Settings;

defined( 'ABSPATH' ) || exit;

/**
 * Class Main
 *
 * @package RRZE\Wcag
 */
class Main {
	/**
	 * Options object type
	 *
	 * @var object $options
	 */
	public $options;

	/**
	 * Settings object type
	 *
	 * @var object $settings
	 */
	public $settings;

	/**
	 * Constructor function
	 *
	 * @param string $plugin_basename directory path.
	 */
	public function init( $plugin_basename ) {
		$this->options  = new Options();
		$this->settings = new Settings( $this );

		add_action( 'admin_menu', array( $this->settings, 'admin_settings_page' ) );
		add_action( 'admin_init', array( $this->settings, 'admin_settings' ) );

	}

}
