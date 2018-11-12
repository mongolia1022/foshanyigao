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
<style>
.page table{ margin:0 auto;}
</style>
<div class="inside_r">
<?php
	if(!empty($tag['data.results']))
	{
		$keyword=urldecode($request['keyword']);
		$request['i'] = $request['i'] ? $request['i'] : 1;
		$temResult = array_slice($tag['data.results'],($request['i']-1)*10,10,true);
		?>
        <div class="in_pro">
            <ul>
        <?php
		foreach($temResult as $data)
		{
			if(!empty($data['title'])){
				$data['title']=get_keyword_str($data['title'],$keyword,30);
			}else{
				$data['title']=get_keyword_str($data['content'],$keyword,30);
			}
			if($data['type'] == 'product')
			{
					?>
                    <li>
                        <a href="<?php echo sys_href($data['p'],$data['type'],$data['id'])?>"><img src="<?php echo ispic($data['smallPic'])?>" width="191" height="169"/></a>
                        <span><a href="<?php echo sys_href($data['p'],$data['type'],$data['id'])?>"><?php echo $data['title']; ?></a></span>
                    </li>
					<?php 
			}
		}
		?>
            <div class="clear"></div>
        </ul>
      </div>
            <?php
		echo '<div class="page">'.$tag['pager.cn'].'</div>';
	}
	else
	{
		echo '<div class="in_pro" style="margin: 200px auto 0 auto; width:500px;">抱歉,您所查找的相关的信息还没有录入,如果想详细了解这方面的内容可以咨询在线客户,我们会第一时间为您解答,谢谢!</div>';
	}

?>
</div>