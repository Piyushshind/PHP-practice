<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
    function calculateBill ($units){
        if($units <=50){
            return $units*3.50;
        }
        if($units <=100){
            return $units*4;
        }
        if($units >100 && $units<250){
            return $units*5.20;
        }
        if($units >250){
            return $units*6.50;
        }
    }
    $value = calculateBill(148);
    echo $value;
    ?>
</body>
</html>