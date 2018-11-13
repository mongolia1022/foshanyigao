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
<!-- 产品列表 -->
<div class="por_list">
	<div class="por_list_in">
<?php
    if( !empty( $tag['data.results'] ) )
    {
		$keyword=urldecode($request['keyword']);
		$request['i'] = $request['i'] ? $request['i'] : 1;
		$temResult = array_slice($tag['data.results'],($request['i']-1)*10,10,true);
		?>
    <ul>
        <?php foreach($tag['data.results'] as $k =>$data)
        {
			if($data['type'] == 'product')
			{
			?>
        <li>
            	<a href="<?php echo sys_href($data['p'],$data['type'],$data['id'])?>"><img src="<?php echo ispic($data['smallPic'])?>" width="280" height="280" /></a>
                <span><a href="<?php echo sys_href($data['p'],$data['type'],$data['id'])?>"><?php echo $data['title'];?></a></span>
            </li>
        <?php
		}
        }?>
        <div class="clear"></div>
    </ul>
    <?php	}
    else
    {
    echo '<center>抱歉,您所查找的相关的信息还没有录入</center>';
    }
    ?>
    </div>
</div>


