<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="keywords" content="{keywords}">
<meta name="description" content="{description}">
<meta name="author" content="YY-MO">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<link rel="shortcut icon" href="{_PUBLIC}/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="{_PUBLIC}/css/lib.css">
<link rel="stylesheet" type="text/css"  href="{_PUBLIC}/css/style.css">
<link rel="stylesheet" type="text/css"  href="{_PUBLIC}/css/2.css">
<script type="text/javascript" src="{_PUBLIC}/js/jq.min.js">
</script><script type="text/javascript" src="{_PUBLIC}/js/lib.min.js"></script>
<script type="text/javascript" src="{_PUBLIC}/js/org.js" data-main="indexMain"></script>
<title>{title}</title>
</head>
<body >
<div id="header">
  <div class="content"><a href="{BASEURL}/" id="logo"><img src="{_PUBLIC}/images/logo.png" height="40" /></a>
    <ul id="nav">
  
      <li class="navitem"><a {if $catid==0}class="active"{/if} href="{BASEURL}/" target="_self">首页<strong class="nav_ico"></strong></a></li>
       {foreach $nav}
      <li class="navitem"><a href="{$url}" {if $current}class="active"{/if} target="_self">{$catname}<strong class="nav_ico"></strong>{if $id==487 || $id==488}<i class="fa fa-angle-down"></i>{/if}</a>
         
         {if $id==487 || $id==488}
            <ul class="subnav">
              {foreach get_nav($id,$id,1)}
              <li><a href="{$url}" target="_self">{$catname}<i class="fa fa-angle-right"></i></a></li>
              {/foreach}
             
            </ul>
         {/if}
      
      </li>
      
      {/foreach}
    
    </ul>
    <div class="clear"></div>
  </div>
  <a id="headSHBtn" href="javascript:;">X</a>
</div>

