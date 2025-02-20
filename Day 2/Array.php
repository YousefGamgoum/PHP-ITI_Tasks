<?php
/******************************************************************************************************************* */
echo "<br/>";
echo "<br/>";
/***Task 1 */
$arr = [10,20,30,40,50,60];
print_r($arr);
echo "<br>";
unset($arr[2]);
print_r($arr);
echo "<br>";
/******************************************************************************************************************* */
echo "<br/>";
echo "<br/>";
/***Task 2 */
$asArr = [
    ["name" => "yousef", "age" => 24, "address" => "Cairo"],
    ["name" => "Hamza", "age" => 26, "address" => "Aswan"],
    ["name" => "Mahmoud", "age" => 20, "address" => "menofia"],
];

$arrKeys = array_keys($asArr[0]);

echo "<table border=1>";
echo "<thead>";
echo "<tr>";
foreach ($arrKeys as $keys) {
    echo "<th>$keys</th <br>";
}
echo "</tr>";
echo "</thead>";
echo "<tbody >";
foreach ($asArr as $keys) {
    echo "<tr>";
    foreach ($keys as $values) {
        echo "<td>$values</td>";
    }
    echo "</tr>";
}

echo "</tbody >";

















?>