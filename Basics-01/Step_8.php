<?php
$items = array("Eggs", "Milk", "Cheese", "Water Pack ", "Tissues" , "Watermelon");

echo "Hello Sir, do you have " . $items[0] . ", " . $items[1] . ", and " . $items[2] . "? \n";

if (in_array("Watermelon",$items))
echo "Also, if you sell fruits can I find a ". end($items);
?>
//2nd Ex
-.....................................-
PHP Data types - Multidimensional Array 
_....................................._
<?php
$items = array(
"Eggs" => array("Balade","Mazere3"),
 "Milk"=>array("Fresh","Taanayel"), 
 "Cheese", 
 "Water Pack" =>array("Tanoureen","Reem"), 
 "Tissues" , "Watermelon");

 echo "Hey Sir, Please I need 1 pack of" . $items['Eggs'][0] . " eggs and 3 " . $items['Water Pack'][1] . " Water Pack.";



?>