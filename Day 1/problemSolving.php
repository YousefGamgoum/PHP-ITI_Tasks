<?php

/**Task 1 */
echo "<h4>Task1</h4>";
$name = "ITI Programer";
echo "Hello,  $name";

/******************************************************************************************************************* */
echo "<br/>";
echo "<br/>";
/***Task 2 */
echo "<h4>Task2</h4>";
$x = 10;
$y = 8;
echo "Summation result:".$x+$y;
echo "<br/>";
echo "multiplication result:".$x*$y;
echo "<br/>";
echo "subtraction result:".$x-$y;

/****************************************************************************** */
echo "<br/>";
echo "<br/>";
/**Task 3 */
echo "<h4>Task3</h4>";
$x = 10;
$b = 8;
$y = 4;
$z = 9;
$equation = ($x*$b)-($y*$z);
echo "Difference = $equation";

/************************************************************************************** */
echo "<br/>";
echo "<br/>";
/**Task 4 */
echo "<h4>Task4</h4>";
$x = 15;
$y = 33;
$x =$x % 10;
$y =$y % 10;
echo "last digit in the first number is $x and last digit in the second number is $y, So the answer is: ($x + $y = ".$x+$y." )";
/************************************************************************************** */
echo "<br/>";
echo "<br/>";
/**Task 5 */
echo "<h4>Task5</h4>";
$Num = 4986;
$FirstNum = (int)($Num / 1000);
if ($FirstNum % 2 == 0) {
    echo "In $Num the first digit is $FirstNum and its EVEN.";
} else {
    echo "In $Num the first di;git is $FirstNum and its ODD.";
}

/************************************************************************************** */
echo "<br/>";
echo "<br/>";
/**Task 6 */
echo "<h4>Task6</h4>";
$a = 15;
$b = 7;
$k = 3;

if( $a % $k == 0 && $b % $k == 0 ){
    echo "BOTH";
} else if( $a % $k == 0 ){
    echo "MOMO";
} else if( $b % $k == 0 ){
    echo "MEMO";
} else {
    echo "No One";
}
/************************************************************************************** */
echo "<br/>";
echo "<br/>";
/**Task 7 */
echo "<h4>Task7</h4>";

$Numb = 39;

$first = (int)($Numb / 10) ;
$second = $Numb % 10 ;

if( $first % $second == 0 || $second % $first == 0 ){
    echo "YES";
} else {
    echo "NO";
}



?>