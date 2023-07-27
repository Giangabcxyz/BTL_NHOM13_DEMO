<?php 
    include "../../admincp/config/config.php";
    if(isset($_GET['yeucau'])&& $_GET['yeucau']=='xacnhan')
    {
         unset($_SESSION['cart']);
         header('Location: ../../index.php');
         exit();
    }
     $id =$_GET['id'];
     $id_kh = $id;
     $tenkh = $_POST['kh_ten'];
     $dc = $_POST['kh_diachi'];
     $sdt = $_POST['kh_dienthoai'];
     $email = $_POST['kh_email'];
     $cmt = $_POST['kh_cmnd'];
     $date = $_POST['ngay_dat'];
     if(isset($_POST['btnDatHang']))
     {
          $sql = "INSERT INTO dathang (id_khachhang,tenkh,diachi,sdt,email,cmnd,ngaydat) VALUES 
          ('".$id_kh."','".$tenkh."','".$dc."','".$sdt."','".$email."','".$cmt."','".$date."')"; 
          $ressult = mysqli_query($conn,$sql);
                
     }
     $sql_n = "SELECT * FROM dathang WHERE id_khachhang = '".$id."' LIMIT 1 ";     
     $kq = mysqli_query($conn,$sql_n);
     $row = mysqli_fetch_array($kq);

    

    
     if(isset($_SESSION['cart']))
     {
         $sl=0;
         $tongtien =0;
        foreach($_SESSION['cart'] as $cart_item)
        {
            $sl+= $cart_item['soluong'];
            $thanhtien = $cart_item['soluong']*(float)$cart_item['giaban'];
            $tongtien+= $thanhtien;
        }

     
?>
<h1>đây là chi tiết đơn hàng </h1>
<div class="cthd">
       <div style="display:flex">
            <p>Họ và tên</p>
            <p><?php echo $row['tenkh'] ?></p>

      </div>
      <div style="display:flex">
            <p>Số lượng sản phẩm </p>
            <p><?php echo $sl; ?></p>

      </div>
      <div style="display:flex">
            <p>Tổng tiền hàng </p>
            <p><?php  echo number_format( $tongtien,0,',','.').'VND'; ?></p>
            
      </div>
      <div style="display:flex">
            <p>Giảm Giá </p>
            <p><?php  $gdbd = rand(10000,50000);
                  $gd = ceil($gdbd);
             echo number_format( $gd,0,',','.').'VND'; ?></p>
            
      </div>
      <div style="display:flex">
            <p>Vận chuyển</p>
            <p><?php  $vcbd =  rand(10000,30000);
                 $vc = ceil($vcbd);
             echo number_format($vc,0,',','.').'VND'; ?></p>
            
      </div>
      <div style="display:flex">
            <p>Tổng Giá trị đơn hàng</p>
            <p><?php  $tt = 0;
                      $tt = $tongtien + $gd - $vc;
            echo number_format( $tt,0,',','.').'VND'; ?></p>
            
      </div>
      <div> <a href="chitiethd.php?yeucau=xacnhan">Xác nhận</a> </div>
</div>
<?php 
      $sql_add = "INSERT INTO hoadon (id_khachhang,tenkh,tongtien) VALUES ('".$id_kh."','".$row['tenkh']."','".$tongtien."')";
      $push = mysqli_query($conn,$sql_add);
     }
?>