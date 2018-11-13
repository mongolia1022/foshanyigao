<!-- 产品图 -->
<?php 
//2011-09-10
$data=$tag['data.row'];
?>
<div class="pro_in">
 <?php
			$originalPic = explode('|',$data['originalPic']);
			$middlePic   = explode('|',$data['middlePic']);
			$smallPic    = explode('|',$data['smallPic']);
			?>
	<div class="pro_in_l" style="display:none">
   	  <div class="pro_in_l_t">
        	<img src="<?php echo ispic($originalPic[0])?>" width="580" height="580" />
        </div>
		<div class="pro_in_l_b"><a class="iconfont" href="<?php echo ispic($originalPic[0])?>" data-lightbox="example-set">&#xe641; 查看大图</a></div>
        <!-- lightbox js+css -->
        <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/lightbox.css">
        <script src="<?php echo $tag['path.skin']; ?>js/lightbox.js"></script>
		<script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-2196019-1']);
        _gaq.push(['_trackPageview']);
    
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        </script>
    </div>
    
    <div class="pro_in_r" style="display:none">
    	<div class="pro_in_r_t"><?php echo $data['title']; ?></div>    
        <div class="pro_in_r_m">
        	<div class="pro_in_r_m_l iconfont"><a href="###" id="arrLeft_01">&#xe620;</a></div>
       	  	<div class="pro_in_r_m_m" id="arrCont_01">
          	<ul>
               <?php 
				  for($i=0;$i<count($originalPic);$i++)
				  {
				?>
                <li><a href="<?php echo ispic($originalPic[$i])?>" data-lightbox="example-set"><img src="<?php echo ispic($originalPic[$i])?>" width="100%" /><span class="verticalAlign"></span></a></li>
                <?php
		    	}?>
            </ul>
          </div>
       	  	<div class="pro_in_r_m_r iconfont"><a href="###" id="arrRright_01">&#xe615;</a></div>
            <div class="clear"></div>
            
            <script language="javascript" src="js/common.js"></script>

			<script language="javascript" type="text/javascript">
				<!--//--><![CDATA[//><!--
				var focusScroll_01 = new ScrollPic();
				focusScroll_01.scrollContId	= "arrCont_01"; //内容容器ID
				focusScroll_01.arrLeftId	  = "arrLeft_01";//左箭头ID
				focusScroll_01.arrRightId	 = "arrRright_01"; //右箭头ID
				focusScroll_01.frameWidth	 = 332;//显示框宽度
				focusScroll_01.pageWidth	  = 352; //翻页宽度
				focusScroll_01.upright		= false; //垂直滚动
				focusScroll_01.speed		  = 20; //移动速度(单位毫秒，越小越快)
				focusScroll_01.space		  = 20; //每次移动像素(单位px，越大越快)
				focusScroll_01.autoPlay		= true; //自动播放
				focusScroll_01.autoPlayTime	= 5; //自动播放间隔时间(秒)
				focusScroll_01.initialize(); //初始化
				
				//--><!]]>
            </script>
        </div>	
        <div class="pro_in_r_b">
        	<!-- JiaThis Button BEGIN -->
            <div class="jiathis_style_32x32">
                <a class="jiathis_button_qzone"></a>
                <a class="jiathis_button_tsina"></a>
                <a class="jiathis_button_tqq"></a>
                <a class="jiathis_button_weixin"></a>
                <a class="jiathis_button_renren"></a>
                <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                <a class="jiathis_counter_style"></a>
            </div>
            <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
            <!-- JiaThis Button END -->
        </div>
    </div>
    
	<div class="clear"></div>
    
    <div class="pro_in_title">
    	<label class="iconfont">&#xe6cc;</label>
        <span>产品介绍</span>
        <em>Product details</em>
    </div>
    
    <div class="pro_in_details">
    	<?php echo $data['content']; ?>
    </div>
    
    <div class="pro_in_title">
    	<label class="iconfont">&#xea3a;</label>
        <span>产品推荐</span>
        <em>Recommend</em>
    </div>
    
    <div class="por_list_in">
    	<ul>
        <?php doc_product(125,8,0,0,0,0,true,false,'ordering',0)?>
        </ul>
    </div>
    
</div>
