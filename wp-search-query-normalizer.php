<?php
/*
Plugin Name: WP Search Query Normalizer
Description: Corrige et normalise les recherches WordPress.
Version:1.0
Author: Sévérin OGAH
*/

if(!defined('ABSPATH')) exit;


function wsqn_normalize($str){

$str=remove_accents($str);
$str=strtolower($str);

return trim(
preg_replace('~\s+~',' ',$str)
);

}


function wsqn_redirect(){

if(is_admin() || !is_search()){
return;
}

$q=isset($_GET['s'])
? trim(wp_unslash($_GET['s']))
: '';

if(!$q){
return;
}

$norm=wsqn_normalize($q);

$map=array(

'ratification'=>'dératisation',
'deratisation'=>'dératisation',

'moustification'=>'démoustication',

'infection'=>'désinfection',

'cafard'=>'cafards',

'puce'=>'puces'

);

if(!isset($map[$norm])){
return;
}

$url=add_query_arg(
's',
rawurlencode($map[$norm]),
home_url('/')
);

wp_safe_redirect($url,302);

exit;

}

add_action(
'template_redirect',
'wsqn_redirect'
);