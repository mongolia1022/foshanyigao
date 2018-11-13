<?php 
//首页产品列表
?>
<li>
    <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><img src="<?php echo $data['originalPic'];?>"/></a>
    <span><a href="<?php echo sys_push_one($data['spec'],1) ?>"><?php echo $data['title'];?></a></span>
</li>