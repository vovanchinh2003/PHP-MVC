<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n=10;
        for($i=0; $i<$n;$i++)
        echo "<input type='button' value='Nút ".$i."' onclick='alert(".$i.");'>";
    ?>
</body>
</html>