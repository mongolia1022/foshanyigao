 <?php
    //新闻内页
	
?>
<?php 
	//2011-09-10
	$data=$tag['data.row']; 
?>
<div class="inside_r_t">
        <span><?php echo $data['title']; ?></span>
        <label>发表于： <?php echo date('Y-m-d',strtotime($data['dtTime'])); ?>　来源：<?php echo $data['source']; ?>　编辑：<?php echo $data['author']; ?></label>
    </div>
    <div class="inside_m">
        <em>简介：<?php echo $data['description']; ?></em>
        <?php echo $data['content']; ?>
    </div>
    <div class="inside_b">
        <span>上一篇　<a href="<?php echo sys_href($params['id'],'list',$is_up['id'])?>"><?php echo $is_up['title']; ?></a></span>
        <span>下一篇　<a href="<?php echo sys_href($params['id'],'list',$is_down['id'])?>"><?php echo $is_down['title']; ?></a></span>
    </div>