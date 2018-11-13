<!-- 图文列表页 -->
<div class="in_main fr about">
    <div class="content">
        <div class="pic_font">
            <ul>
                <?php if( !empty( $tag['data.results'] ) )
                {?>
                <?php foreach($tag['data.results'] as $k =>$data)
                {?>
                <li>
                    <div class="news_pic">
                        <div class="news_pic_t clear"><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><img src="<?php echo ispic($data['originalPic']); ?>" width="100%"></a></div>
                        <div class="news_pic_b">
                            <div class="news_pic_b_1"><a href="#"><?php echo sys_substr($data['title'],30,true); ?></a></div>
                            <div class="news_pic_b_2 iconfont">&#xe77e; <?php echo date('Y-m-d',strtotime($data['dtTime'])); ?><span class="verticalAlign"></span></div>
                            <div class="news_pic_b_3"><?php echo $data['description']; ?></div>
                            <div class="btn_news_pic"><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>">阅读全文</a></div>
                        </div>
                    </div>
                </li>
                    <?php
                }?>
                <?php }?>
            </ul>
        </div>
    </div>

</div>

<!-- 页码 -->
<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>