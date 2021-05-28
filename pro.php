<?php
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
echo "Your First Subject Marks is".$a;
echo "</br>Your Second Subject Marks is=".$b;
echo "</br>Your third Subject Marks is=".$c;
echo "</br>Your Fourth Subject Marks is=".$d;
echo "</br/>Your Fifth Subject Marks is=".$e;
echo "</br>Your Total Marks is=".($a+$b+$c+$d+$e);
$z=($a+$b+$c+$d+$e);
if($z>=80){
echo "</br>Destination";
}
elseif($z>=60){
    echo "</br>First Class";
}
else{
    echo "</br>Second Class";
}
?>
