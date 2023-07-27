<style>
       table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
       }
    .modelsp{
     position: fixed;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: rgba(0, 0, 0,0.6);
     display: flex;
     justify-content: center;
     overflow: scroll;
     display: none;
    }
    .add_sp{
    background-color: white;
    box-shadow: 3px 3px  3px 1px rgba(241,253,253,0.6);
    width: 600px;
    animation: addpd 1s ease-in-out forwards;
}
    @keyframes addpd{
  0%   {transform: translateY(-100%);}
  25%  {transform: translateY(-50%);}
  50%  {transform: translateY(0);}
  75%  {transform: translateY(50%);}
  100%{transform: translateY(0);}
}

.add_sp h1{
    text-align: center;
    font-size: 20px;
}
.add_sp input[type="text"]{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
}
.add_sp textarea{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
    resize: none;
}
.add_sp input[type="submit"]{
    margin-top: 10px;
    text-align: center;
    padding: 8px 48px;
    outline: none;
    cursor: pointer;
    transition: 0.4s;
    border: none;
    border-radius: 6px;
    margin-bottom: 30px;
}
.add_sp input[type="submit"]:hover{
    color: white;
    background-color: #45aaf2;
}
p{
    font-style: italic;
    font-size: 16px;
    text-shadow : 1px 1px 1px red;
}
</style>


<div class="modelsp">
        <div class="add_sp">
           <form  action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data" >
               <div style="display:flex ; justify-content : space-between; line-height: 30px ; align-items: center">
                     <h1 style="margin-left : 20px">Thêm sản phẩm</h1>
                     <i onclick="closseAddSp()" style="margin-right : 20px;cursor: pointer;" class="fa-solid fa-xmark" style="color: black; fontsize:16px; "></i>
               </div>
              
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Tên Sản phẩm </p>
                    <input type="text" name="sanpham">
              </div>
               <div  style="display:flex; flex-direction: column ; align-items: center">
                    <p>Tên hãng sản xuất</p>
                    <select name="hsx">
                    <?php
                        $sql_get = "SELECT * FROM hangsx ";
                        $sql = mysqli_query($conn, $sql_get);

                        while ($row = mysqli_fetch_array($sql)) {
                    ?>
                       <option value="<?php echo $row['id_hangsx'] ?>"><?php  echo $row['tenhang']  ?></option>
                     <?php 
                         }
                     ?>
                </select>
               </div>
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Hình ảnh</p>
                    <input type="file" name="hinhanh" >
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Giá bán</p>
                    <td><input type="text" name="giaban" ></td>
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Số Lượng</p>
                    <td><input type="text" name="soluong" ></td>
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Khuyến mãi</p>
                    <input type="text" name="khuyenmai" >
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Thông số</p>
                    <textarea name="thongso"  cols="30" rows="10" resize="none"></textarea>
              </div>
               <div style="display:flex; justify-content : center; width: 100%">
                    <input type="submit" name="themsp" value="thêm sản phẩm">
             </div>
            </form>
        </div>
</div>

<!-- <table style="width : 100% ; border:1px solid black">
  <form  action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
     <tr>
         <td>tên sản phẩm:</td>
         <td><input type="text" name="sanpham"></td>
     </tr>
     <tr>
          <td>tên hãng sản xuất :</td>
          <td>
                
                <select name="hsx">
                    <?php
                        $sql_get = "SELECT * FROM hangsx ";
                        $sql = mysqli_query($conn, $sql_get);

                        while ($row = mysqli_fetch_array($sql)) {
                    ?>
                       <option value="<?php echo $row['id_hangsx'] ?>"><?php  echo $row['tenhang']  ?></option>
                     <?php 
                         }
                     ?>
                </select>
                
          </td>
     </tr>
     <tr>
           <td>Hình ảnh</td>
           <td><input type="file" name="hinhanh" ></td>
     </tr>
     <tr>
           <td>Giá bán</td>
           <td><input type="text" name="giaban" ></td>
     </tr>
     <tr>
           <td>Khuyến mãi</td>
           <td><input type="text" name="khuyenmai" ></td>
     </tr>
     <tr>
           <td>Thông số</td>
           <td><textarea name="thongso"  cols="30" rows="10"></textarea></td>
     </tr>
     <tr>
         <td colspan="2"><input type="submit" name="themsp" value="thêm sản phẩm"></td>
     </tr>
    </form>
</table> -->