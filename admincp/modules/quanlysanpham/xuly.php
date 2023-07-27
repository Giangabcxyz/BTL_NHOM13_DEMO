<?php
      include('../../config/config.php');
      

      $tensp = $_POST['sanpham'];
      $hangsx = $_POST['hsx'];
      $hinhanh = $_FILES['hinhanh']['name'];
      $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
      $hinhanh = time().'_'.$hinhanh;
      $giaban = $_POST['giaban'];
      $khuyenmai = $_POST['khuyenmai'];
      $thongso = $_POST['thongso'];
      $soluong = $_POST['soluong'];
      if(isset($_POST['themsp']) )
      {
         
          $sql_them = "INSERT INTO sanpham (tensp,id_hangsx,hinhanh,giaban,soluong,khuyenmai,thongso)
           VALUES ('".$tensp."','".$hangsx."','".$hinhanh."', '".$giaban."','".$soluong."','".$khuyenmai."','".$thongso."')";
          mysqli_query($conn, $sql_them);
          move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
          header('Location:../../index.php?action=qllsp&query=them');
      }else if(isset($_POST['suasp']) ){
          if($hinhanh !='')
          {
              move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
              $sql = "SELECT* FROM sanpham WHERE id_sanpham = '$_GET[idsp]' LIMIT 1";
              $query = mysqli_query($conn,$sql);
              while ($row = mysqli_fetch_array($query))
              {
                  unlink('uploads/'.$row['hinhanh']);
              }
              $sql_sua = "UPDATE sanpham SET tensp='".$tensp."', id_hangsx='".$hangsx."',hinhanh ='".$hinhanh."',
               giaban='".$giaban."',soluong='".$soluong."',khuyenmai='".$khuyenmai."', thongso='".$thongso."'  WHERE id_sanpham  = '$_GET[idsp]'";
            
          }else{
             $sql_sua = "UPDATE sanpham SET tensp='".$tensp."', id_hangsx='".$hangsx."',
            giaban='".$giaban."',soluong='".$soluong."',khuyenmai='".$khuyenmai."', thongso='".$thongso."'  WHERE id_sanpham  = '$_GET[idsp]'";
          }
          mysqli_query($conn,$sql_sua);
          header('Location:../../index.php?action=qllsp&query=them');
      }else{
          $id = $_GET['idsp'];
          $sql = "SELECT* FROM sanpham WHERE id_sanpham = '$id' LIMIT 1";
          $query = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_array($query))
          {
              unlink('uploads/'.$row['hinhanh']);
          }
          $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham = '$id' ";
          $sqli =  mysqli_query($conn, $sql_xoa);
          header('Location:../../index.php?action=qllsp&query=them');
      }
?>