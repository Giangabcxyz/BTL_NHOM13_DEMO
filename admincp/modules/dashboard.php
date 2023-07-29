<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<?php
$servername = "localhost";  // Tên máy chủ MySQL
$username = "root"; // Tên người dùng MySQL
$password = ""; // Mật khẩu người dùng MySQL
$database = "quanlydienthoai"; // Tên cơ sở dữ liệu MySQL

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    exit();
}

// Kết nối thành công
// echo "Kết nối thành công!";

// Sau khi hoàn thành công việc với cơ sở dữ liệu, đóng kết nối
$sql_get_data = "SELECT total,products_json FROM  payment ";
$sql_get_data2 = "SELECT total FROM  payment ";
$sql = mysqli_query($conn,$sql_get_data);
$xvalue = [];
$yvalue = [];
$vndvalue = [];

while ($row = mysqli_fetch_array($sql)){ 
 
  $str=trim( $row['products_json'],'[]');
  $arr = json_decode($str, true);
  if($arr){
        array_unshift($xvalue,$arr['ma']);
        array_unshift($yvalue,$arr['soluong']);
        array_unshift($vndvalue,$row['total']);
  }else{
       $str="[".$str."]";
       $array = json_decode($str, true);
       for($i=0;$i<sizeof($array);$i++ ){       
        array_unshift($xvalue,$array[$i]['ma']);
        array_unshift($yvalue,$array[$i]['soluong']);
        array_unshift($vndvalue,$row['total']);
       
       }
       
  }

}
  

?>
<canvas id="myChart" style=" width:100%;max-width:600px"></canvas>

<script>
var xValues = [<?php for($i=0;$i<sizeof($xvalue);$i++){if($i==sizeof($xvalue)-1){echo "'".$xvalue[$i]."'" ;}else{echo "'".$xvalue[$i]."'," ;}}?>];
var yValues = [<?php for($i=0;$i<sizeof($yvalue);$i++){if($i==sizeof($yvalue)-1){echo $yvalue[$i] ;}else{echo $yvalue[$i]."," ;}}?>];
var vndValue= [<?php for($i=0;$i<sizeof($vndvalue);$i++){if($i==sizeof($vndvalue)-1){echo $vndvalue[$i] ;}else{echo $vndvalue[$i]."," ;}}?>];


var sanpham=[];
for(i=0;i<xValues.length;i++ ){
  sanpham.push({id:xValues[i],soluonghang:yValues[i],doanhthu:vndValue[i]==null?0:vndValue[i] })
}
console.log(sanpham);

const reducedArr = sanpham.reduce((accumulator, currentValue) => {
  const existingItem = accumulator.find(item => item.id === currentValue.id);
  if (existingItem) {
    existingItem.soluonghang += currentValue.soluonghang;
    existingItem.doanhthu += currentValue.doanhthu;
  } else {
    accumulator.push(currentValue);
  }
  return accumulator;
}, []);

console.log(reducedArr);

var barColors = [<?php for($i=0;$i<sizeof($xvalue);$i++){if($i==sizeof($xvalue)-1){echo "'rgba(".rand(50,255).",".rand(50,255).",".rand(50,255).",1.0)'" ;}else{echo "'rgba(".rand(50,255).",".rand(50,255).",".rand(50,255).",1.0)',"; }}?>];


new Chart("myChart", {
  type: "bar",
  data: {
    labels: reducedArr.map((sp)=>sp.id),
    datasets: [{
      backgroundColor: barColors,
      data: reducedArr.map((sp)=>sp.soluonghang),
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Thống kê Sản phẩm "
    },
    scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          },
          scaleLabel: {
            display: true,
            labelString: 'Số lượng bán ra'
          }
        }],
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Mẫu sản phẩm'
          }
        }]
      }
}
})
</script>


<canvas id="myChart2" style="width:80%;max-width:600px"></canvas>

<script>
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart2", {
  type: "pie",
  data: {
    labels: reducedArr.map((sp)=>sp.id),
    datasets: [{
      backgroundColor: barColors,
      data: reducedArr.map((sp)=>sp.doanhthu),
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    },
    plugins: {
  labels: {
    render: 'value',
    fontColor: '#fff',
    fontSize: 16,
    fontStyle: 'bold'
  }
}
  }
});
</script>

</body>
</html>
