<!-- 产品列表页 -->
        	<div class="in_pro">
            <?php if( !empty( $tag['data.results'] ) )
        {?>
      		<ul>
              <?php foreach($tag['data.results'] as $k =>$data)
        {?>
            	<li>
                	<img src="<?php echo ispic($data['smallPic']); ?>" width="236" height="156">
                    <div class="clear"></div>
                    <div class="pro_name">
                    	<a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo sys_substr($data['title'],30,true); ?></a>
                    </div>
                </li>
                <?php
        }?>
                <div class="clear"></div>
            </ul>
            <?php }?>
      </div>

      <div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>
