<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Foreach mảng chỉ số ( mảng có key là số ) </h1>
<h1>toán tử ! là toán tử phủ định</h1>
<?php
// mảng chỉ số
$students = array("nguyen van a1","nguyen van a2","nguyen van a3","nguyen van a4","nguyen van a5");
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<br>Dạng foreach đầy đủ";
//dạng foreach đầy đủ
//is_array() kiểm tra xem có phải là mảng không
//empty rỗng hoặc chưa khởi tạo
//!empty là không rỗng và đã khởi tạo
if(is_array($students) && !empty($students)){
    foreach($students as $key => $value){
        echo "<br> Key: " . $key . " Value: " . $value;
    }
}
echo "<br>Dạng foreach rút gọn";
// dang foreach rút gọn chỉ lặp và xuất ra cái value
if(is_array($students) && !empty($students)){
    foreach($students as $value){
        echo "<br> value: " . $value;
    }
}
?>
</body>
</html>