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
        //echo $roll . "\n";
        $result[$rollcount] = $roll;
        echo sort($result);
    }while($rollcount < 3);
    echo "Total: " . array_sum($result) . "\n";
    ?>
?>
</body>
</html><?php
