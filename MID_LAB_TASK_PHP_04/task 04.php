<?php
$a=10;
$b=20;
$c=30;
if($a>$b && $a>$c)
{
echo "Largest value is a=".$a;
}
else if($b>$a && $b>$c)
{
echo "Largest value is b=".$b;
}
else if($c>$a && $c>$b)
{
echo "Largest value is c=".$c;
}
else
{
echo"Dont Enter Equal Values";
}
?>