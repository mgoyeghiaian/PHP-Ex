<?php
$number1 = 153;
$number2=$number1;
$sum=0;

while($number1>0){
  $num=$number1%10;
  $sum=$sum+pow($num,3);
  $number1=$number1/10;
}

if($sum==$number2){
  print "$number2 is an Armstrong Number";
  return true;
}

else{
  print "$number2 is Not an Armstrong Number";
  return false; 
}

?>

