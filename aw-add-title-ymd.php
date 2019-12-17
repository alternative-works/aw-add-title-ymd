<?php
/*
Plugin Name: AW Add Title YMD
Plugin URI: https://careru.jp/
Description: タイトルの年月を自動更新できる ステキやん
Author: Alternative Works
Version: 0.0.3
Author URI: https://careru.jp/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( dirname( __FILE__ ) . '/update-checker/update-checker.php');
require_once( dirname( __FILE__ ) . '/common/main.php' );