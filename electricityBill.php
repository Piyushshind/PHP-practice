<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
    function calculateBill (){
        $units = $_POST['unit'];
         $totalbill = 0.00;
        if($units <=50){
            $totalbill= $units*3.50;
        }
        elseif($units <=100){
            $totalbill= $units*4;
        }
        elseif($units >100 && $units<250){
            $totalbill= $units*5.20;
        }
        elseif($units >250){
            $totalbill= $units*6.50;
        }else{
             echo "Enter valid units";
        }
        echo "your unites are ". $units ." and Total Bill is " . $totalbill;
    }
   
    ?>

    <form method="post" action="">
        <input name="unit" type="number" />
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
    if(isset($_POST['submit'])){
        calculateBill();
    }
    ?>
</body>
</html>