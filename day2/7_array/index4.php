<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>foreach mảng kết hợp (có key chắc chắn chứa chữ)</h1>
<h1>toán tử ! là toán tử phủ định</h1>
<?php
// mảng kết hợp
$students = array("a" => "nguyen van a1","b" => "nguyen van a2","c" => "nguyen van a3",
    "d" => "nguyen van a4","e" => "nguyen van a5");
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<br>Dạng foreach đầy đủ";
//dạng foreach đầy đủ
// empty là rỗng true
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