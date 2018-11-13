<!-- 产品列表页 -->

<!-- 产品分类 -->
<div class="pro_select">
	<div class="pro_select_in">
    	<div class="pro_select_first">
          <ul>
              <li <?php echo $params['id']==3?'class="now"':'' ?>><a href="<?php echo sys_href(3); ?>">全部</a></li>
              <?php nav_sub(3,2,0);?>
            </ul>
        </div>
        <?php if(sys_menu_info('deep')!=0)
    {
    $curid=sys_menu_info('deep')==2?sys_menu_info('parentId'):$params['id'];
    ?>
        <div class="pro_select_second">
            <?php nav_sub($curid,3,0);?>
        </div>
        <?php	}?>
    </div>
</div>

<!-- 产品列表 -->
<div class="por_list">
	<div class="por_list_in">
<?php
    if( !empty( $tag['data.results'] ) )
    {?>
    <ul>
        <?php foreach($tag['data.results'] as $k =>$data)
        {?>
        <li>
            	<a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><img src="<?php echo $data['originalPic']; ?>" width="280" height="280" /></a>
                <span><a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><?php echo $data['title'];?></a></span>
            </li>
        <?php
        }?>
        <div class="clear"></div>
    </ul>
    <?php	}
    else
    {
    echo '暂无数据';
    }
    ?>
    </div>
</div>

<!-- 页码 -->
<div class="page"><?php if($tag['pager.cn']) echo $tag['pager.cn']; ?></div>
