<?php
require 'config.php';
$id = $_GET['id'];
$sql = "UPDATE `components_images` SET `status` = 'register' WHERE `components_images`.`components_id` = $id;";
$result=$connect->query($sql)or die ("Error executing SQL statement".$sql);
if ($result) {
  header("Location: admin_components.php");
} else {
  echo "Error";
}