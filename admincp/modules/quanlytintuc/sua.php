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
     
       $sql_get_data = "SELECT * FROM tintuc WHERE  id_tintuc = '$_GET[idtt]' LIMIT 1";
       $sql = mysqli_query($conn, $sql_get_data);

       while ($row = mysqli_fetch_array($sql)){

?>
<table style="width : 100% ; border:1px solid black">
  <form  action="modules/quanlytintuc/xuly.php?idtt=<?php echo $_GET['idtt'] ?>" method="POST" enctype="multipart/form-data">
     <tr>
         <td>Tiêu đề </td>
         <td><input type="text" value="<?php echo $row['tieude']?>"  name="tieude"></td>
     </tr>
     <tr>
           <td>Hình ảnh</td>
           <td><input type="file"  name="hinhanh" >
                <img src="modules/quanlytintuc/uploads/<?php echo $row['hinhanh']?>" alt="Girl in a jacket" width="80" height="140">
        </td>
     </tr>
     <tr>
           <td>Nội dung</td>
           <td><textarea name="noidung"  cols="30" rows="10" resize="none"><?php echo $row['noidung'] ?></textarea></td>
     </tr>
     <tr>
           <td>Tác Giả</td>
           <td><input type="text" value="<?php echo $row['tacgia'] ?>" name="tgia" ></td>
     </tr>
     <tr>
           <td>Thời gian</td>
           <td><input name="tgian" value="<?php echo $row['tgian'] ?>"   cols="30" rows="10"></input></td>
     </tr>
     <tr>
         <td colspan="2"><input type="submit" name="suatt" value="Sửa"></td>
     </tr>
     <?php 
       }
    ?>
    </form>
</table>