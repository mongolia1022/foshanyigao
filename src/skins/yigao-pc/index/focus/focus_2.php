<?php
/*底部二维码*/
		foreach($flash['results'] as $data)
		{
	   ?>
		 <img src="<?php echo $data['picpath'];?>" width="70" height="70" />
		  <?php 
		}
		?>