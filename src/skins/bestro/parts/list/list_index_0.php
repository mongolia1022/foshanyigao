<div class="news_t">
                <div class="news_t2">Title</div>
                <div class="news_t4">Date</div>
            </div>
            <div class="news_list">
                <?php
        if( !empty( $tag['data.results'] ) )
        {?>
            	<ul>
                    <?php foreach($tag['data.results'] as $k =>$data)
        {?>
                	<li>
                        <div class="news_list2">
                        	<label><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo sys_substr($data['title'],30,true); ?></a></label>
                        </div>
                        <div class="news_list4"><?php echo date('Y/m/d',strtotime($data['dtTime'])); ?></div>
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
            <div class="page">
    <?php if($tag['pager.en']) echo $tag['pager.en']; ?>
</div>