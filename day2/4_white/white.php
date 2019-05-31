<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    trong vòng lặp có 3 thành phần quan trọng nhất:
    1: sự khởi đầu vòng lặp
    2: điều kiện chạy vòng lặp
    3: sự thay đổi sau mỗi vòng lặp
</pre>
<pre>
    sự khởi đầu vòng lặp while
    while(điều kiện chạy vòng lặp){
    // các câu lệnh của vòng lặp
    sự thay đổi của vòng lặp sau mỗi lần chạy
    }
</pre>
<pre>
    sự khởi đầu vòng lặp
    do{
    // các câu lệnh vòng lặp
    sự thay đổi vòng lặp sau mỗi lần chạy
    }while(điều kiện của vòng lặp);
</pre>
<?php
$i = 1;
while($i < 100){
    if($i % 2 == 0){
        echo "<br>" . $i;
    }
    $i++;
}
?>
</body>
</html>