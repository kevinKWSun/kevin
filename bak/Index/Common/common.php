<?php
/*
 * Author: 上海SUNNY科技
 * Email : 1053577162@qq.com
 * DATE  : 2013-10-01 
 */
function p($array){
	dump($array, 1, '<pre>', 0);
}
function subtext($text, $length)
{
	if(mb_strlen($text, 'utf8') > $length) 
	return mb_substr($text, 0, $length, 'utf8').'...';
	return $text;
}

function get_user_info($sdk, $openid, $openkey, $pf)
{
	$params = array(
		'openid' => $openid,
		'openkey' => $openkey,
		'pf' => $pf,
	);
	
	$script_name = '/v3/user/get_info';
	return $sdk->api($script_name, $params,'post');
}