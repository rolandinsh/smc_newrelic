<?php
/**
 * Plugin Name: SimpleMediaCode New Relic
 * Plugin URI: http://simplemediacode.com/wordpress/
 * Description: Sets the New Relic app name and other configuration values based on WordPress configuration. New Relic profiles code performance and activity, http://newrelic.com .
 * Version: 1.0.0
 * Author:  Gigaom, rolandinsh
 * License: GPL2
 */

// include required components
require_once dirname( __FILE__ ) .'/components/class-go-newrelic.php';
smc_newrelic();