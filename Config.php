<?php

/**
 * CWCMS  配置文件
 * ============================================================================
 * * 版权所有 2013-2025 深圳万狼科技有限公司，并保留所有权利。
 * 网站地址: http://www.8888i.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: Charntent $
 * $Id: Config.php 252 2014-12-10 16:29:08Z Charntent $
 */
 
//数据库驱动管理
$driver = "mysql";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$database_prex = '';

$dqxm = 'hopencms';
$default_tpl = '';

switch($dqxm){
	case 'yisha':
	    $dbname = 'yisha';//这里写上数据库名称
		$default_tpl = 'yisha';
	break;
	case 'taiyao':
	    $dbname = 'taiyao';//这里写上数据库名称
		$default_tpl = 'taiyao';
	break;
	case 'newwl':
	    $dbname = 'new_wanlang';//这里写上数据库名称
		$default_tpl = 'newwl';
	break;
	case 'huiteng':
	    $dbname = 'huiteng';//这里写上数据库名称
		$default_tpl = 'huiteng';
	break;
	case 'huagang':
	    $dbname = 'huagang';//这里写上数据库名称
		$default_tpl = 'default';
	break;
	case 'cms5':
	    $dbname = 'cms5';//这里写上数据库名称
		$default_tpl = 'default';
	break;
	case 'gihan':
	    $dbname = 'gihan';//这里写上数据库名称
		$default_tpl = 'default';
	break;
	case 'cmsdemo':
	    $dbname = 'cmsdemo';//这里写上数据库名称
		$default_tpl = 'cmsdemo';
	break;
	case 'hopencms':
	    $dbname = 'hopencms';//这里写上数据库名称
		$default_tpl = 'hopencms';
	break;
}
//后缀随意变化，第一个为准！
$file_prefix = 'html';
//url分隔符，默认为/，如果修改为-或者其他的全站为一级目录！
$fengefu = '/';
//安装服务器(根目录)
//$web_local ='http://'.$_SERVER['HTTP_HOST'];
$web_local = 'http://'.$_SERVER['HTTP_HOST'].'/HopenCms';

//后台皮肤
$skins_admin = $web_local."/Resources/style";
//前台静态皮肤
$skins_index = $web_local."/Resources";







