<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Phạm vi của biến</h1>
<pre>
    - biến cục bộ: chỉ có ảnh hưởng và chỉ sử dụng được trong 1 không gian nhất định
    - biến toàn cục: có ảnh hưởng và có thể sử dụng ở mọi nơi
    - nếu tên biến bị trùng thì nên sử dụng ngoài hàm thì php sẽ lấy giá trị của biến
    toàn cục

    tham số khi khai báo hàm là biến cục bộ và chỉ có tác dụng trong hàm
    ví dụ như là biến $r là biến cục bộ
</pre>
<?php
// biến toàn cục
$r = 100;
//khai báo hàm với $r là tham số cần truyền vào
function tinhchuvihinhtron($r = 10){
    //$chuvi là biến cục bộ
    $chuvi = 3.14 * $r * 2;
    return $chuvi;
}
//gọi hàm
//biến $ketqua bên ngoài hàm là biến toàn cục
$ketqua = tinhchuvihinhtron(15);
echo "<br> chu vi hinh tron là : " .$ketqua;
echo '<br>Test thử biến $r: '.$r;
?>

</body>
</html>