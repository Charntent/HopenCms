<!doctype html>
<html class="no-js" style="font-size:100px !important">
<head>
<meta charset="utf-8">
<title>WLCMS手机版</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">
<!--开始写css-->
<link rel="stylesheet" type="text/css" href="{_PUBLIC}/css/lib.css">
<link type="text/css" href="{_PUBLIC}/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet"  type="text/css" href="{_PUBLIC}/css/style.css">
{if $m=='user'}
   <link rel="stylesheet" href="{_PUBLIC}/css/user.css">
{/if}
</head>
<body>

<div class="headernavfixed">
  <div class="headernav font18">
    <div class="title">{if isset($catname)}{$catname}{else}首页{/if}<div class="return js-back for-event"></div>
    <div class="rbtn for-event"></div>
    </div>
  </div>
	
</div>
