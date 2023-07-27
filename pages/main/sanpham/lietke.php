
<?php 
    $sql_get_data = "SELECT * FROM  sanpham";
    $sql = mysqli_query($conn,$sql_get_data);
    while ($row = mysqli_fetch_array($sql)){
?>
     <a href="index.php?xuly=ct&id=<?php echo $row['id_sanpham']?>">
         <div class="product">
               <div class="img_pr">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
               </div>
               <p class="name_pr"><?php echo $row['tensp'] ?></p>
               <p class="name_ic"><?php echo number_format($row['giaban'],0,',','.').'VND' ?></p>
               <div class="danhgia" style="display:flex; font-size:14px ; justify-content: space-between; margin-top:6px">
                     <div style="margin-left : 28px">
                         <?php for ($i = 0; $i< rand(1, 4); $i++) {
                                 print '<i class="fa-solid fa-star" style="color: #f9f115;font-size:14px"></i>';
                            }?> 
                            <?php 
                                echo rand(1, 1000).'đánh giá';
                            ?> 
                        
                     </div>
                     <div style="margin-right : 20px">
                         SL<?php echo $row['soluong'] ?>
                     </div>
               </div>
               
         </div>
     </a>
<?php 
    }
?>