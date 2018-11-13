     <?php
    //企业展示
?>
 <!--内页-->
<?php
						if(!empty($tag['data.results']))
						{
							foreach($tag['data.results'] as $k =>$data)
							{?>
								 <!-- 内页标题 -->
    <div class="in_title">
        <div class="in_title_t"><?php echo $data['keywords']; ?></div>
        <div class="in_title_m">
            <?php echo $data['title']; ?>
            <div class="in_title_m_l"></div>
            <div class="in_title_m_r"></div>
        </div>
        <div class="in_title_b"><?php echo $data['description']; ?></div>
    </div>
    <!-- 内容页 -->
    <div class="content">
        <div class="content_list">
            <ul>
                <li><a href="<?php echo sys_href(1); ?>"><?php echo sys_menu_info('title',true)?></a></li>
                <?php nav_sub(1,2,2);?>
            </ul>
        </div>
        <div class="content_in">
            <?php echo $data['content']; ?>
        </div>
    </div>
							<?php }
						}else{
							echo '暂无数据！';
						}
						?>
   