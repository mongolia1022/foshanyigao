<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $tag['seo.title']; ?></title>
    <meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
    <meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/animate.min.css" />

    <!--JQ基础文件-->
    <script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-3.3.1.min.js"></script>

    <!--IE6 PNG透明-->
    <!--[if lte IE 6]>
    <script src="<?php echo $tag['path.skin']; ?>js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
    <![endif]-->

    <!--wow.js-->
    <script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/wow.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        });
        wow.init();
    </script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>dist/css/swiper.min.css">

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

</head>

<body>

<!--头部-->
<div class="top clear">
    <div class="top_in">
        <div class="top_l">欢迎来到佛山市艺高语言艺术培训中心</div>
        <div class="top_r">
            <ul>
                <li>
                    <a href="tencent://message/?uin=63912980&&Menu=yes">
                        <dt><img src="<?php echo $tag['path.skin']; ?>images/top_qq.png" width="30" height="30" /></dt>
                        <dd>办公QQ</dd>
                    </a>
                </li>
                <li class="wx1">
                    <a href="###">
                        <dt><img src="<?php echo $tag['path.skin']; ?>images/top_wx.png" width="30" height="30" /></dt>
                        <dd>微信公众号</dd>
                        <div class="wx_qr1"><img src="<?php echo $tag['path.skin']; ?>images/wx_qr.jpg" /></div>
                    </a>
                </li>
                <script>
                    $(function(){
                        $('.wx1').mouseover(function(){
                            $('.wx_qr1').show();
                        });
                        $('.wx1').mouseleave(function(){
                            $('.wx_qr1').hide()
                        });
                    });
                </script>
            </ul>
        </div>
    </div>
</div>

<!--导航-->
<div class="nav_all">
    <div class="nav_in clear">
        <div class="logo"><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/logo.jpg"  /></a></div>
        <div class="nav_list">
            <ul>
                <li class="now"><a href="/">首页</a></li>
                <?php nav_main(0)?>
            </ul>
        </div>
    </div>
</div>

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php doc_focus('1',3,0,0,0,true,'id',0)?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    -->
</div>

<!-- Swiper JS -->
<script src="<?php echo $tag['path.skin']; ?>dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>

<!--创办宗旨-->
<?php doc_article('15',1,0,0,0,0,true,true,'id',0)?>

<!--顶级师资-->
<?php doc_article('16',1,0,0,0,0,true,true,'id',0)?>

<!--首页广告-->
<div class="idx_av wow fadeInUp"><?php doc_focus('5',1,2,0,0,true,'id',0)?></div>
<!--教育产品-->
<?php doc_article('17',1,0,0,0,0,true,true,'id',0)?>

<!--关于我们-->
<?php doc_article('18',1,0,0,0,0,true,true,'id',0)?>

<!--首页留言-->
<?php doc_article('19',1,0,0,0,0,true,true,'id',0)?>

<!--首页联系我们-->
<?php doc_article('13',1,0,0,0,0,true,true,'id',0)?>

</body>
</html>
