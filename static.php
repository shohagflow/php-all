<?php 

function myNumber(){
    static $qty = 0;
    echo $qty."<br>";
    $qty+=1;
}
myNumber();
myNumber();
myNumber();

?>