<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>门窗铝型材厂家|佛山门窗铝型材-佛山市金桃铝业有限公司</title>
<meta name="viewport" content="width=1200, user-scalable=no, target-densitydpi=device-dpi">
<meta name="keywords" content="佛山市金桃铝业有限公司" />
<meta name="description" content="佛山市金桃铝业有限公司是生产铝合金门窗型材,门窗铝型材,工业型材,装饰铝型材,门窗铝型材厂家,公司技术力量雄厚,为用户提供优质的产品和完善的服务" />
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>dist/css/swiper.min.css">


<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>iconfont/iconfont.css" />
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!--JQ基础文件-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-1.9.1.min.js"></script>

<!--IE6 PNG透明-->
<!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->

<!--TAB JS-->
<script type="text/javascript"> 
function setTab(m,n){ 
var menu=document.getElementById("tab"+m).getElementsByTagName("li");  
var div=document.getElementById("tablist"+m).getElementsByTagName("div"); 
var showdiv=[]; 
	for (i=0; j=div[i]; i++)
	{  
		if((" "+div[i].className+" ").indexOf(" tablist ")!=-1)
		{  
			showdiv.push(div[i]); 
		} 
	}  
	for(i=0;i<menu.length;i++)
	{  
		menu[i].className=i==n?"now":"";  
		showdiv[i].style.display=i==n?"block":"none"; 
	}  
}  
</script>
<script>
	$(function(){
		$('li a').mouseover(function(){
			$(this).next('span').children('a').css('background','url(<?php echo $tag['path.skin']; ?>images/dot_pro.png)  260px 6px no-repeat #db0d0d')});
			$('li a').mouseover(function(){
			$(this).next('span').children('a').css('color','#fff')});
			$('li a').mouseleave(function(){
			$(this).next('span').children('a').css('background','#fff')});
			$('li a').mouseleave(function(){
			$(this).next('span').children('a').css('color','#484848')});
			
	});
</script>
</head>

<body>
<!-- 头部 -->
<div class="top">
	<div class="top_in">
    	<div class="logo"><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/logo.png" border="0"/></a></div>
<div class="logo_r">
        	<div class="search">
                <form action="<?php echo $tag['form.action.search']; ?>" method="post">
                <div class="search_r"><input type="image" src="<?php echo $tag['path.skin']; ?>images/search_r.png" ></div>
                <div class="search_l"><input name="keyword" id="txt_search" type="text"   value="Search..."  onFocus="if(value==defaultValue){value='';this.style.color='#484848'}" onBlur="if(!value){value=defaultValue;this.style.color='#d4d4d4'}" style="color:#d4d4d4"></div>
                </form>
                <div class="clear"></div>
            </div>
            <div class="nav">
            	<ul>
                	<li><a href="http://www.fsjintao.com/" title="首页" class="now">首页</a></li>
                    <?php nav_main()?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Swiper -->
<div class="swiper-container swiper1">
    <div class="swiper-wrapper">
        <?php doc_focus('4',3,0,0,0,true,'id',0)?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
    
</div>
<!-- Swiper JS -->
<script src="<?php echo $tag['path.skin']; ?>dist/js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
var swiper1 = new Swiper('.swiper1', {
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	paginationClickable: true,
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: 2500,
	autoplayDisableOnInteraction: false,
	effect: 'fade'
});

</script>

<!-- 首页标题 -->
<div class="idx_title">
	<span>产品展示</span>
    <label>PRODUCTS SHOW</label>
</div>

<!-- 产品 -->
<div class="idx_hot">
	<div class="idx_tab_t" id="tab1">
        <ul>
            <?php nav_sub(3,0,2);?>
        </ul>
    </div>

	<div id="tablist1">
        <?php nav_sub(3,1,2);?>
    </div>
</div>

<!-- 工程案例 -->
<div class="project_title"></div>
<div class="bg_gray">
	<div class="idx_project">
    	<ul>
            <?php doc_product(5,8,0,0,0,0,true,false,'ordering',0)?>
            <div class="clear"></div>
        </ul>
    </div>
</div>

<!-- 关于我们 -->
<div class="idx_title">
	<span>关于我们</span>
    <label>about us</label>
