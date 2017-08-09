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