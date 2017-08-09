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