<?php
$colors = ['red','orange','yellow','green','blue'];
for($i=0;$i<4;$i++)
{
    $rnd = rand(0, count($colors)-1);
    $str .= "<div style=\"background:$colors[$rnd];height:200px;\">$i</div>";
    unset($colors[$rnd]);
    sort($colors);
}
echo($str);
?>