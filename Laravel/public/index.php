<html>
<head>
    <title>Stat Roller</title>
</head>
<body>
<?php
function rollstatspretty()
{
    //This Function just explains how a stat is generated when ran. Old code probably going to remove.
    echo "Rolling 3d6 drop the lowest, <br />\n";
    $rollcount = 0;
    while ($rollcount < 4) {
        $roll = rand(1, 6);
        $rollcount++;
        //echo $roll . ",";
        $result[$rollcount] = $roll;
    }
    sort($result);
    echo "you rolled " . join(', ', $result) . " take off the " . $result[0];
    array_shift($result);
    //echo join(", ", $result);
    echo "<br />\n and your Score is: " . array_sum($result) . "<br />\n";
}
//rollstatspretty();
?>
<?php
//This Function generates a single stat for characters or NPCs.
function rollstat()
{
    //D6 rolling for character stats.
    $rollcount = 0;
    while ($rollcount < 4) {
        $roll = rand(1, 6);
        $rollcount++;
        $result[$rollcount] = $roll;
    }
    sort($result);
    array_shift($result);
    //return array_sum($result);
    return array_sum($result);
}
//This Function reruns the above function 6 times to generate all the primary stats.
function stats() {
    $statrolls = 0;
    while ($statrolls < 6) {
        $stat = rollstat();
        $statrolls++;
        $rolledstats[$statrolls] = $stat;
    }
    print join(",", $rolledstats);
}
stats();
?>
</body>
</html>
