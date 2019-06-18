<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Lambda là hàm không tên</h1>
<?php
function hello($name){
    echo "<br> Hello " . $name;
}
hello("function");


/*
 * có những hàm chỉ cần sử dụng duy nhất 1 lần
 * khi khai báo và gán 1 cái lambda cho 1 biến thì cần kết thúc lambda bằng dấu;
 * */
$hello = function($name){
    return "<br> Hello " . $name;
};
/*
 * gọi lambda qua biến
 * $bien("truyền vào tham số nếu có")*/
echo $hello("Lambda");


/*
 * callback
 * khi mà thực hiện xong 1 hành động mới cho phép một hành động khác chạy ngay đó
 * thì người ta gọi cái hành động chạy phía sau là callback
 * Tham số truyền vào hàm này bắt buộc phải là 1 lambda đóng vai trò là callback của hàm
 * showMessage() tức là showMessage() chạy trước sau đó gọi lambda callback phía sau */
function showMessage($country){
/*
 * khi biến chắc chắn tham số truyền vào hàm là 1 lambda thì gọi tham số $thamso()*/
echo "<br> Xin chào " . $country();
}
/*
 *function(){
    return "lambda ở dạng callback";
}
 * đóng vai trò là giá trị truyền vào và nó là 1 lambda*/
showMessage(function(){
    return "lambda ở dạng callback";
});
?>
<h1>Closure là lambda nhưng mà sẽ sử dụng các biến toàn cục khi khai báo closure</h1>
<?php
// 2 biến global (toàn cục)
$city = "ha noi";
$country = "viet nam";
$go = function($vehicle) use ($city,$country){
    echo "<br> Go travel city " .$city. " country " .$country . " by " .$vehicle;
};
$go("motor");

// ví dụ tương tự closure
$go1 = function($vehicle,$city,$country){
    echo "<br> Go travel city " .$city. " country " .$country . " by " .$vehicle;
};
//gọi hàm
$go1("motor",$city,$country);
/*
 * closure sử dụng biến global khi mà khai báo closure
 * còn thằng truyền tham số sẽ truyền vào khi gọi hàm
 * khi mà tách quá trình khai báo closure
 * và sử dụng closure ra 2 file khác nhau*/
?>
</body>
</html>