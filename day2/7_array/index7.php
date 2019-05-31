<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>các hàm sử lý mảng</h1>
<?php
$students = array("linh","tuan","loan","phuong","an");
echo "<br> trước khi sắp xếp:";
echo "<pre>";
print_r($students);
echo "</pre>";

echo "<br> Đếm số phần tử trong mảng: " . count($students);

asort($students);
echo "<br> sau khi sắp xếp asort() sắp xếp mảng chỉ số theo thứ tự tăng dần theo az
dựa vào giá trị của các phần tử";
echo "<pre>";
print_r($students);
echo "</pre>";

rsort($students);
echo "<br> sau khi sắp xếp rsort() sắp xếp mảng chỉ số theo thứ tự giảm dần theo za
dựa vào giá trị của các phần tử";
echo "<pre>";
print_r($students);
echo "</pre>";
?>
</body>
</html>