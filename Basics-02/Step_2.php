<?php 
function greaterFn($num){
  if ($num > 30) {
    return $num . ' is greater than 30 
';
  } elseif ($num > 20) {
    return $num . ' is greater than 20 
';
  } elseif ($num > 10) {
    return $num . ' is greater than 10 
';
  } else {
    return $num . ' is less than 10';
  }
}

echo greaterFn(40) .greaterFn(21). greaterFn(12).greaterFn(8); ;



?>