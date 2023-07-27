<?php
     // Sau khi hoàn thành công việc với cơ sở dữ liệu, đóng kết nối
     $sql_get_data1 = "SELECT tenhang FROM  hangsx ";
     $sql_get_data2 = "SELECT soluong FROM  sanpham ";
     $sql = mysqli_query($conn,$sql_get_data2);
     $xvalue = [];
     $yvalue = [];
     while ($row = mysqli_fetch_array($sql)){ 
             array_unshift($xvalue,$row);
     }  
     while ($row = mysqli_fetch_array($sql)){ 
       array_unshift($yvalue,$row);
     }
?>

<div style="width :100%" class="div">
    [<?php for($i=0;$i<sizeof($xvalue);$i++){if($i==sizeof($xvalue)-1){echo $xvalue[$i] ;}else{echo $xvalue[$i]."," ;}}?>]
    <canvas id="myChart" style="background-color:black; width:100%;max-width:600px"></canvas>
</div>

<script>
var xValues = [<?php for($i=0;$i<sizeof($xvalue);$i++){if($i==sizeof($xvalue)-1){echo "'".$xvalue[$i]."'" ;}else{echo "'".$xvalue[$i]."'," ;}}?>];
var yValues = [<?php for($i=0;$i<sizeof($yvalue);$i++){if($i==sizeof($yvalue)-1){echo $yvalue[$i] ;}else{echo $yvalue[$i]."," ;}}?>];
 
var barColors = [<?php for($i=0;$i<sizeof($xvalue);$i++){if($i==sizeof($xvalue)-1){echo "'rgba(".rand(50,255).",".rand(50,255).",".rand(50,255).",1.0)'" ;}else{echo "'rgba(".rand(50,255).",".rand(50,255).",".rand(50,255).",1.0)',"; }}?>];
new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Thống kê Sản phẩm "
    }
  }
});
</script>