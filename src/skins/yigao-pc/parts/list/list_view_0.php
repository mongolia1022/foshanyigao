 <?php
    //新闻内页
	
?>
<?php 
	//2011-09-10
	$data=$tag['data.row']; 
?>
 <div class="in_main fr about">
     <div class="content">

         <div class="inside_r_t">
             <span><?php echo $data['title']; ?></span>
             <label>发表于:<?php echo date('Y-m-d',strtotime($data['dtTime'])); ?>　来源:<?php echo $data['source']; ?>　编辑:<?php echo $data['author']; ?> </label>
         </div>
         <div class="inside_m">


             　　            <?php echo $data['content']; ?>


             <!-- JiaThis Button BEGIN -->
             <div class="jiathis_style" style="margin:20px 0 10px 0;">
                 <a class="jiathis_button_qzone"></a>
                 <a class="jiathis_button_tsina"></a>
                 <a class="jiathis_button_tqq"></a>
                 <a class="jiathis_button_weixin"></a>
                 <a class="jiathis_button_renren"></a>
                 <a class="jiathis_button_xiaoyou"></a>
                 <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                 <a class="jiathis_counter_style"></a>
                 <div class="clear"></div>
             </div>
             <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
             <!-- JiaThis Button END -->

         </div>

         <div class="inside_b">
             <?php
             $is_up=$tag['pager.data.up'];
             $is_down=$tag['pager.data.down'];
             if(is_array($is_down)&&is_array($is_up))
             {
                 ?>
                 <span>下一篇　<a href="<?php echo sys_href($params['id'],'list',$is_down['id'])?>"><?php echo $is_down['title']; ?></a></span>
                 <span>上一篇　<a href="<?php echo sys_href($params['id'],'list',$is_up['id'])?>"><?php echo $is_up['title']; ?></a></span>
                 <?php
             }
             else{
                 if(is_array($is_up))
                 {
                     ?>
                     <span>下一篇　<a href="<?php echo sys_href($params['id'],'list',$is_up['id'])?>"><?php echo $is_up['title']; ?></a></span>
                     <?php
                 }
                 if(is_array($is_down))
                 {
                     ?>
                     <span>上一篇　<a href="<?php echo sys_href($params['id'],'list',$is_down['id'])?>"><?php echo $is_down['title']; ?></a></span>
                     <?php
                 }}
             unset($is_up);
             unset($is_down);
             ?>
         </div>
     </div>

 </div>