</div>
<div class="idx_abut">
	<div class="idx_abut_l"><?php doc_focus('2',3,1,0,0,true,'id',0)?></div>
	<div class="idx_abut_r">
    	<div class="idx_abut_r_t_l"><img src="<?php echo $tag['path.skin']; ?>images/idx_about_t_l.gif" /></div>
    	<div class="idx_abut_r_t_r"><img src="<?php echo $tag['path.skin']; ?>images/idx_about_t_r.gif" /></div>
        <?php doc_article('22',0,0,0,0,0,true,true,'id',0)?></div>
    </div>
    <div class="idx_abut_more"><a href="<?php echo sys_href(1); ?>"><img src="<?php echo $tag['path.skin']; ?>images/more.png" /></a></div>
    <div class="clear"></div>
</div>

<!-- 广告 -->
<div class="idx_av1"></div>
<div class="idx_av2">
	<div class="idx_av_in">
    	<div class="idx_av2_more1"><a href="<?php echo sys_href(1); ?>"></a></div>
    	<div class="idx_av2_more2"><a href="<?php echo sys_href(1); ?>"></a></div>
    </div>
</div>
<div class="idx_av3">
	<div class="idx_av_in">
		<div class="idx_av3_more"><a href="<?php echo sys_href(1); ?>"></a></div>
    </div>
</div>

<!-- 首页新闻+FAQ -->
<div class="news_fqa">

	<!-- 新闻 -->
  	<div class="idx_news">
    	<div class="idx_title2"><a href="<?php echo sys_href(2); ?>"><img src="<?php echo $tag['path.skin']; ?>images/idx_news_title.gif" /></a></div>
        <div class="idx_news_l">
        <?php doc_list('2',1,1,0,0,0,true,false,'dtTime',0)?>
        </div>
    	<div class="idx_news_r">
        	<ul>
                <?php doc_list('2',3,2,0,0,0,true,false,'dtTime',2)?>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <!-- FAQ -->
  	<div class="idx_faq">
    	<div class="idx_title2"><a href="<?php echo sys_href(23); ?>"><img src="<?php echo $tag['path.skin']; ?>images/idx_faq_title.gif" /></a></div>
        <div class="idx_faq_all">
            <?php doc_list(23,3) ?>
        </div>
    </div>
  
  
	<div class="clear"></div>
  
</div><br><div class="addcontent">主营：<a href="http://www.fsjintao.com/" title="佛山门窗铝型材">佛山门窗铝型材</a> - <a href="http://www.fsjintao.com/" title="门窗铝型材厂家">门窗铝型材厂家</a></div>
<div class="foot">
	<div class="foot_t">
    	<div class="foot_t_in">
        	<div class="foot_t_in_l">理念</div>
        	<div class="foot_t_in_r"><?php doc_article('24',0,0,0,0,0,true,true,'id',0)?></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="foot_m">
    	<div class="foot_m_in">
        	<div class="foot_m_qr">
            	<?php doc_focus('3',1,2,0,0,true,'id',0)?>
                <span>金桃公众号</span>
            </div>
            <div class="foot_m_ct">
            	<?php doc_article('25',0,0,0,0,0,true,true,'id',0)?>
            </div>
          <div class="foot_m_r">
              <form action="<?php echo $tag['form.action.search']; ?>" method="post">
                <div class="foot_phone iconfont">&#xe64d; 服务热线:<?php doc_article('27',0,0,0,0,0,true,true,'id',0)?></div>
                <div class="foot_search_r"><input type="submit" value="搜索"></div>
                <div class="foot_search_l"><input name="keyword" id="txt_search" type="text"   value="Search..."  onFocus="if(value==defaultValue){value='';this.style.color='#d4d4d4'}" onBlur="if(!value){value=defaultValue;this.style.color='#3d425c'}" style="color:#3d425c"></div>
                <div class="foot_qw iconfont"><a href="tencent://message/?uin=245964942&Site=&menu=yes">&#xe63a;</a></div>
                </form>
          </div>
        </div>
    </div>
    <div class="foot_b">
   	  <div class="foot_b_in">
        <div class="foot_b_l">
                <?php doc_article('26',0,0,0,0,0,true,true,'id',0)?>
            </div>
            
            <div class="foot_b_r">
              <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1263789022'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/stat.php%3Fid%3D1263789022%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
      </div>
    </div>
</div>
</body>
</html>
