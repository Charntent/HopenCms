{include common/header}
<div  id="newsPage">
   <div class="news-show">
    <h1 class="font18">{$title}</h1>
    <div class="attribute font13">
        
        <div class="pic page-views" id="clicknum">{$click}</div>
        <div class="pic time">{date("Y-m-d",$createtime)}</div>
        <div class="clear"></div>
    </div>
    <div class="content link_blue">
       {$content}
    </div>
</div>
</div>
{include common/footer}