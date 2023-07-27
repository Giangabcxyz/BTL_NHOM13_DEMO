<style>
       table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
       }
       input[type="submit"]{
           margin-top: 20px;
        text-align: center;
        padding: 8px 48px;
        outline: none;
        cursor: pointer;
        transition: 0.4s;
        border: none;
        border-radius: 6px;
       }
       input[type="submit"]:hover{
    color: white;
    background-color: #45aaf2;
}
</style>
<?php
     
       $sql_get_data = "SELECT * FROM tuyendung WHERE  id_tuyendung = '$_GET[idtd]' LIMIT 1";
       $sql = mysqli_query($conn, $sql_get_data);

       while ($row = mysqli_fetch_array($sql)){

?>
<table style="width : 100% ; border:1px solid black">
  <form  action="modules/quanlytuyendung/xuly.php?idtd=<?php echo $_GET['idtd'] ?>" method="POST" enctype="multipart/form-data">
     <tr>
         <td>Tên công việc </td>
         <td><input type="text" value="<?php echo $row['tencv']?>"  name="tencv"></td>
     </tr>
     <tr>
           <td>Mô tả</td>
           <td><textarea name="mota" rows="10" cols="50" resize="none"><?php echo $row['mota']?></textarea></td>
     </tr>
     <tr>
           <td>Thời Gian</td>
           <td><textarea name="thoigian"  cols="30" rows="10" resize="none"><?php echo $row['thoigian'] ?></textarea></td>
     </tr>
     <tr>
           <td>Địa Điểm</td>
           <td><textarea name="diadiem"  cols="30" rows="10" resize="none"><?php echo $row['diadiem'] ?></textarea></td>
     </tr>
     <tr>
           <td>Yêu Cầu</td>
           <td><textarea name="yeucau"  cols="30" rows="10" resize="none"><?php echo $row['yeucau'] ?></textarea></td>
     </tr>
     <tr>
           <td>Quyền lợi</td>
           <td><textarea name="quyenloi"  cols="30" rows="10" resize="none"><?php echo $row['quyenloi'] ?></textarea></td>
     </tr>
     <tr>
         <td colspan="2"><input type="submit" name="suacv" value="Sửa"></td>
     </tr>
     <?php 
       }
    ?>
    </form>
</table>