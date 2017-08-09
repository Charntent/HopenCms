{include content/header}

<div id="sitecontent">
  <div class="npagePage" id="newspost">
    <div class="content">
      <div class="header fw">
        <p class="title">{$title}</p>
        <p class="subtitle">{date("Y-m-d H:i:s",$createtime)}</p>
      </div>
      <div class="fw postbody">
      {if $upfile!=''}
      <script type="text/javascript" src="{_PUBLIC}/js/player/js/swfobject.js"></script>
      <div class="video" id="CuPlayer" style="width:860px; margin:0 auto">
      
      </div>
         <script type="text/javascript">
			var so = new SWFObject("{_PUBLIC}/js/player/player.swf","myCuPlayer","860","520","9","#000000");
			so.addParam("allowfullscreen","true");
			so.addParam("allowscriptaccess","always");
			so.addParam("wmode","opaque");
			so.addParam("quality","high");
			so.addParam("salign","lt");
			//播放器设置文件-----------------------------
			so.addVariable("JcScpFile","CuSunV3set.xml");
			//视频文件及略缩图--------------------------
			//so.addVariable("JcScpServer","rtmp://www.yoursite.com/vod");//流媒体服务器
			so.addVariable("ShowJcScpAVideo","no"); //是否显示前置视频广告
			so.addVariable("ShowJcScpAMoveText","no"); //是否显示文字滚动广告
			so.addVariable("JcScpAutoPlay","no"); //是否自动播放
			so.addVariable("JcScpVideoPath","{BASEURL}/{$upfile}"); //视频文件地址
			so.addVariable("JcScpImg","{BASEURL}/{$thumb}");//视频缩略图
			//-----------------------------------------
			so.addVariable("JcScpSharetitle","{$title}"); 
			so.write("CuPlayer");
			</script>
     <script language="javascript" src="{_PUBLIC}/js/player/js/action.js" type="text/javascript"></script>
      {else}
      {$content}
       {/if}
        <ul class="ipage">{$ipage_str}
      <div style="clear:both"></div>
      </ul>
      </div>
      <div id="pages_wl"><ul>{$nextpage}
      <div style="clear:both"></div>
      </ul>
 
      </div>

      
    </div>
  </div>
</div>
<style>
.ipage li{ padding:5px 10px; border:1px solid #06F; float:left; margin:0 4px;}
.ipage li.acitve{ background:#03F; color:#FFF}
</style>

{include content/footer}