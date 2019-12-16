<?php

$replaceptr=array(
	'%%year%%'=>date('Y').'年',
	'%%month%%'=>date('n').'月'
);
//タイトル変更
function replace_peterns( $title ){
	global $replaceptr;
	$search = array_keys( $replaceptr);
	$replace = array_values( $replaceptr);

	return str_replace($search,$replace,$title);
};
add_filter( 'the_title', 'replace_peterns');
add_filter('the_content', 'replace_peterns');

