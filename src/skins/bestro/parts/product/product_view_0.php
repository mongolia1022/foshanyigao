<!--产品详细页 js-->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>styles/detail.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>styles/thickbox.css" type="text/css" />
<script src="<?php echo $tag['path.skin']; ?>scripts/jquery.jqzoom.js" type="text/javascript"></script>
<script src="<?php echo $tag['path.skin']; ?>scripts/use_jqzoom.js" type="text/javascript"></script>
<script src="<?php echo $tag['path.skin']; ?>scripts/jquery.livequery.js" type="text/javascript"></script>
<script src="<?php echo $tag['path.skin']; ?>scripts/switchImg.js" type="text/javascript"></script>

<!--产品详细页TAB js-->
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
<?php 
$data=$tag['data.row'];
?>
<div class="inside_r">
    <!--产品图片-->
    <div class="pro_detail_left">
        <?php
			$originalPic = explode('|',$data['originalPic']);
			$middlePic   = explode('|',$data['middlePic']);
			$smallPic    = explode('|',$data['smallPic']);
			?>
        <div class="jqzoom"><img src="<?php echo ispic($middlePic[0])?>" class="fs" style="float:left;" alt="" jqimg="<?php echo ispic($originalPic[0])?>" id="bigImg" /></div>
        <span>
        </span>
        <ul class="imgList">
            <?php 
				  for($i=0;$i<count($originalPic);$i++)
				  {
				?>
				<li><img src="<?php echo ispic($originalPic[$i])?>" alt="" smallpic="<?php echo ispic($middlePic[$i])?>" /></li>
                <?php
		    	}?>
        </ul>
    </div>
    <!--产品文字-->
    <div class="pro_font">
        <div class="pro_font1"><?php echo $data['title']; ?></div>
        <div class="pro_font2"></div>
        <div class="pro_font3">Introduction</div>
        <div class="pro_font4">
            <?php echo $data['description']; ?>
        </div>
    </div>
    <div class="clear"></div>
    <!--产品详细+产品推荐-->
    <div class="pro_tab">
        <div class="pro_tab_t" id="tab3">
            <ul>
                <li onclick="setTab(3,0)" class="now">Details</li>
                <li onclick="setTab(3,1)">nominate</li>
            </ul>
        </div>
        <div class="pro_tab_b" id="tablist3">
            <div class="tablist block"><?php echo $data['content']; ?></div>
            <div class="tablist">
                <div class="pj_pic2">
                    <ul>
                        <?php sys_about(20,0,10,0,0) ?>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>