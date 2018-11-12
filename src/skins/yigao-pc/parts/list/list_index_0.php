<!-- 图文列表页 -->
<div class="pic_news">
    <?php if( !empty( $tag['data.results'] ) )
        {?>
        <?php foreach($tag['data.results'] as $k =>$data)
        {?>
                <dl>
        <dt><a href="#"><img src="<?php echo ispic($data['originalPic']); ?>" width="172" height="172" /></a></dt>
        <dd class="pns_t"><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo sys_substr($data['title'],30,true); ?></a></dd>
        <dd class="pns_b"><?php echo $data['description']; ?></dd>
        <div class="pic_news_time">
            <span><?php echo date('d',strtotime($data['dtTime'])); ?></span>
            <label><?php echo date('Y-m',strtotime($data['dtTime'])); ?></label>
        </div>
        <div class="clear"></div>
    </dl>
        <?php
        }?>
    <?php }?>
</div>

<!-- 页码 -->
<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>