<html>
<head>
    <title>hello</title>
</head>
<body>
<?php
    //D6 rolling
    echo "Rolling 3d6 drop the lowest, \n";
    $rollcount = 0;
    do {
        $roll = rand (1,6);
        $rollcount ++;
        //echo $roll . ",";
        $result[$rollcount] = $roll;
    }while($rollcount < 4);
    sort($result);
    echo "you rolled " . join(', ', $result) . " take off the " . $result[0];
    array_shift($result);
    //echo join(", ", $result);
    echo " and your Score is: " . array_sum($result) . "\n";
?>
</body>
</html>
