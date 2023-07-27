
<?php
      $sql_lk = "SELECT * FROM hangsx";
      $mysql = mysqli_query($conn , $sql_lk);
?>
<style>
         table {
    border-collapse: collapse;
     width: 100%;
  }
  
th, td {
    text-align: left;
    padding: 8px;
    color:  rgba(241,253,253,0.8);
    border-bottom: 1px solid #DDD;
  }
  tr ,td{
     border: none;
  }

tr:hover {background-color:  #2d98da;}
a{
      text-decoration: none;
  color:rgba(241,253,253,0.8);
}

</style>
<h3 class='tl'>Liệt kê Sản Phẩm</h3>
<div style="margin: 5px 0px; float:right"><i onclick="iconAddPr()" class="fa-solid fa-plus" style="color: #ededed;"></i></div>
<table>
      <tr>
            <th>ID</th>
            <th>Hãng Sản Xuất</th>
            <th>Hành Động</th>
      </tr>
      <?php
      $i=0;
      while ($row = mysqli_fetch_array($mysql)){
            $i++;
      ?>
      <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenhang'] ?></td>
            <td><a onclick="updataPr()" href="?action=qlhsp&query=sua&id=<?php echo $row['id_hangsx'] ?>"><i class="act fa-solid fa-hammer"></i></a>  
            <a href="modules/quanlyhangsanpham/xuly.php?&id=<?php echo $row['id_hangsx'] ?>"><i class="act fa-regular fa-trash-can"></i></a></td>
      </tr>
      
      <?php
         }
      ?>
</table>