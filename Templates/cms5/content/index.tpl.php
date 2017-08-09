<!--www.8888i.com-->
{include content/header}
<!--www.wlcms.com 演示站头部-->
<div id="sitecontent">
  <div id="indexPage">
    <div id="mslider">
      <style type="text/css">
#indexPage #mslider,#indexPage #mslider ul li{ height:px}
</style>
      <script type="text/javascript">$(function(){$("#mslider li video").each(function(index, element) {element.play();});})</script>
      <ul class="slider" data-options-auto="1" data-options-mode="0" data-options-pause="6">
        {sql select * FROM ads where abc='index' order by id desc}
        <li style="background-image:url({BASEURL}/{$pic})"  class="active">
          <div id="tempImage_{$eval echo $index-1;}"></div>
          <img style="display:none" src="{BASEURL}/{$pic}" />
          <div class="mask"></div>
          <a target="_blank" >
          <div>
            <p class="title ellipsis"></p>
          </div>
          <div class="sliderArrow fa fa-angle-down"></div>
          </a></li>
        {/sql}
      </ul>
    </div>
    <div id="mpartner" class="module">
      <div class="bgmask"></div>
      <div class="content fw">
        <div class="module-slider">
          <div class="slider_control prev fl wow bounceIn" data-wow-delay=".1s"></div>
          <div class="slider_control next fr wow bounceIn" data-wow-delay=".1s"></div>
          <div class="slider_wrapper">
            <ul class="slider">
              <li class="wow slideInUp" data-wow-delay=".1s"><a title="推荐用户"  target="_blank" ><img src="http://resources.uemo.net/templates/upload/2/201509/1443087870538.png" width="160" height="80" /></a></li>
              <li class="wow slideInUp" data-wow-delay=".1s"><a href="http://www.pooma.cn/" title="卜马工作室"  target="_blank" ><img src="http://resources.uemo.net/templates/upload/2/201509/1443087263194.png" width="160" height="80" /></a></li>
              <li class="wow slideInUp" data-wow-delay=".1s"><a href="http://www.manasworkshop.com/" title="末那工作室"  target="_blank" ><img src="http://resources.uemo.net/templates/upload/2/201509/1443087585529.png" width="160" height="80" /></a></li>
              <li class="wow slideInUp" data-wow-delay=".1s"><a href="http://jianjie01.mo1.line2.uemo.net/" title="张子建"  target="_blank" ><img src="http://resources.uemo.net/templates/upload/2/201509/1443295495230.png" width="160" height="80" /></a></li>
              <li class="wow slideInUp" data-wow-delay=".1s"><a href="http://www.web-designers.cn/" title="web-designer"  target="_blank" ><img src="http://resources.uemo.net/templates/upload/2/201509/1443087456344.png" width="160" height="80" /></a></li>
              <li class="wow slideInUp" data-wow-delay=".1s"><a href="http://www.dealerstreak.com/" title="DEALER STREAK"  target="_blank" ><img src="http://resources.uemo.net/templates/upload/2/201511/1446563566617.png" width="160" height="80" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="mproject" class="module">
      <div class="bgmask"></div>
      <div class="content">
        <div class="header">
          <p class="title">产品</p>
          <p class="subtitle">10年建站经验 + 500家企业客户 + 顶尖建站团队 = WLCMS高端企业站</p>
        </div>
        <div id="category">
        {foreach get_nav(488,488,1)}
        <a href="{$url}">{$catname}</a>
        {/foreach}
        </div>
        <div id="projectlist">
          <div class="wrapper">
            <div class="projectitem wow fadeInUp" data-wow-delay=".0s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201606/146572693758.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo004_310</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".1s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201606/146488842266.jpg" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo004_263</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".2s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201605/1464247147386.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo003_275</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".3s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201605/1462462039993.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo003_155</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".4s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201604/1461063636778.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo001_220</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".5s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201603/1458200052288.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo002_32</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".6s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201603/1457028676561.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo001_110</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".7s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201601/1453910293247.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo003_117</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".8s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201601/1453903346691.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo001_115</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay=".9s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201601/1453211686856.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo001_122</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay="1s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201601/1452092468332.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo003_31</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
            <div class="projectitem wow fadeInUp" data-wow-delay="1.1s"><a href="http://mb.8888i.com/" target="_blank"><img src="http://resources.uemo.net/templates/upload/2/201512/1449605801764.png" width="500" height="320"/>
              <div class="project_info">
                <div>
                  <p class="title">mo001_77</p>
                  <p class="subtitle">万狼CMS企业版</p>
                </div>
                <div class="line1"></div>
              </div>
              </a></div>
          </div>
        </div>
        <div class="clear"></div>
        <a href="{BASEURL}/case/" id="projectmore">VIEW MORE<strong class="line2"></strong></a></div>
    </div>
    <div id="mnews" class="module">
      <div class="bgmask"></div>
      <div class="content">
        <div class="header wow slideInUp" data-wow-delay=".1s">
          <p class="title">新闻</p>
          <p class="subtitle">News</p>
        </div>
        <div id="newslist">
        
         {sql select id,catid,title,description,createtime from article where catid in(507,508,509) limit 10}
          <div class="newstitem news_mar">
            <div class="newscontent"><a class="newsinfo fl" target="_blank" href="{$url}">
              <div class="newsdate fl wow fadeInLeft" data-wow-delay=".1s">
                 <p class="md">{date("m-d",$createtime)}</p>
              <p class="year">{date("Y",$createtime)}</p>
              </div>
              <div class="newsbody fl wow fadeInRight" data-wow-delay=".1s">
                  <p class="title ellipsis">{$title}</p>
              <p class="description">{$description}</p>
              </div>
              </a><i class="fa fa-angle-right fr"></i></div>
          </div>
          
          {/sql}
          
        <div class="clear"></div>
        <a href="{BASEURL}/news/" class="more wow fadeInUp" data-wow-delay=".5s">MORE<strong class="line2"></strong><i class="fa fa-angle-right"></i></a>
        <div style="height:0">&nbsp;</div>
      </div>
    </div>
    <div id="mpage" class="module">
      <div class="bgmask"></div>
      <div class="content">
        <div class="module-slider">
          <div class="slider_wrapper">
            <ul class="slider one">
              <li>
                <div class="header wow fadeInUp" data-wow-delay=".2s">
                  <p class="title">关于</p>
                  <p class="subtitle">About Us</p>
                </div>
                <p class="description wow fadeInUp" data-wow-delay=".3s">就是让您在半天时间内拥有一套高端企业网站！去除响应式，独立PC+手机的网站</p>
                <a href="{BASEURL}/about/" class="more wow fadeInUp" data-wow-delay=".5s">MORE<strong class="line2"></strong><i class="fa fa-angle-right"></i></a>
                <div class="fimg wow fadeInUp" data-wow-delay=".3s" style="background-image:url(http://resources.uemo.net/templates/upload/2/201508/1439912912593.png)"></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="mcontact" class="module">
      <div class="bgmask"></div>
      <div class="content fw">
        <div class="header wow fadeInUp" data-wow-delay=".1s">
          <p class="title">联系</p>
          <p class="subtitle">Contact</p>
        </div>
        <div id="contactlist">
          <div id="contactinfo" class="fl wow fadeInLeft" data-wow-delay=".2s">
            <h3 class="ellipsis">深圳万狼科技有限公司</h3>
            <p class="ellipsis">地点：深圳市宝安区西乡街道共和工业路明月花都F2003</p>
            <p class="ellipsis">邮编：101100</p>
            <p class="ellipsis">电话：400-888-3474</p>
            <p class="ellipsis">手机：#</p>
            <p class="ellipsis">邮箱：admin@8888i.com</p>
            <div><a class="fl" target="_blank" href="http://weibo.com/wlcms"><i class="fa fa-weibo"></i></a><a class="fl" target="_blank" href="tencent://message/?uin=494731000,496552000,160939872&Site=uemo&Menu=yes"><i class="fa fa-qq"></i></a> <a id="mpbtn" class="fl" href="{BASEURL}/{S('erweima')}"><i class="fa fa-weixin"></i></a></div>
          </div>
          <div id="contactform" class="fr wow fadeInRight" data-wow-delay=".2s">
            <form action="{U('content/feedback')}" method="post">
              <p>
                <input type="text" class="inputtxt" name="name" placeholder="姓名" autocomplete="off" />
              </p>
              <p>
                <input type="text" class="inputtxt" name="email" placeholder="邮箱" autocomplete="off" />
              </p>
              <p>
                <input type="text" class="inputtxt" name="tel" placeholder="电话" autocomplete="off" />
              </p>
              <p>
                <textarea class="inputtxt" name="content" placeholder="内容" autocomplete="off" ></textarea>
              </p>
              <p>
                <input class="inputsub" type="submit" value="提交" />
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer" style="position:relative; z-index:2">
  <p>COPYRIGHT (©) 2016  万狼CMS建站系统5.0 - WLCMS企业版- 万狼科技旗下品牌. 粤ICP备12019481号-5</p>
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
    <li><a href="tencent://message/?uin=496552000&Site=uelike&Menu=yes"><i class="fa fa-qq"></i>496552000(露露)</a></li>
    <li><a href="tencent://message/?uin=494731000&Site=uelike&Menu=yes"><i class="fa fa-qq"></i>494731000(霞霞)</a></li>
    <li><a href="tencent://message/?uin=1954346640&Site=uelike&Menu=yes"><i class="fa fa-qq"></i>1954346640(黎胜)</a></li>
    <li><a href="tencent://message/?uin=160939872&Site=uelike&Menu=yes"><i class="fa fa-qq"></i>160939872(商务)</a></li>
  </ul>
  <div id="olx_tel">
    <div><i class="fa fa-phone"></i>联系电话</div>
    <p>400-888-3474<br />
    </p>
  </div>
</div>
</body>
</html>