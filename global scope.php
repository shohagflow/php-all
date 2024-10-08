<?php 

$cell = "01756661275" ; #global scope
 #global scope
function getAddress(){
    global $cell;
    echo $cell ;
}
getAddress();
?>