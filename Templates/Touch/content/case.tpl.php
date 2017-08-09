{include common/header}
<link rel="stylesheet" href="{_PUBLIC}/css/thumb.css" type="text/css">
<div  id="casesPage">   
<div class="news-top-menu-bar">
    <div class="top-menu">
        <div class="top-menu-list">
            {foreach $subnav}
                 <a data-url="" href="{$url}" class="t-btn {if $catid==$id}active{/if} font16"><span>{cut($catname,4)}</span></a>                
            {/foreach}
        </div>
    </div>
</div>

<div class="split-block"></div>
<div id="caseList">
    <ul class="items">
        {foreach $list}
           <li class="jx-juitem">
              <a class="link" href="{$url}">
                <div class="jx-imgwp main-picwp">
                  <img lz-src="{$thumb}" lz-dpr="" class=" main-pic" src="{$thumb}">
                  
                  <div class="merits">
                    <div class="merit">
                        领劵低至899元
                      </div>
                    </div>
                  </div>
                <div class="namewp">
                  <div class="name ">{$title}</div>
                  
                </div>
                <del class="tag-price">¥2499.00</del>
                <div class="sale-info">
                  <span class="price">
                    <i class="jx-yen">¥</i>
                    <em class="base-price">1099</em>
                    </span>
                </div>
              </a>
           </li>
   		{/foreach}
	</ul>
</div>
<div class="qspage" id="pageLoading"><a class="unable"></a> <span class="loadingTitle" id="loadingTitle">已经加载完毕.</span> <a class="unable"></a></div>
</div>
{include common/footer}
<script>
var  catid = '{$catid}',
     cBox = "#caseList .items";
     moreUrl = "{U('more/index')}?pagetype=thumbs";
</script>
<script type="text/javascript" src="{_PUBLIC}/js/app.min.js"></script>