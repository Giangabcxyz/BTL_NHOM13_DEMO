<div class="col c-10 m-10 l-10">
    <div class="main">
        
        <?php
             if(isset($_GET['action']) && isset($_GET['query']))
              {
                  $tam = $_GET['action'];
                  $query= $_GET['query'];
              }else{
                 $tam = '';
                 $query='';
              }
    
            if($tam == 'qlhsp' && $query =='them')
            {
                include("quanlyhangsanpham/them.php");
                include("quanlyhangsanpham/lietke.php");
            }else if($tam=='qlhsp' && $query =='sua'){
                 include("quanlyhangsanpham/sua.php");
            }else if($tam=='qllsp' && $query =='them'){
                include("quanlysanpham/them.php");
                include("quanlysanpham/lietke.php");
            }else if($tam=='qllsp' && $query =='sua'){
                include("quanlysanpham/sua.php");
           }else if($tam=='qltt' && $query =='them'){
                  include("quanlytintuc/them.php");
                  include("quanlytintuc/lietke.php");
           }else if($tam=='qltt' && $query =='sua'){
                   include("quanlytintuc/sua.php");
           }else if($tam=='qltd' && $query =='them'){
                  include("quanlytuyendung/them.php");
                  include("quanlytuyendung/lietke.php");
           }else if($tam=='qltd' && $query =='sua'){
                   include("quanlytuyendung/sua.php");
           }else if($tam=='dashboard' && $query =='them'){
                      include("dashboard.php");
            } else{
                    include("dashboard.php");
            }
        ?>
    </div>
</div>
