<?php
// current loc @ uni/front/read_or_something
include "../../back/config.php";	
#echo dirname(realpath(__FILE__)) . "back me";
#echo getcwd();

$sql = " SELECT b.buildingname, e.floornum, e.roomnum, r.roomtype, e.id_establishment
FROM establishment_table e
JOIN building_table b ON e.id_building = b.id_building
JOIN roomtype_table r ON e.id_roomtype = r.id_roomtype; ";
$result = $conn->query($sql);
# echo "<br>result : " . $result . "<br>";
?>
