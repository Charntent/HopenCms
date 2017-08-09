<?php

/**
 * CWCMS  留言反馈控制器文件
 * ============================================================================
 * * 版权所有 2013-2025 深圳万狼科技有限公司，并保留所有权利。
 * 网站地址: http://www.8888i.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: Charntent $
 * $Id: module/feedback.php 202 2015-12-10 16:29:08Z Charntent $
 */
 
 
if(!defined('IN_SYS')) exit('Access Denied');

defined('title') || define("title", ($setting['indextitle']?$setting['indextitle']:$setting['sitename']).'_'.$setting['sitename'] );
defined('keywords') || define("keywords", $setting['keywords'] );
defined('description') || define("description", $setting['description'] );


$cd = gpc('cd');


if(strtolower($cd) != strtolower(session('checkcode'))){
	  message('验证码不正确！');
}

$content = gpc('content');

if($content==''){
	message('请输入问题或建议！');
}

$data['addtime'] = time();
$data['lang'] = CLANG;

if($db->data($data)->save('guestbook')){
   message('恭喜您提交成功！','back',1000,0,'success',1);	
}else{
	message('恭喜您不成功！','back',1000,1,'message',1);	
}




