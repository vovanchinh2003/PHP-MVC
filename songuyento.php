<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isPrime($number) {
        if ($number < 2) {
            return false;
        }
    
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
    
        return true;
    }
    
    function printPrimes($n) {
        $count = 0;
        $number = 2;
    
        while ($count < $n) {
            if (isPrime($number)) {
                echo $number . " ";
                $count++;
            }
            $number++;
        }
    }
    
    $n = 20; // Số lượng số nguyên tố cần in ra
    printPrimes($n);
    
    ?>
</body>
</html>