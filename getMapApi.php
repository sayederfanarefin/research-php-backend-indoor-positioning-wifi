<?php 

	require_once("config.php");
	require_once("db.php");

	$bssid = $_GET["bssid"];
	
	$sql2 = "select map_image_url from maps where map_id = (select map_id FROM routers where mac='".$bssid. "')";
	

	openConnection();
    $result_data = fetch_multiple_result($sql2);

    echo json_encode($result_data);
		
    closeConnection();
?>