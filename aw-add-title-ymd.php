<?php
/*
Plugin Name: AW Add Title YMD
Plugin URI: https://careru.jp/
Description: タイトルの年月を自動更新できる ステキやん
Author: Alternative Works
Version: 0.0.2
Author URI: https://careru.jp/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if(!defined('UPDATE_CHECKER_LOADED')){
    require_once( dirname( __FILE__ ) . '/update-checker/vendor/autoload.php' );
}
define('UPDATE_CHECKER_LOADED',true);

add_action( 'init', function(){
        $plugin_slug = plugin_basename( __FILE__ ); // e.g. `hello/hello.php`.
        $gh_user = 'alternative-works';                      // The user name of GitHub.
        $gh_repo = 'aw-add-title-ymd';       // The repository name of your plugin.

        // Activate automatic update.
        new Miya\WP\GH_Auto_Updater( $plugin_slug, $gh_user, $gh_repo );
    }
);

require_once( dirname( __FILE__ ) . '/common/main.php' );