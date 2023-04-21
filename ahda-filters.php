<?php 
require 'database/db_login.php'; // Establishing DB connection


// filtering variables
$type_of_document = isset($_POST['type_of_document']) ? $_POST['type_of_document'] : array();
$geographical_region = isset($_POST['geographical_region']) ? $_POST['geographical_region'] : array();
$plant_name = isset($_POST['plant_name']) ? $_POST['plant_name'] : array();
$dates = isset($_POST['dates']) ? $_POST['dates'] : '';
$themes = isset($_POST['themes']) ? $_POST['themes'] : array();

// SQL query
$sql = "SELECT * FROM `filters` WHERE 1=1";

if (!empty($type_of_document)) {
  $sql .= " AND type_of_document IN ('" . implode("','", $type_of_document) . "')";
}
if (!empty($geographical_region)) {
  $sql .= " AND geographical_region IN ('" . implode("','", $geographical_region) . "')";
}
if (!empty($plant_name)) {
  $sql .= " AND plant_name IN ('" . implode("','", $plant_name) . "')";
}
if (!empty($dates)) {
  $sql .= " AND dates = :dates";
  }
  if (!empty($themes)) {
    $sql .= " AND themes IN ('" . implode("','", $themes) . "')";
  }

// execute query and fetch results
$stmt = $conn->prepare($sql);
if (!empty($dates)){
  $stmt->bindParam(':dates',$dates);
}

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// output results 
  foreach ($results as $row) {
   echo $row['document_type'] . '<br>';
   echo $row['geographical_region'] . '<br>';
   echo $row['plant_name'] . '<br>';
   echo $row['dates'] . '<br>';
   echo $row['themes'] . '<br>';
  } 


$conn = null;

?>

