<?php 

$cell = "01756661275" ; #global scope
$secondNumber = "01521792570";
function getAddress(){
    global $cell;
    echo $cell ;
    echo "<br>";
    echo $GLOBALS["secondNumber"];
}
getAddress();
?>