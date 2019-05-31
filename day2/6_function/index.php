<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Function JS</h1>
<div>
    <p>A php function is a block of code designed to perform a particular task.</p>

    <p>Hàm trong php là khối các câu lệnh được tạo ra để thực hiện 1 nhiệm vụ cụ thể</p>

    <p>A php function is executed when "something" invokes it (calls it).</p>

    <p>Hàm trong php được chạy khi mà nó được gọi</p>

    <p>Cú pháp hàm : function tên_hàm(arg1, arg2) { // code execute }</p>

    <p>arg1 và arg2 nó tham số được truyền vào trong hàm</p>

    <p>Gọi hàm : tên_hàm(x, y)</p>
    <pre>
        lệnh return trong hàm sẽ trả về giá trị
        và các lệnh sau return thì chắc chắn không chạy
    </pre>
</div>

<?php
    function chuvihinhtron($duongkinhhinhtron) {
        $chuvi = $duongkinhhinhtron*3.14;
        return $chuvi;
}
    $x = 5;
    $ketqua = chuvihinhtron($x);
    echo'chu vi hình tròn : ' . $ketqua;

    function tinhdiemtrungbinh($diem_toan, $diem_ly, $diem_hoa) {
        $diem_tb = ($diem_toan + $diem_ly + $diem_hoa)/3;
        return $diem_tb;
    }
    $a = 7;
    $b = 3;
    $c = 6;
    // gọi hàm và truyền tham số
    $ketquadiem = tinhdiemtrungbinh($a,$b,$c);
    echo'<br> diem tb : ' . $ketquadiem;
?>
</body>
</html>