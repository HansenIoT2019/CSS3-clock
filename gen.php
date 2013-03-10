<?php


for($i = 1; $i <= 12; $i++){
$deg = $i * 30 + -90;



echo "#hours > li:nth-child($i){  
    -webkit-transform: rotate(" . $deg . "deg); 
    -moz-transform: rotate(" . $deg . "deg); 
    -o-transform: rotate(" . $deg . "deg); 
    -khtml-transform: rotate(" . $deg . "deg); 
    -ms-transform: rotate(" . $deg . "deg); 
    -icab-transform: rotate(" . $deg . "deg); 
    transform: rotate(" . $deg . "deg); 

}<br />";

}





?>