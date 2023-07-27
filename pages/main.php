

<div class="main">
	<?php
	   
	    if(isset($_GET['page']))
		{
			  $tam = $_GET['page'];
		}else{
			$tam ='';
		}
	    if($tam == 'tintuc')
		{
			include("main/tintuc.php");
		}else if($tam == 'tuyendung')
		{
			 include("main/tuyendung.php");
		}else if($tam == 'gioithieu')
		{
			 include("main/gioithieu.php");
		}else if($tam == 'baohanh')
		{
			 include("main/baohanh.php");
		}else if($tam == 'lienhe')
		{
			 include("main/lienhe.php");
		}else if($tam == 'themgh')
		{
			
			include("main/thongkegh.php");
		}else if($tam == 'tkgh')
		{
			 include("main/thongkegh.php");
		}else if($tam == 'thanhtoan')
		{
			 include("main/thanhtoan.php");
		}else{
			include("main/banner.php");
			include("main/index.php");
		}
	?>
</div>
					