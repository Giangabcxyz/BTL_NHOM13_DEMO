<?php 
               $i=0;
                 $sqli_get_tuyendung = "SELECT * FROM tuyendung";
                 $sql = mysqli_query($conn, $sqli_get_tuyendung);
                 while($row = mysqli_fetch_array($sql)){
                    $i++;
         ?>
<div class="body-tuyendung">
            <div class="tuyendung-header">Tuyển dụng <?php echo $i ?></div>
           
            <div class="tuyendung-info">
                <h1 class="tieude"><?php echo $row["tencv"] ?></h1><br/>

                <b>1.MÔ TẢ</b>
                <ul class="tuyendung-noidung">
                    <li><?php echo $row["mota"] ?></li>
                   
                </ul>

                <b>2.THỜI GIAN LÀM VIỆC</b>
                <ul class="tuyendung-noidung">
                    <li><?php echo $row["thoigian"] ?></li>
                   
                </ul>

                <b>3.ĐỊA ĐIỂM LÀM VIỆC</b>
                <ul class="tuyendung-noidung">
                    <span><?php echo $row["diadiem"] ?></span>
                </ul>

                <b>4.YÊU CẦU</b>
                <ul class="tuyendung-noidung">
                    <li><?php echo $row["yeucau"] ?></li>
                   
                </ul>

                <b>5.QUYỀN LỢI</b>
                <ul class="tuyendung-noidung">
                    <li><?php echo $row["quyenloi"] ?></li>
                   
                </ul>

                <b>6.LIÊN HỆ</b>
                <ul class="tuyendung-noidung">
                    <li>Ứng viên điền thông tin theo link: 
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdNjF8wP7v7ocBDVRUFGqRCHrV0lNPky33Sn3GXVgSVYe7dMA/viewform" target="_blank">
                            <span>Tuyển dụng</span>
                        </a>
                    </li>
                    <li>Hoặc nộp hồ sơ trực tiếp tại <b>Phòng Hành chính nhân sự - 95B Phố Cổ, Trần Hưng Đạo, TPHN.</b></li>
                    <li>Hoặc gửi CV qua email:<b> DoAn@gmail.com</b></li>
                </ul>
            </div>
        </div>
        <?php 
          }
           ?>