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
<div class="weui-panel__bd">
    <?php
    if( !empty( $tag['data.results'] ) )
    {
        foreach($tag['data.results'] as $k =>$data)
        {
            ?>
            <div class="weui-media-box weui-media-box_text">
                <h4 class="weui-media-box__title"><?php echo $data['title']; ?></h4>
                <p class="weui-media-box__desc"><?php echo $data['description']; ?></p>
                <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta"><?php echo $data['source']; ?></li>
                    <li class="weui-media-box__info__meta"><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></li>
                    <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">编辑:<?php echo $data['author']; ?></li>
                </ul>
            </div>
            <?php
        }
    }
    else
    {
        echo '暂无文章。';
    }
    ?>

</div>

<!-- 页码 -->
<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>