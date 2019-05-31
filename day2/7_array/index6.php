<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>mảng 3 chiều</h1>

<?php
$class9a_group1 = array("an","linh");
$class9a_group2 = array("long","huong");

$class9a = array($class9a_group1,$class9a_group2);

$class9b_group1 = array("an1","linh1");
$class9b_group2 = array("long1","huong1");

$class9b = array($class9b_group1,$class9b_group2);

$dinhtienhoang = array($class9a,$class9b);

echo "<pre>";
print_r($dinhtienhoang);
echo "</pre>";
?>
</body>
</html>