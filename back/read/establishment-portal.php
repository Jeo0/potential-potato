<?php
// current loc @ uni/front/read_or_something
include "../../back/config.php";	
echo dirname(realpath(__FILE__)) . "back me";
echo getcwd();
$sql = "select  * from establishment";
$result = $conn->query($sql);
?>
