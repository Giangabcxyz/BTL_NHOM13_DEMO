<style>

      h3{
            color : rgba(241,253,253,0.8);
      }
</style>


<h3>Liệt Kê tin tức</h3>
<div style="margin: 5px 0px; float:right"><i onclick="iconAddTt()" class="fa-solid fa-plus" style="color: #ededed;"></i></div>
<table style="width :100%">
      <tr>
            <th>ID</th>
            <th>Tiêu Đề</th>
            <th>Hình ảnh</th>
            <th>Nội Dung</th>
            <th>Tác Giả</th>
            <th>Thời Gian</th>    
            <th>Hành Động</th>       
      </tr>
      <?php
       $sql_lk = "SELECT * FROM tintuc";
       $mysql = mysqli_query($conn , $sql_lk);
      $i=0;
      while ($row = mysqli_fetch_array($mysql)){
            $i++;
      ?>
      <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tieude'] ?></td>
            <td><img src="modules/quanlytintuc/uploads/<?php echo $row['hinhanh']?>" alt="Girl in a jacket" width="100" height="120"></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><?php echo $row['tacgia'] ?></td>
            <td><?php echo $row['tgian'] ?></td>
            <td><a href="?action=qltt&query=sua&idtt=<?php echo $row['id_tintuc'] ?>"><i class="act fa-solid fa-hammer"></i></a>  
            <a href="modules/quanlytintuc/xuly.php?&idtt=<?php echo $row['id_tintuc'] ?>"><i class="act fa-regular fa-trash-can"></a></td>
      </tr>
      
      <?php
         }
      ?>
</table>