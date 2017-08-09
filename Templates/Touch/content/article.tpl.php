{include common/header}
<div  id="newsPage">   
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
<div id="newList">
{foreach $list}

<div class="news-list-item for-event" onclick="window.location='{$url}'">
    <div class="news-info">
        <div class="thumbnail">
            <img src="{$thumb}" border="0">
        </div>
        <div class="info">
            <div class="line-one substring">{$title}</div>
            <div class="line-two font12 substring">
                <div class="pic time">{date("Y-m-d",$createtime)}</div>
                <div class="pic page-views">{$click}</div>
            </div>
            <div class="line-three font12">{$description}</div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="split-block"></div>
{/foreach}

</div>
<div class="qspage" id="pageLoading"><a class="unable"></a> <span class="loadingTitle" id="loadingTitle">已经加载完毕.</span> <a class="unable"></a></div>
</div>

{include common/footer}
<script>
var  catid = '{$catid}',
     cBox = "#newList";
     moreUrl = "{U('more/index')}";
</script>
<script type="text/javascript" src="{_PUBLIC}/js/app.min.js"></script>