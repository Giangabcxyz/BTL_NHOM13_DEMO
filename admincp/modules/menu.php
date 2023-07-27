<?php 

     if(isset($_GET['query'])&& $_GET['query']=='dangxuat'){
         
          session_destroy();
          header('Location:login.php');
          exit();
     }

     
?>

<div class="col c-2 m-2 l-2">
     <div class="menu">
            <ul> 
                 <li><a href="index.php?action=dashboard&query=them"><i class="fa-solid fa-industry" style="color: #dbdbdb;"></i>Dashboard</a></li>
                 <li><a href="index.php?action=qlhsp&query=them"><i class="fa-solid fa-industry" style="color: #dbdbdb;"></i>Hãng Sản Xuất</a></li>
                 <li><a href="index.php?action=qltt&query=them"><i class="fa-solid fa-newspaper" style="color: #dbdbdb;"></i> tin tuc</a></li>
                 <li><a href="index.php?action=qltd&query=them"><i class="fa-solid fa-handshake" style="color: #dbdbdb;"></i>tuyen dung</a></li>
                 <li><a href="index.php?action=qllsp&query=them"><i class="fa-brands fa-product-hunt" style="color: #dbdbdb;"></i>san pham</a></li>
                 <li><a href="index.php?query=dangxuat"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #dbdbdb;"></i>Đăng xuất</a></li>

            </ul>
     </div>
</div>
