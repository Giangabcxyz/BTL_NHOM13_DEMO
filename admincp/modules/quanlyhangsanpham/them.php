<style>
       table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
       }
</style>
<div class="model">
     <div class="add_hsx">
            <form  action="modules/quanlyhangsanpham/xuly.php" method="POST" >
               <div style="display:flex ; justify-content : space-between; line-height: 30px ; align-items: center">
                     <h1 style="margin-left : 20px">Thêm hãng sản xuất</h1>
                     <i onclick="closseAddPr()" style="margin-right : 20px;cursor: pointer;" class="fa-solid fa-xmark" style="color: black; fontsize:16px; "></i>
               </div>
              
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Tên hãng sản xuất</p>
                    <input type="text" name="tenhang">
              </div>
               <div  style="display:flex; flex-direction: column ; align-items: center">
                    <p>thứ tự </p>
                    <td><input type="text" name="thutu"></td>
               </div>
               <div style="display:flex; justify-content : center; width: 100%">
                   <input style="" type="submit" name="themhsx" value="thêm">
             </div>
              </form>
          
     </div>
</div>