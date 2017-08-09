<!doctype html>
<html class="no-js" style="font-size:100px !important">
<head>
<meta charset="utf-8">
<title>{title}</title>
<meta name="keywords" content="{keywords}">
<meta name="description" content="{description}">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">
<meta name="screen-orientation" content="portrait">
<meta name="full-screen" content="yes">
<meta name="browsermode" content="application">
<meta name="x5-orientation" content="portrait">
<meta name="x5-fullscreen" content="true">
<meta name="x5-page-mode" content="app">
<!--开始写css-->
<link rel="stylesheet" type="text/css" href="{_PUBLIC}/css/lib.css">
<link type="text/css" href="{_PUBLIC}/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet"  type="text/css" href="{_PUBLIC}/css/style.css">
{if isset($categorys[$catid]['cattype']) && ($categorys[$catid]['cattype']=='article' || $categorys[$catid]['cattype']=='page')}
   <link rel="stylesheet" href="{_PUBLIC}/css/news.css" type="text/css">
{/if}
{if $catid==0}
 <link rel="stylesheet" href="{_PUBLIC}/css/index.css" type="text/css">
{/if}
</head>
<head>
<body>
<div class="appLoading" id="appLoading"></div>
{if $catid!=0}
<div class="headernavfixed">
  <div class="headernav font18">
    <div class="title">{if isset($catname)}{$catname}{else}首页{/if}<div class="return js-back for-event"></div>
    <div class="rbtn for-event" id="hpMenu"></div>
    </div>
  </div>
	
</div>
{/if}
{if $catid == 0}
<div id="leftcontrol" class="hide">
  <ul id="nav">
    <li>
      <div id="closelc" class="fr btn hide">
        <div class="lcbody">
          <div class="lcitem top">
            <div class="rect top"></div>
          </div>
          <div class="lcitem bottom">
            <div class="rect bottom"></div>
          </div>
        </div>
      </div>
    </li>
    <li class="navitem {if $catid==0}active{/if}"><a class="transform" href="{BASEURL}/"><span class="circle transform"></span>首页</a></li>
    {foreach $nav}
   
    {eval $sons =  get_nav($id,$id,1)}
    {if $sons}
    <li class="navitem {if $current}active{/if}">
    <a href="javascript:;" class="hassub">
    <span class="circle transform"></span>{$catname}<span class="more">
    <span class="h"></span>
    <span class="h v transform"></span></span>
    </a>
      <ul class="subnav transform" data-height="{eval echo 50*count($sons)}" >
       {foreach $sons}
        <li><a href="{$url}"><i class="fa fa-angle-right"></i>{$catname}</a></li>
       {/foreach}
      </ul>
    </li>
    {else}
    <li class="navitem {if $current}active{/if}"><a class="transform" href="{$url}"><span class="circle transform"></span>{$catname}</a></li>
    {/if}
    {/foreach}
  </ul>
</div>
{/if}
<div id="sitewapper">
<div id="sitecontent" class="transform">
{if $catid == 0}
  <div id="header">
    <div id="openlc" class="fl btn">
      <div class="lcbody">
        <div class="lcitem top">
          <div class="rect top"></div>
        </div>
        <div class="lcitem bottom">
          <div class="rect bottom"></div>
        </div>
      </div>
    </div>
    <a id="logo" href="{BASEURL}/"><img src="{_PUBLIC}/images/logo.png" /></a></div>
{/if}
<div class="scrollView">
