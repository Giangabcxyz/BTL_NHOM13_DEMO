<div class="blogs">
    <?php
         
          $sqli_get_tt = "SELECT * FROM  tintuc";
          $sql= mysqli_query($conn, $sqli_get_tt);
          while ($row = mysqli_fetch_array($sql)){
       ?>
        <div class="blog">
              <div class="img">
                   <img src="admincp/modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" alt="">
              </div>
              <div class="description">
                    <h3><?php echo $row['tieude'] ?></h3>
                    <p><?php echo $row['noidung'] ?></p>
                    <p><?php echo $row['tacgia'] ?> <i><?php echo $row['tgian'] ?></i></p>
              </div>
        </div>
        <div class="rl"></div>
        <?php 
          }
        ?>
</div>