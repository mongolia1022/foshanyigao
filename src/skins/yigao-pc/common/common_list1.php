<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $tag['seo.title']; ?></title>
<meta name="viewport" content="width=1200, user-scalable=no, target-densitydpi=device-dpi">
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>dist/css/swiper.min.css">


<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>iconfont/iconfont.css" />

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
    	<div class="logo"><img src="<?php echo $tag['path.skin']; ?>images/logo.png" /></div>
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
                	<li><a href="<?php echo $tag['path.root']; ?>/">首页</a></li>
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

<!-- 内页 -->
<?php sys_parts() ?>

<!-- 底部 -->
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
            
            <div class="foot_b_r"><a href="<?php echo $tag['path.root']; ?>/">首页</a><?php nav_main(1)?></div>
      </div>
    </div>
</div>

</body>
</html>
