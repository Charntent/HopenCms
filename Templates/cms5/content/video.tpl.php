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
<div class="wrapper igoods clearfix wow fadeInUp" data-wow-delay=".2s" style="width:1280px; margin:0 auto">
    <div class="img-list2">
      <ul>
    {foreach $list}
        <li>
          <div class="wrap-box">
            <div class="img-box">
              <a title="{$title}" href="{$url}" target="_blank">
                <img src="{$thumb}" />
              </a>
            </div>
            <div class="info">
              <h3><a title="{$title}" href="{$url}">{$title}</a></h3>
              <div class="col">
                <b>{$title}</b>
              </div>
             
            </div>
          </div>
        </li>
   {/foreach}
        
        
      </ul>
    </div>
    
  </div>
</div>     

<div class="clear"></div>
      <div id="pages">{eval echo $_page->getpage(-5);}</div>
    </div>
  </div>
</div>


{include content/footer}