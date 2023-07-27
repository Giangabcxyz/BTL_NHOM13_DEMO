<style>
       table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
       }
    .modeltt{
     position: fixed;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: rgba(0, 0, 0,0.6);
     display: flex;
     justify-content: center;
     overflow: scroll;
     display : none;
    }
    .add_tt{
    background-color: white;
    box-shadow: 3px 3px  3px 1px rgba(241,253,253,0.6);
    width: 600px;
    animation: addpd 1s ease-in-out forwards;
}
    @keyframes addpd{
  0%   {transform: translateY(-100%);}
  25%  {transform: translateY(-90%);}
  50%  {transform: translateY(-70%);}
  75%  {transform: translateY(-50%);}
  100%{transform: translateY(50%);}
}

.add_tt h1{
    text-align: center;
    font-size: 20px;
}
.add_tt input[type="text"]{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
}
.add_tt textarea{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
    resize: none;
}
.add_tt input[type="submit"]{
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
.add_tt input[type="submit"]:hover{
    color: white;
    background-color: #45aaf2;
}
p{
    font-style: italic;
    font-size: 16px;
    text-shadow : 1px 1px 1px red;
}
</style>


<div class="modeltt">
        <div class="add_tt">
           <form  action="modules/quanlytintuc/xuly.php" method="POST" enctype="multipart/form-data" >
               <div style="display:flex ; justify-content : space-between; line-height: 30px ; align-items: center">
                     <h1 style="margin-left : 20px">Thêm sản phẩm</h1>
                     <i onclick="closseAddTt()" style="margin-right : 20px;cursor: pointer;" class="fa-solid fa-xmark" style="color: black; fontsize:16px; "></i>
               </div>
              
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Tên Tiêu đề </p>
                    <input type="text" name="tieude">
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Hình ảnh</p>
                    <input type="file" name="hinhanh">
              </div>
               <div  style="display:flex; flex-direction: column ; align-items: center">
                    <p>Nội dung</p>
                    <input type="text" name="noidung">
                </select>
               </div>
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Tác Giả</p>
                    <input type="text" name="tgia" >
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Thoi gian </p>
                    <td><input type="text" name="tgian" ></td>
              </div>
               <div style="display:flex; justify-content : center; width: 100% ; margin-top: 20px;">
                    <input type="submit" name="themtt" value="thêm tin tuc">
             </div>
            </form>
        </div>
</div>

