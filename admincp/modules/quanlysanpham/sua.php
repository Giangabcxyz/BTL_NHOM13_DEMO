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
     
       $sql_get_data = "SELECT * FROM sanpham WHERE  id_sanpham = '$_GET[idsp]' LIMIT 1";
       $sql = mysqli_query($conn, $sql_get_data);

       while ($row = mysqli_fetch_array($sql)){

?>
<table style="width : 100% ; border:1px solid black">
  <form  action="modules/quanlysanpham/xuly.php?idsp=<?php echo $_GET['idsp'] ?>" method="POST" enctype="multipart/form-data">
     <tr>
         <td>tên sản phẩm:</td>
         <td><input type="text" value="<?php echo $row['tensp']?>"  name="sanpham"></td>
     </tr>
     <tr>
          <td>tên hãng sản xuất :</td>
          <td>
                
                <select name="hsx">
                    <?php
                        $sql_get = "SELECT * FROM hangsx ";
                        $sql = mysqli_query($conn, $sql_get);

                        while ($rows = mysqli_fetch_array($sql)) {
                             if($row['id_hangsx'] == $rows['id_hangsx']) {
                            
                    ?>
                       <option selected value="<?php echo $rows['id_hangsx'] ?>"><?php  echo $rows['tenhang']  ?></option>
                     <?php 
                         }else{  
                     ?>
                         <option value="<?php echo $rows['id_hangsx'] ?>"><?php  echo $rows['tenhang']  ?></option>

                         <?php 
                         }
                        }
                    ?>
                </select>
                
          </td>
     </tr>
     <tr>
           <td>Hình ảnh</td>
           <td><input type="file"  name="hinhanh" >
                <img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" alt="Girl in a jacket" width="80" height="140">
        </td>
     </tr>
     <tr>
           <td>Giá bán</td>
           <td><input type="text" value="<?php echo $row['giaban'] ?>" name="giaban" ></td>
     </tr>
     <tr>
           <td>Số Lượng</td>
           <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" ></td>
     </tr>
     <tr>
           <td>Khuyến mãi</td>
           <td><input type="text" value="<?php echo $row['khuyenmai'] ?>" name="khuyenmai" ></td>
     </tr>
     <tr>
           <td>Thông số</td>
           <td><textarea name="thongso"   cols="30" rows="10"><?php echo $row['thongso'] ?></textarea></td>
     </tr>
     <tr>
         <td colspan="2"><input type="submit" name="suasp" value="Sửa"></td>
     </tr>
     <?php 
       }
    ?>
    </form>
</table>