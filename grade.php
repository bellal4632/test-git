<?php
$x=$_REQUEST['mark'];
if ($x>=80 && $x<=100) {
    echo "<h2><center>Congratulations, You Got A+</center></h2>";
} elseif ($x>=70 && $x<=79) {
    echo "<h2><center>Congratulations, You Got A-</center></h2>";
} elseif ($x>=60 && $x<=69) {
    echo "<h2><center>Congratulations, You Got B+</center></h2>";
} elseif ($x>=45 && $x<=59) {
    echo "<h2><center>Congratulations, You Got B</center></h2>";
} elseif ($x>=33 && $x<=44) {
    echo "<h2><center>Congratulations, You Got C</center></h2>";
} elseif ($x<=32) {
    echo "<h2><center>Sorry You Fail, Better Luck For Next Time</center></h2>";
}
else {
    echo "<h2><center>Please Input A Valid Number</center></h2>";
}

?>

