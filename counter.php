<?php 
$no1 = $_GET["no1"];
$no2 = $_GET["no2"];

$whichOneIsPressed = $_GET["pressed"];

$result = 0;
if($whichOneIsPressed == "plus"){
    $result = $no1 + $no2;
}else if($whichOneIsPressed == "minus"){
    $result = $no1 - $no2;
}else if($whichOneIsPressed == "multiplication"){
    $result = $no1 * $no2;
}else if($whichOneIsPressed == "division"){
    $result = $no1 / $no2;
}

echo "<div> $result </div>";
?>