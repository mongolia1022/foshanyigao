<?php
//首页新闻带图
?>
<img src="<?php echo ispic($data['originalPic']); ?>" width="294" height="280" />
<div class="idx_news_l_b">
    <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>">
        <div class="idx_news_l_b_t"><?php echo $data['title']; ?></div>
        <div class="idx_news_l_b_b"><?php echo $data['description']; ?></div>
    </a>
</div>