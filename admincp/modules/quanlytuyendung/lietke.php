
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
      $sql_lk = "SELECT * FROM tuyendung";
      $mysql = mysqli_query($conn , $sql_lk);
?>
<h3>Liệt Kê Thông Tin Tuyển Dụng</h3>
<div style="margin: 5px 0px; float:right"><i onclick="iconAddTd()" class="fa-solid fa-plus" style="color: #ededed;"></i></div>
<table style="width :100%">
      <tr>
            <th>ID</th>
            <th>Tên công việc</th>
            <th>Mô tả</th>
            <th>Thời Gian</th>
            <th>Địa Điểm</th>
            <th>Yêu Cầu</th>
            <th>Quyền Lợi</th>
            <th>Hành Động</th>
      </tr>
      <?php
      $i=0;
      while ($row = mysqli_fetch_array($mysql)){
            $i++;
      ?>
      <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tencv'] ?></td>
            <td><?php echo $row['mota'] ?></td>
            <td><?php echo $row['thoigian'] ?></td>
            <td><?php echo $row['diadiem'] ?></td>
            <td><?php echo $row['yeucau'] ?></td>
            <td><?php echo $row['quyenloi'] ?></td>
            <td><a href="?action=qltd&query=sua&idtd=<?php echo $row['id_tuyendung'] ?>"><i class="act fa-solid fa-hammer"></i></a>  
            <a href="modules/quanlytuyendung/xuly.php?&idtd=<?php echo $row['id_tuyendung'] ?>"><i class="act fa-regular fa-trash-can"></a></td>
      </tr>
      
      <?php
         }
      ?>
</table>