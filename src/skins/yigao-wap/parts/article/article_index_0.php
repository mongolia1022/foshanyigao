 <?php
    //文章通用
?>
 <!--内页-->
 <div class="in_main fr about">
     <div class="content">

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
     </div>

 </div>

