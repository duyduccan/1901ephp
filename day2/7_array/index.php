<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    mảng chứa danh sách các dữ liệu khác nhau chứa được nhiều giá trị
    các kiểu dữ liệu như số, chuỗi chỉ chứa được duy nhất một giá trị
    để khai báo mảng $mang = array("nguyen van a","nguyen van b","nguyen van c");
    cấu trúc mảng:
    gồm 2 phần chính: key và value
    key được hiểu như chỉ số
    value được hiểu như 1 giá trị
    mình sẽ có một cái tủ đựng đồ. mỗi ô tủ có một mã số thì cái key chính là mã số đó
    còn cái chứa trong tủ sẽ là giá trị value
    key trong mảng tuần tự thì bắt đầu từ 0
</pre>
<?php
$mang = array("nguyen van a","nguyen van b","nguyen van c");
echo "<br>".$mang[0];
echo "<br>".$mang[1];
echo "<br>".$mang[2];

echo "<pre>";
print_r($mang);
echo "</pre>";

// thay đổi giá trị của các phần tử trong mảng thông qua key của nó
$mang[0] = "123";
$mang[1] = "345";
$mang[2] = "678";

echo "<br>".$mang[0];
echo "<br>".$mang[1];
echo "<br>".$mang[2];

// lệnh in ra cấu trúc trong mảng php
echo "<pre>";
print_r($mang);
echo "</pre>";

$student = array("nguyen van long", "nguyen van tu");
//in ra mảng
echo "<pre>";
print_r($student);
echo "</pre>";
?>

</body>
</html>