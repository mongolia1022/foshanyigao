<?php 
//详细页推荐产品列表
?>
<li class="view view-third">
    <img src="<?php echo $data['smallPic'];?>" width="230" height="230">
    <div class="mask">
        <p><?php echo $data['title'];?></p>
        <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>" class="info">MORE+</a>
    </div>
</li>