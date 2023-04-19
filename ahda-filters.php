<?php 
require 'database/db_login.php'; // Establishing DB connection

// retrieve data 
$type_of_document = isset($_POST['type_of_document']) ? $_POST['type_of_document'] : '';
$geographical_region = isset($_POST['geographical_region']) ? $_POST['geographical_region'] : '';
$plant_name = isset($_POST['plant_name']) ? $_POST['plant_name'] : '';
$dates = isset($_POST['dates']) ? $_POST['dates'] : '';
$themes = isset($_POST['themes']) ? $_POST['themes'] : '';

// build SQL query
$sql = "SELECT * FROM `filters` WHERE ";
$conditions = array();

if (!empty($type_of_document)) {
  $conditions[] = "type_of_document = '$type_of_document'";
}
if (!empty($geographical_region)) {
  $conditions[] = "geographical_region = '$geographical_region'";
}
if (!empty($plant_name)) {
  $conditions[] = "plant_name = '$plant_name'";
}
if (!empty($dates)) {
    $conditions[] = "dates = '$dates'";
  }
  if (!empty($themes)) {
    $conditions[] = "themes = '$themes'";
  }

if (count($conditions) > 0) {
  $sql .= implode(" AND ", $conditions);
} else {
  $sql .= "1"; // select all rows if no filters applied
}

// execute query and fetch results
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// display results or "no results found" message
if (count($results) > 0) {
  foreach ($results as $row) {
    // display each row of data
  }
} 

else {
  echo "<p>Sorry!No results found.</p>";
  echo "<a href='ahda-Archive.php' class='btn btn-primary'>Back to Browse archive!</a>";
  exit; // stop executing the script
}
$conn = null;

?>

