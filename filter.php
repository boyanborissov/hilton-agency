<?php 
session_start();

$query = "SELECT * FROM property_description";
$conditions = array();

if (isset($_GET['bevHillsCheckbox'])) {
$conditions[] = "location='".$_GET['bevHillsCheckbox']."'";
$_SESSION['isBevHillsChecked'] = "checked";
}

if (isset($_GET['belAirCheckbox'])) {
$conditions[] = "location='".$_GET['belAirCheckbox']."'";
$_SESSION['isBelAirChecked'] = "checked";
}

if (isset($_GET['hollHillsCheckbox'])) {
$conditions[] = "location='".$_GET['hollHillsCheckbox']."'";
$_SESSION['isHollHillsChecked'] = "checked";
}

if (isset($_GET['oneBedCheckbox'])) {
$conditions[] = "beds='".$_GET['hollHillsCheckbox']."'";
$_SESSION['isHollHillsChecked'] = "checked";
}


$sql = $query;
if (count($conditions) > 0) {
$sql .= " WHERE " . implode(' OR ', $conditions);
}

$_SESSION["sqlFilter"] = $sql . " ORDER BY location";
echo $_SESSION["sqlFilter"];

header('Location: properties.php');
?>