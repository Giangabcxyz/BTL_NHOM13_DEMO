<?php 
      if(isset($_GET['action']) && $_GET['action']=='dx')
      {                     
          session_destroy();
          header('Location:../admincp/login.php');
          exit();
      }
?>
<div class="col c-12 l-12 m-12 header group">
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header" style="position: relative; left: 162px; top: 1px;">
                <form class="input-search" method="POST" action="index.php?xuly=timkiem&id=<?php echo rand(1,100)?>">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit" name="timkiem">
                            <i class="fa fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </form> <!-- End Form search -->
                <div class="tags">
                    <strong>Từ khóa: </strong>
                </div>
            </div> <!-- End Search header -->

            <div class="tools-member">
                <div class="member">
                    <a class="tkh" style="position: relative; ">
                       <i class="fa fa-user"></i>
                        <?php echo  $_SESSION['name'] ?>
                    </a>
                    <div class="menuMember">
                        <a href="../index.php">Trang người dùng</a>
                        <a href="index.php?action=dx">Đăng xuất</a>
                    </div>

                </div> <!-- End Member -->

                <div class="cart">
                    <a href="index.php?page=themgh">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!--<div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div> -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div> <!-- End Header -->
