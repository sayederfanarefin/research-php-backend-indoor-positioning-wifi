<?php
require_once "db.php";
openConnection();

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $folder = "uploads/";
      $expensions= array("jpeg","jpg","png");
      
      if(empty($errors)==true) {

         move_uploaded_file($file_tmp,  $folder.$file_name);
         
      }else{
         print_r($errors);
      }
   }

$url = "http://demo.sayederfanarefin.info/thesis_indoor_wifi/uploads/".$file_name;
perform_query("INSERT INTO maps(map_image_url,map_name)VALUES('$url','$file_name')");
// echo $file_tmp;

$select_path="select * from maps";

$var=perform_query($select_path);

closeConnection();
header("Location: show_map.php");
		 die();
?>