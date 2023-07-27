
<style>
      table,th,td,tr{
            border: 1px solid black;
            border-collapse : collapse;
      }
      h3{
            color: white;
      }
      tr:hover {background-color:  #2d98da;}
      a{
      text-decoration: none;
  color:rgba(241,253,253,0.8);
}

</style>
<?php
      $sql_lk = "SELECT * FROM sanpham, hangsx WHERE sanpham.id_hangsx = hangsx.id_hangsx ";
      $mysql = mysqli_query($conn , $sql_lk);
?>
<h3>Liệt Kê sản Phẩm</h3>
<div style="margin: 5px 0px; float:right"><i onclick="iconAddSp()" class="fa-solid fa-plus" style="color: #ededed;"></i></div>
<table style="width :100%">
      <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>hãng sản xuất</th>
            <th>Hinh ảnh</th>
            <th>Giá bán</th>
            <th>Khuyến mại</th>
            <th>Thông số</th>
            <th>Hành Động</th>
      </tr>
      <?php
      $i=0;
      while ($row = mysqli_fetch_array($mysql)){
            $i++;
      ?>
      <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensp'] ?></td>
            <td><?php echo $row['tenhang'] ?></td>
            <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" alt="Girl in a jacket" width="100" height="120"></td>
            <td><?php echo number_format($row['giaban'],0,',','.').'VND' ?></td>
            <td><?php echo $row['khuyenmai'] ?></td>
            <td><?php echo $row['thongso'] ?></td>
            <td><a href="?action=qllsp&query=sua&idsp=<?php echo $row['id_sanpham'] ?>"><i class="act fa-solid fa-hammer"></i></a>  
            <a href="modules/quanlysanpham/xuly.php?&idsp=<?php echo $row['id_sanpham'] ?>"><i class="act fa-regular fa-trash-can"></a></td>
      </tr>
      
      <?php
         }
      ?>
</table>