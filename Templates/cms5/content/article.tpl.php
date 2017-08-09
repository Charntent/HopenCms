{include content/header}

<div id="sitecontent">
  <div id="newsPage" class="npagePage">
    <div id="banner">
      <div style="background-image:url({BASEURL}/{eval echo $categorys[$catid]['pic']});"></div>
    </div>
    <div class="content">
      <div class="header">
        <p class="title">{eval echo $categorys[$topid]['catname']}</p>
        <p class="subtitle">News</p>
      </div>
      <div id="category">
      <a href="{U_catid($topid)}" {if $catid==$topid}class="active"{/if}>全部</a>
      {foreach $subnav}
      <a href="{$url}"  {if $catid==$id}class="active"{/if}>{$catname}</a>
      {/foreach}
      </div>
      <div id="newslist">
       {foreach $list}
        <div class="newstitem"><a class="newscontent" href="{$url}" target="_blank">
          <div class="newsinfo fl">
            <div class="newsdate fl wow fadeInLeft" data-wow-delay=".1s">
              <p class="md">{date("m-d",$createtime)}</p>
              <p class="year">{date("Y",$createtime)}</p>
            </div>
            <div class="newsbody fl wow fadeInRight" data-wow-delay=".1s">
              <p class="title ellipsis">{$title}</p>
              <p class="description">{$description}</p>
            </div>
          </div>
          <i class="fa fa-angle-right fr"></i></a></div>
         {/foreach} 
          
      <div class="clear"></div>
      <div id="pages">{eval echo $_page->getpage(-5);}</div>
    </div>
  </div>
</div>


{include content/footer}