<?php
require_once("db.php");
$qqquery = "INSERT INTO routers(mac,name,location_x,location_y,map_id) VALUES ('".$_POST["mac1"]."','".$_POST["name1"]."','".$_POST["x"]."','".$_POST["y"]."','".$_POST["id"]."')";

openConnection();
echo perform_query($qqquery);
closeConnection();
?>