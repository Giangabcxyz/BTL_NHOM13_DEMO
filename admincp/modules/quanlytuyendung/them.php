<style>
       table,tr,td{
            border:1px solid black;
            border-collapse: collapse;
       }
    .modeltd{
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
    .add_td{
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

.add_td h1{
    text-align: center;
    font-size: 20px;
}
.add_td input[type="text"]{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
}
.add_td textarea{
    padding: 5px 15px;
    height: 40px;
    width: 80%;
    outline: none;
    resize: none;
}
.add_td input[type="submit"]{
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
.add_td input[type="submit"]:hover{
    color: white;
    background-color: #45aaf2;
}
p{
    font-style: italic;
    font-size: 16px;
    text-shadow : 1px 1px 1px red;
}
</style>


<div class="modeltd">
        <div class="add_td">
           <form  action="modules/quanlytuyendung/xuly.php" method="POST" enctype="multipart/form-data" >
               <div style="display:flex ; justify-content : space-between; line-height: 30px ; align-items: center">
                     <h1 style="margin-left : 20px">Thêm Công Việc</h1>
                     <i onclick="closseAddTd()" style="margin-right : 20px;cursor: pointer;" class="fa-solid fa-xmark" style="color: black; fontsize:16px; "></i>
               </div>
              
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Tên Công Việc</p>
                    <input type="text" name="tencv">
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Mô Tả Công Việc</p>
                    <textarea name="mota" rows="10" cols="50" resize="none"></textarea>
              </div>
               <div  style="display:flex; flex-direction: column ; align-items: center">
                    <p>Thời Gian</p>
                    <input type="text" name="thoigian">
                </select>
               </div>
               <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Địa điểm</p>
                    <input type="text" name="diadiem" >
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Yêu Cầu</p>
                    <td><input type="text" name="yeucau" ></td>
              </div>
              <div style="display:flex; flex-direction: column ; align-items: center">
                    <p style="">Quyền lợi</p>
                    <td><input type="text" name="quyenloi" ></td>
              </div>
               <div style="display:flex; justify-content : center; width: 100% ; margin-top: 20px;">
                    <input type="submit" name="themcv" value="Thêm công việc">
             </div>
            </form>
        </div>
</div>

