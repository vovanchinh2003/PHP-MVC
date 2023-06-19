<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điều kiện</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 2;
        if($a>$b)
             echo "Khoảng chênh lệch giữa $a và $b là:" .($a-$b);
        else 
             echo "Khoảng chênh lệch giữa $a và $b là:" .($b-$a);
        ?>
</body>
</html>