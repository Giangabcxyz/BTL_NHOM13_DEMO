<?php
      include('../../config/config.php');
      $tencv = $_POST['tencv'];
      $mota = $_POST['mota'];
      $thoigian = $_POST['thoigian'];
      $diadiem = $_POST['diadiem'];
      $yeucau = $_POST['yeucau'];
      $quyenloi = $_POST['quyenloi'];
     
      if(isset($_POST['themcv']) )
      {
          $sql_them = "INSERT INTO tuyendung (tencv,mota,thoigian,diadiem,yeucau,quyenloi)
           VALUES ('".$tencv."', '".$mota."', '".$thoigian."','".$diadiem."','".$yeucau."','".$quyenloi."') ";
          mysqli_query($conn, $sql_them);
          header('Location:../../index.php?action=qltd&query=them');
      }else if(isset($_POST['suacv']) ){
          $sql_sua = "UPDATE tuyendung SET tencv='".$thoigian."' , mota='".$mota."',
          thoigian='".$thoigian."',diadiem='".$diadiem."',yeucau='".$yeucau."',
          quyenloi='".$quyenloi."' WHERE id_tuyendung  = '$_GET[idtd]'";
          mysqli_query($conn,$sql_sua);
          header('Location:../../index.php?action=qltd&query=them');
      }else{
          $id = $_GET['idtd'];
          $sql_xoa = "DELETE FROM tuyendung WHERE id_tuyendung = '$id'";
          $sqli =  mysqli_query($conn, $sql_xoa);
          header('Location:../../index.php?action=qltd&query=them');
      }
?>