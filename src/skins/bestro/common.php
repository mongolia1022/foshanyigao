<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $tag['seo.title']; ?></title>
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />

<!--JQ基础文件-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-1.9.1.min.js"></script>

<!--IE6 PNG透明-->
<!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->

<!--banner js-->
<script type="text/javascript">
function banner(){	
	var bn_id = 0;
	var bn_id2= 1;
	var speed33=5000;
	var qhjg = 1;
    var MyMar33;
	$("#banner .d1").hide();
	$("#banner .d1").eq(0).fadeIn("slow");
	if($("#banner .d1").length>1)
	{
		$("#banner_id li").eq(0).addClass("nuw");
		function Marquee33(){
			bn_id2 = bn_id+1;
			if(bn_id2>$("#banner .d1").length-1)
			{
				bn_id2 = 0;
			}
			$("#banner .d1").eq(bn_id).css("z-index","2");
			$("#banner .d1").eq(bn_id2).css("z-index","1");
			$("#banner .d1").eq(bn_id2).show();
			$("#banner .d1").eq(bn_id).fadeOut("slow");
			$("#banner_id li").removeClass("nuw");
			$("#banner_id li").eq(bn_id2).addClass("nuw");
			bn_id=bn_id2;
		};
	
		MyMar33=setInterval(Marquee33,speed33);
		
		$("#banner_id li").click(function(){
			var bn_id3 = $("#banner_id li").index(this);
			if(bn_id3!=bn_id&&qhjg==1)
			{
				qhjg = 0;
				$("#banner .d1").eq(bn_id).css("z-index","2");
				$("#banner .d1").eq(bn_id3).css("z-index","1");
				$("#banner .d1").eq(bn_id3).show();
				$("#banner .d1").eq(bn_id).fadeOut("slow",function(){qhjg = 1;});
				$("#banner_id li").removeClass("nuw");
				$("#banner_id li").eq(bn_id3).addClass("nuw");
				bn_id=bn_id3;
			}
		})
		$("#banner_id").hover(
			function(){
				clearInterval(MyMar33);
			}
			,
			function(){
				MyMar33=setInterval(Marquee33,speed33);
			}
		)	
	}
	else
	{
		$("#banner_id").hide();
	}
}
</script>
<script>
$(function(){
$('.nav_in ul li').mouseover(function(){
$(this).children('ul').stop(true,true).slideDown(200);	
})	
$('.nav_in ul li').mouseleave(function(){
$(this).children('ul').stop(true,true).slideUp(200);	
})	
})
</script>
<!--首页新闻 js-->
<link href="<?php echo $tag['path.skin']; ?>css/lrtk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/koala.min.1.5.js"></script>

</head>

<body style="background:#fff">
<!-- 头部 -->
<div class="top">
	<div class="top_bg">
    	<div class="top_in">
        	<div class="top_r">
            	<div class="top_r_t">
                	<div class="top_link1"><a href="<?php echo $tag['path.root']; ?>/"></a></div>
                    <div class="top_link2"><a href="<?php echo sys_href(2); ?>"></a></div>
                    <div class="top_link3"><a href="<?php echo sys_href(5); ?>"></a></div>
            	</div>
                <div class="top_r_b">
                <form action="<?php echo $tag['form.action.search']; ?>" method="post">
                	<input id="btn_search" type="image" src="<?php echo $tag['path.skin']; ?>images/btn_search.gif" />
                    <input id="txt_search" name="keyword" type="text"   value="What can I do for you?"  onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#6d6d6d'}" style="color:#6d6d6d">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 导航 -->
<div class="nav">
	<div class="nav_in">
    	<ul>
        	<li>
        		<a href="<?php echo $tag['path.root']; ?>/">Home</a>
            </li>
            <?php nav_main(1)?>
        </ul>
        <div class="nav_dot_l"></div>
        <div class="nav_dot_r"></div>
    </div>
</div>

<!-- banner -->
<div class="banner" id="banner" > 
    <?php doc_focus(sys_menu_info('id',true)+2,0,0)?>
  <div class="d2" id="banner_id">
    <ul>
      <?php doc_focus(sys_menu_info('id',true)+2,0,1)?>
    </ul>
  </div>
</div>
<script type="text/javascript">banner()</script> 

<!--内页-->
<div class="inct">
	<div class="banner_b"></div>
	<!-- 内页左 -->
    <div class="left">
    	<div class="left_in">
        	<div class="left_t">
            	<label>PRODUCTS</label><br>
            	<span>BESTRO</span>
            </div>
            <div class="left_list">
            	<ul>
                    <?php nav_sub(2,0,2);?>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="left_enter">
           	  <dl>
                	<dt>
                    	<img src="<?php echo $tag['path.skin']; ?>images/left_enter1.gif" width="49" height="52" />
                    </dt>
                    <dd class="enter1">Production</dd>
                    <dd class="enter2"><a href="<?php echo sys_href(2); ?>">PROUDCTS</a></dd>
                    <dd class="enter3">The lage market
share</dd>
                </dl>
              <dl style="border:none;">
                	<dt>
                    	<img src="<?php echo $tag['path.skin']; ?>images/left_enter2.gif" width="49" height="52" />
                    </dt>
                    <dd class="enter1">Contact us</dd>
                    <dd class="enter2"><a href="<?php echo sys_href(5); ?>">CONTACT</a></dd>
                    <dd class="enter3">Quality is the core 
value of us</dd>
                </dl>
            </div>
        </div>
    </div>
    
	<!-- 内页右 -->
    <div class="right">
   	  <div class="right_t">
        	<label><?php echo sys_menu_info('title')?></label>
       	  	<span>Home > <a href=""><?php echo sys_menu_info('title')?></a></span>
        </div>
        <div class="right_b">
        	<?php sys_parts() ?>
        </div>
    </div>
    <div class="clear"></div>
</div>



<!--版权-->
<div class="copyright">
	<div class="copyright_in">
    	<div class="copyright_l"><img src="<?php echo $tag['path.skin']; ?>images/logo_b.png" ></div>
        <div class="copyright_m">
        	<div class="copyright_m_t"><a href="<?php echo $tag['path.root']; ?>/">HOME</a><?php nav_main(2)?></div>
        	<div class="copyright_m_t">
            	<?php doc_article('9')?>
            </div>
        </div>
        <div class="copyright_r">
        	<ul>
            	<?php doc_focus('2',2,2)?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

</body>
</html>
