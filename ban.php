<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php
    $id =1;
    $soChoNgoi=9;
    $viTri = 8;
    $trangThai = 9;
    echo "<div class='row'>";
    echo " <div class='col-2'>";
    echo "<div style='width: 200px; height: 200px; border: 1px solid black; margin: 10px;'>";
    echo "Bàn ID: " . $id . "<br>";
    echo "Số chỗ ngồi: " . $soChoNgoi . "<br>";
    echo "Vị trí: " . $viTri . "<br>";
    echo "Trạng thái: " . $trangThai . "<br>";
    echo "<input type='hidden' name='id_ban' value='" . $id . "'/>"; // Ẩn trường input chứa ID bàn
    echo "<input type='submit' name='dat_ban' value='Đặt bàn' />"; // Nút nhấp để đặt bàn
    echo "</div>";
    echo "</div>";
    ?>
</body>
</html>