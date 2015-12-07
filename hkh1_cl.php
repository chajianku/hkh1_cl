<?php
/*
Plugin Name: 云签到常量显示
Version: 1.0
Plugin URL: http://mczj.wicp.net
Description: 显示云签到的常量，本插件只是对开发手册的常量的调用
Author: 1157173310
Author Email: 1157173310@qq.com
Author URL: http://mryun2.pe.hu
For: 不限
*/
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

if(extension_loaded('zlib')) {
	ob_start('ob_gzhandler');
}
?>