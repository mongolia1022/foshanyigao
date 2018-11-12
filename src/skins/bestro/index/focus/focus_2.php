<?php
/*底部二维码*/
		foreach($flash['results'] as $data)
		{
	   ?>
<li><img src="<?php echo $data['picpath'];?>" width="110" height="110"><span><?php echo $data['title'];?></span></li>
		  <?php 
		}
		?>