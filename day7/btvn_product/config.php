<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 31/05/2019
 * Time: 3:18 CH
 */
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','btvn_product');

$connection = mysqli_connect(SERVERNAME,USERNAME, PASSWORD,DBNAME);

if(!$connection){
    die("Kết nối CSDL lỗi: " . mysqli_connect_error());
}
//echo "Kết nối CSDL thành công";