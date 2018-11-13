<?php
    // 为方便并保证您以后的快速升级 请使用SHL提供的如下全局数组
	
	// 数组定义/config/doc-global.php
	
	// 如有需要， 请去掉注释，输出数据。
	/*
	echo '<pre>';
		print_r($tag);
	echo '</pre>';
	*/
?>
<div class="in_main fr about">
    <div class="content">
        <div class="news_list">
            <ul>
                <?php
                if( !empty( $tag['data.results'] ) )
                {
                    foreach($tag['data.results'] as $k =>$data)
                    {

                        ?>
                        <li>
                            <span><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo $data['title']; ?></a></span>
                            <label><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></label>
                        </li>
                        <?php
                    }
                }
                else
                {
                    echo '暂无文章。';
                }
                ?>
                <div class="clear"></div>
            </ul>
        </div>
    </div>

</div>

<!-- 页码 -->
<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>