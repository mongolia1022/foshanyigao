<?php
//首页新闻列表
?>
<li>
    <div class="idx_news_list_l">
        <span><?php echo date('Y年m月',strtotime($data['dtTime'])); ?></span>
        <label><?php echo date('d日',strtotime($data['dtTime'])); ?></label>
    </div>
    <div class="idx_news_list_r">
        <span><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo $data['title']; ?></a></span>
        <label><?php echo $data['description']; ?></label>
    </div>
    <div class="clear"></div>
</li>