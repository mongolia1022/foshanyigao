<?php
/*底部二维码*/
		foreach($flash['results'] as $data)
		{
	   ?>
		 <img src="<?php echo $data['picpath'];?>"/>
		  <?php 
		}
		?>