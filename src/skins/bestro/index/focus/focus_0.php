<?php
//页头轮播
		foreach($flash['results'] as $data)
		{
	   ?>
		 <a href="<?php echo $data['url'];?>" class="d1" style="background:url(<?php echo $data['picpath'];?>) center no-repeat;"></a> 
		  <?php 
		}
		?>