<?php 

function myNumber(){
    static $qty = 1;
    echo $qty."<br>";
    $qty+=1;
}
myNumber();
myNumber();
myNumber();

?>