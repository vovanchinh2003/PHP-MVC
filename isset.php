<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo (isset ($a)) ?$a:" Biến a chưa khởi tạo ! ";
echo "<br/>---<br/>";
$a=12;
echo (isset ($a)) ?$a:" Biến a chưa khởi tạo ! ";
?>

</body>
</html>