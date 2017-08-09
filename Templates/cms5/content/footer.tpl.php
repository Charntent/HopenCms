<div id="footer" style="position:relative; z-index:2">
  <p>COPYRIGHT (©) 2016  WLCMS极客建站 - WLCMS企业版- 万狼科技旗下品牌. 粤ICP备15011227号-1</p>
</div>
<div id="shares"><a id="sshare"><i class="fa fa-share-alt"></i></a><a href="http://service.weibo.com/share/share.php?appkey=3206975293&" target="_blank" id="sweibo"><i class="fa fa-weibo"></i></a><a href="javascript:;" id="sweixin"><i class="fa fa-weixin"></i></a><a href="javascript:;" id="gotop"><i class="fa fa-angle-up"></i></a></div>
<div class="fixed" id="fixed_weixin">
  <div class="fixed-container">
    <div id="qrcode"></div>
    <p>扫描二维码分享到微信</p>
  </div>
</div>
<div id="online_open"><i class="fa fa-comments-o"></i></div>
<div id="online_lx">
  <div id="olx_head">在线咨询<i class="fa fa-times fr" id="online_close"></i></div>
  <ul id="olx_qq">
  
   {eval $kefus = explode(',',S('kefu'));}
    {foreach $kefus $k $v}
      <li><a href="tencent://message/?uin={$v}&Site=Wlcms&Menu=yes"><i class="fa fa-qq"></i>{$v}</a></li>
    {/foreach}
  
  </ul>
  <div id="olx_tel">
    <div><i class="fa fa-phone"></i>联系电话</div>
    <p>400-888-3474<br />
    </p>
  </div>
</div>

</body>
</html>