<?php
      include('../../config/config.php');
      $tieude = $_POST['tieude'];
      $hinhanh = $_FILES['hinhanh']['name'];
      $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
      $hinhanh = time().'_'.$hinhanh;
      $noidung = $_POST['noidung'];
      $tacgia = $_POST['tgia'];
      $tgian = $_POST['tgian'];

      if(isset($_POST['themtt']))
      {
            $sql_add_data = "INSERT INTO tintuc(tieude,hinhanh,noidung,tacgia,tgian) VALUES ('".$tieude."', '".$hinhanh."', '".$noidung."',
            '".$tacgia."','".$tgian."') ";
            $sql = mysqli_query($conn,$sql_add_data);
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
            header('Location:../../index.php?action=qltt&query=them');
      }else if(isset($_POST['suatt']))
      {
            if($hinhanh !='')
            {
                move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
                $sql = "SELECT* FROM tintuc WHERE id_tintuc = '$_GET[idtt]' LIMIT 1";
                $query = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($query))
                {
                    unlink('uploads/'.$row['hinhanh']);
                }
                $sql_sua = "UPDATE tintuc SET tieude='".$tieude."',hinhanh ='".$hinhanh."',
                 noidung='".$noidung."',tacgia='".$tacgia."', tgian='".$tgian."'  WHERE id_tintuc  = '$_GET[idtt]'";
              
            }else{
                  $sql_sua = "UPDATE tintuc SET tieude='".$tieude."',
                  noidung='".$noidung."',tacgia='".$tacgia."', tgian='".$tgian."'  WHERE id_tintuc  = '$_GET[idtt]'";
            }
            mysqli_query($conn,$sql_sua);
            header('Location:../../index.php?action=qltt&query=them');
      }else{
            $id = $_GET['idtt'];
            $sql = "SELECT* FROM tintuc WHERE id_tintuc = '$id' LIMIT 1";
            $query = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($query))
            {
                unlink('uploads/'.$row['hinhanh']);
            }
            $sql_xoa = "DELETE FROM tintuc WHERE id_tintuc= '$id' ";
            $sqli =  mysqli_query($conn, $sql_xoa);
            header('Location:../../index.php?action=qltt&query=them');
      }
?>