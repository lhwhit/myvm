<?php  
/*  
 * PHP 时 间相加减  
 * */  
$a="2010-04-10";  
$b="2010-6-6";  
$day=(strtotime($b)-strtotime($a))/3600/24;  
echo strtotime($b)."<br />";
echo "相差".$day."天<br />";  
echo date("Y-m-d",mktime(0,0,0,date("m",strtotime($b)),date("d",strtotime($b))-$day,date("Y",strtotime($b))));  
 
?>
