<html>
<head>
    <title>hello</title>
</head>
<body>
<?php
    //D6 rolling
    echo "Rolling 3d6 \n";
    $rollcount = 0;
    do {
        $roll = rand (1,6);
        $rollcount ++;
        //echo $roll . ",";
        $result[$rollcount] = $roll;
    }while($rollcount < 4);
    sort($result);
    array_shift($result);
    echo join(", ", $result);
    echo " Total: " . array_sum($result) . "\n";
?>
</body>
</html><?php
