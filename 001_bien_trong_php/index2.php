<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <h1>biến trong php: lưu trữ thông tin và thay đổi trong quá trình chạy</h1>
    <pre>
        khai báo biến trong php ntn?
        $tên_biến
        biến trong php thì không cần từ khóa var giống js
        và phải bắt đầu bằng $ tiếp theo là tên biến
        tên biến phải viết liền, không được dùng tiếng việt có dấu
        không được dùng ký tự đặc biết như @#...
        tên biến chỉ chưa các số và chữ cái từ a đến z và ký tự _
        tên biến có phần biệt hoa thường ví dụ $a khác $A
        trong js nối chuỗi bằng +
        trong php nối chuỗi bằng .
    </pre>

    <?php
        $a = 5;
        $b = 8;
        $c = $a + $b;
        echo '$c: ' . $c;
    ?>
</body>
</html>