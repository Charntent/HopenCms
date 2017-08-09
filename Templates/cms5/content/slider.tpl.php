<style>
.slideBox .hd ul{overflow:hidden;zoom:1;text-align:center;}
.slideBox .hd ul li{display:inline-block;margin-right:2px;width:15px;height:15px;line-height:14px;text-align:center;background:#afafad;cursor:pointer;border-radius: 30px;}
.slideBox .hd ul li.on{background:#009ce3;color:#fff;border-radius: 30px;}
.slideBox .bd{position:relative;z-index:0;}
.slideBox .bd li{zoom:1;vertical-align:middle;width:100%;}
.slideBox .bd img{max-width:100%;height:auto;display:block;}
.slideBox .prev,.slideBox .next{position:absolute;left:3%;top:50%;margin-top:-25px;display:block;width:32px;height:40px;background:url(../images/slider-arrow.png) -110px 5px no-repeat;filter:alpha(opacity=50);opacity:0.5;}
.slideBox .next{left:auto;right:3%;background-position:8px 5px;}
.slideBox .prev:hover,.slideBox .next:hover{filter:alpha(opacity=100);opacity:1;}

</style>

 <div id="slideBox" class="slideBox">
    <div class="hd">
      <ul>
                <li></li>
                <li></li>
              </ul>
    </div>
    <div class="bd">
      <ul>
                <li><img src="XXX"/></li>
                <li><img src="XXx"/></li>
              </ul>
    </div>
  <script id="jsID" type="text/javascript">
		
jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true,delayTime:1000});
		</script> 
