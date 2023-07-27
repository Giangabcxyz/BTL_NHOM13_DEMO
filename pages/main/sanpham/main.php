<?php 
               if(isset($_GET['xuly']) && $_GET['id'])
               {
                   $tam = $_GET['xuly'];
                   $id = $_GET['id'];
               }else{
                    $tam = '';
                    $id = '';
               }
        if($tam == 'timsp')
        {
              include("timsp.php");
        }else if($tam == 'ct')
        {
              include("chitiet.php");
        }else if($tam == 'ltg')
        {
              include("chitiet.php");
        }else if($tam == 'td')
        {
              include("loc.php");
        }
        else if($tam == 'gd')
        {
              include("locgiam.php");
        }else if($tam == 'tt')
        {
              include("sxten.php");
        }else if($tam == 'tg')
        {
              include("tengiam.php");
        }else if($tam=='timkiem'){
               include("timkiem.php");
        }else{
            include("lietke.php");
        }
?>