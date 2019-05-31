<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    khi có 1 biến +,-,*,/,% với chính bản thân nó
    hoặc nối chuỗi với chính nó thì sẽ có toán tử viết tắt
    $a = $a + 2 => $a += 2
    $a = $a - 2 => $a -= 2;
    $a = $a * 2 => $a *= 2;
    $a = $a / 2 => $a /= 2;
    $a = $a % 2 => $a %= 2;
    $a = $a ."ha noi" => $a .= "ha noi";
</pre>
<?php
$a = 8;
$a += 2;
echo "<br> Tổng: " .$a;

$b = 12;
$b -= 2;
echo "<br> Hiệu: " .$b;

$c = 5;
$c *= 2;
echo "<br> Nhân: " .$c;

$d = 20;
$d /= 2;
echo "<br> Chia: " .$d;

$e = 21;
$e %= 2;
echo "<br> Chia lấy dư: " .$e;

$f = 'Hello';
$f .= " World";
echo "<br> Chuỗi được nối: " .$f;
?>
</body>
</html>