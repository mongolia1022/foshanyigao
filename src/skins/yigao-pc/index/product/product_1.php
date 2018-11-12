<?php 
//详细页推荐产品列表
?>
    <li>
        <a href="<?php echo sys_push_one($data['spec'],1) ?>"><img src="<?php echo $data['middlePic'];?>" /></a>
        <span><a href="<?php echo sys_push_one($data['spec'],1) ?>"><?php echo $data['title'];?></a></span>
        <label><?php echo $data['description'] ?></label>
    </li>