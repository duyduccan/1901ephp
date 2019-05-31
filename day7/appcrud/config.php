<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 30/05/2019
 * Time: 7:08 CH
 */
// tạo ra 4 hằng số để kết nối đến csdl

// cách khai báo hằng số

define("SERVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","appcrud");

$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

/*
 * kiểm tra kết nối đến csdl có thành công không
 * nếu không thành công sẽ ngắt chương trình
 * */
if(!$connection){
    die("kết nối csdl lỗi: " . $mysqli_connect_error());
}