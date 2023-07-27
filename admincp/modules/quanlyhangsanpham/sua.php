
<style>
      
    
     .modelud{
     position: fixed;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     height : 100vh;
     background-color: rgba(0, 0, 0,0.6);
     display: flex;
     align-items: center;
     justify-content: center;
     }
.sua_hsx{
    background-color: white;
    box-shadow: 3px 3px  3px 1px rgba(241,253,253,0.6);
    height: 600px;
    width: 400px;
    animation: addpd 1s ease-in-out forwards;
}

.sua_hsx h1{
    text-align: center;
    font-size: 20px;
}
.sua_hsx input[type="text"]{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
}
.sua_hsx input[type="submit"]{
    margin-top: 20px;
    text-align: center;
    padding: 8px 48px;
    outline: none;
    cursor: pointer;
   
    border: none;
    border-radius: 6px;
    
}
.sua_hsx input[type="submit"]:hover{
    transition: 0.8s;
    color: white;
    background-color: #45aaf2;
}
</style>

<?php
     
       $sql_get_data = "SELECT * FROM hangsx WHERE  id_hangsx = '$_GET[id]' LIMIT 1";
       $sql = mysqli_query($conn, $sql_get_data);

       while ($row = mysqli_fetch_array($sql)){

?>

<div class="modelud">
      <div class="sua_hsx">
          <form  action="modules/quanlyhangsanpham/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST" >
          <div style="display:flex ; justify-content : space-between; line-height: 30px ; align-items: center">
                     <h1 style="margin-left : 20px">Sửa hãng sản xuất</h1>
                     <a href="modules/quanlyhangsanpham/xuly.php"><i onclick="closseAddPr()" style="margin-right : 20px;cursor: pointer;" class="fa-solid fa-xmark" style="color: black; fontsize:16px; "></i></a>
                     
               </div>
          <div style="display:flex; flex-direction: column ; align-items: center">
                <p>Tên Hãng</p>
                <input type="text" value="<?php  echo $row['tenhang']  ?>" name="tenhang">
         </div>
         <div style="display:flex; flex-direction: column ; align-items: center">
                <p>Thứ Tự</p>
                <input type="text" value="<?php echo $row['thutu'] ?>" name="thutu">
          </div>
         <div style="display:flex; flex-direction: column ; align-items: center">
               <input type="submit" name="suahsx" value="Sửa hãng sản xuất">
         </div>
    </form>
      </div>
</div>


  
    <?php
       }
     ?>
