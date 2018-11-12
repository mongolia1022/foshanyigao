<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title><?php echo $tag['seo.title']; ?></title>
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<link href="<?php echo $tag['path.skin']; ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $tag['path.skin']; ?>css/css.css" rel="stylesheet" type="text/css">

<!--IE6 PNG透明-->
<!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a, span');
    </script>
<![endif]-->


<!--JQ基础文件-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-1.3.1.js"></script>

<!--图片显示JS-->
<script type="text/javascript">
$(function(){
    $(".index_pic").mouseover(function(){
	     $(this).children(".index_pic_in").stop().animate({top: "0px" }, 300 );
		 $(this).children(".index_txt").stop().animate({height: "200px" }, 300 );
	})
	$(".index_pic").mouseout(function(){
	     $(this).children(".index_pic_in").stop().animate({top: "-600px" }, 300 );
		 $(this).children(".index_txt").stop().animate({height: "100px" }, 300 );
	})
})
</script>
</head>

<body class="city_bg">
<div class="nav_idx">
  <div class="logo"><a href="<?php echo $tag['path.root']; ?>/"><img src="<?php echo $tag['path.skin']; ?>images/logo.png" width="270" height="39"></a></div>
</div>
<div id="Javascript.Div1" class="div" style="top: -145.5px; left: 174.5px;">
    <?php nav_main()?>
  <div class="clear"></div>
  <div class="link" style="display:none">
  	<div class="link_l"></div>
    <ul>
        <?php doc_linkers('6',0,0,0,0,0,true,'id',0)?>
    </ul>
  </div>
  <div class="link2">
    <?php doc_article('8',0,0,0,0,0,true,true,'id',0)?>
  </div>
</div>
<script language="JavaScript">
function sc1(){
 document.getElementById("Javascript.Div1").style.top=(document.documentElement.scrollTop+(document.documentElement.clientHeight-document.getElementById("Javascript.Div1").offsetHeight)/2)+"px";
 document.getElementById("Javascript.Div1").style.left=(document.documentElement.scrollLeft+(document.documentElement.clientWidth-document.getElementById("Javascript.Div1").offsetWidth)/2)+"px";
}
</script> 
<script language="JavaScript">
<!--
function scall(){
 sc1();
}
window.onscroll=scall;
window.onresize=scall;
window.onload=scall;
//-->
</script>
</body>
</html>