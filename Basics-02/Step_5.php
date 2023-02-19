<?php
function Input($word){
  $number ="";
  switch($word) {
    case "zero":
      $number = "0";
      break;
    case "one":
      $number = "1";
      break;
    case "two":
      $number = "2";
      break;
    case "three":
      $number = "3";
      break;
    case "four":
      $number = "4";
      break;
    case "five":
      $number = "5";
      break;
    case "six":
      $number = "6";
      break;
    case "seven":
      $number = "7";
      break;
    case "eight":
      $number = "8";
      break;
    case "nine":
      $number = "9";
}
return $number;
};

echo "This is number three : " . Input('three').",";


echo " \nThis is number five : " . Input('five').",";

echo " \nThis is number seven : " . Input('seven').",";

echo "\nAnd : " . Input('zero')
?>