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

$selectedBeds = isset($_GET['beds']) ? $_GET['beds'] : array();
$where = '';
foreach ($selectedBeds as $beds) {
  $range = explode('-', $beds);
  $where .= "beds BETWEEN {$range[0]} AND {$range[1]} OR ";
}

$where = rtrim($where, ' OR ');
if (!empty($where)) {
  $query .= " WHERE $where";
}


$selectedBaths = isset($_GET['baths']) ? $_GET['baths'] : array();
$where = '';
foreach ($selectedBaths as $baths) {
    switch ($baths) {
        case '1':
            $where .= "baths BETWEEN 10 AND 14 OR ";
            break;
        case '2':
            $where .= "baths BETWEEN 15 AND 19 OR ";
            break;
        case '3':
            $where .= "baths BETWEEN 20 AND 24 OR ";
            break;
        case '4':
            $where .= "baths >= 24 OR ";
            break;
        default:
            break;
    }
}

$where = rtrim($where, ' OR ');
if (!empty($where)) {
    $query .= " WHERE $where";
}

$minSize = isset($_GET['minSize']) ? $_GET['minSize'] : null;
$maxSize = isset($_GET['maxSize']) ? $_GET['maxSize'] : null;

$where = '';
if ($minSize && $maxSize) {
  $where .= "size BETWEEN $minSize AND $maxSize";
} elseif ($minSize) {
  $where .= "size >= $minSize";
} elseif ($maxSize) {
  $where .= "size <= $maxSize";
}

if (!empty($where)) {
  $query .= " WHERE $where";
}
$sql = $query;
if (count($conditions) > 0) {
$sql .= " WHERE " . implode(' OR ', $conditions);
}

$_SESSION["sqlFilter"] = $sql . " ORDER BY location";
echo $_SESSION["sqlFilter"];

header('Location: properties.php');
?>