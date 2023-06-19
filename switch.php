<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $thang = 4;
        switch($thang){
            case 1: case 2: case 3:
                echo "Quý I"; break;
                case 4: case 5: case 6:
                    echo "Quý II"; break;
                    case 7: case 8: case 9:
                        echo "Quý III"; break;
                        case 10: case 11: case 12:
                            echo "Quý IV"; break;
                                default:
                                echo "Không thấy tháng";
        }
    ?>
</body>
</html>