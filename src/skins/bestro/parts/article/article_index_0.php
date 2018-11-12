 <?php
    //文章通用
?>
 <!--内页-->
<?php
						if(!empty($tag['data.results']))
						{
							foreach($tag['data.results'] as $k =>$data)
							{
								echo $data['content'];
							}
						}else{
							echo '暂无数据！';
						}
						?>