<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php echo $tag['seo.title']; ?></title>
    <meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
    <meta name="description" content="<?php echo $tag['seo.description'];  ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>iconfont/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/animate.min.css" />

    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>lib/weui.min.css">
    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/jquery-weui.css">

    <!--JQ基础文件-->
    <script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-1.9.1.min.js"></script>

    <!--IE6 PNG透明-->
    <!--[if lte IE 6]>
    <script src="<?php echo $tag['path.skin']; ?>js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
    <![endif]-->

</head>

<body>
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


<?php sys_parts($data['id']==11?1:0) ?>


<script src="<?php echo $tag['path.skin']; ?>lib/jquery-2.1.4.js"></script>
<script src="<?php echo $tag['path.skin']; ?>lib/fastclick.js"></script>
<script>
    $(function() {
        FastClick.attach(document.body);
    });
</script>
<script src="<?php echo $tag['path.skin']; ?>js/jquery-weui.js"></script>

</body>
</html>
