<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>comment trong php</h1>
    <pre>
        comment thì không chạy mà chỉ được dùng để giải thích code cho các lập trình viên
        phân biệt sự khác biệt khi echo giá trị 1 biến
        bằng nháy kép "" hoặc nháy đơn ''
        nếu trong nháy kép "" có $a thì php sẽ in ra giá trị của biến đó
        nếu trong nháy đơn '' có $a thì php sẽ hiểu đó là 1 chuỗi bình thường
    </pre>

    <?php
        $a = 5;
        echo 'nháy đơn: giá trị của biến $a bằng: ' . $a;
        echo "<br>";
        echo "nháy kép: giá trị của biến $a bằng: " . $a ;
    ?>
</body>
</html>