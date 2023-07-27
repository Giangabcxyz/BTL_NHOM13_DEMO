<div class="main">
		   <div class="bran_box">
              <?php
                  $i=0;
                  $sql_lk = "SELECT *FROM hangsx ";
                  $sql = mysqli_query($conn, $sql_lk);
                  while($row = mysqli_fetch_array($sql))
                  {
                       $i++;
                  ?>
                        
                            <a class="bran" href="index.php?xuly=timsp&id=<?php echo $row['id_hangsx']?>"><?php echo $row['tenhang']?></a> 
                       
                    <?php 
                  }
              ?>
           </div>     
           <div class="handal">

                  <div class="navbar">
                           <ul> 
                                
                                <li><a href="#">Giá Bán</a>
                                        <ul class="sub-nav">
                                              <li><a href="index.php?xuly=td&id=<?php echo $i  ?>">Tăng Dần</a></li>
                                              <li><a href="index.php?xuly=gd&id=<?php echo $i  ?>">Giảm dần</a></li>
                                       </ul>
                                   </li>
                                <li><a href="#">Sắp xếp</a>
                                       <ul class="sub-nav">
                                              <li><a href="index.php?xuly=tt&id=<?php echo $i  ?>">A-Z</a></li>
                                              <li><a href="index.php?xuly=tg&id=<?php echo $i  ?>">Z-A</a></li>
                                       </ul>
                               </li>
                                
                                
                           </ul>
                     </div>
                </div>
           </div>
	
		<div class="products">
               <?php 
                        include("sanpham/main.php");
               ?>
        </div>
</div>



