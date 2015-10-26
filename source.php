<?php


include "koneksi.php";


$req = "SELECT UPPER(name)AS name,continent_code FROM countries WHERE name LIKE '%".$_REQUEST['term']."%' LIMIT 20 ";

$query = mysqli_query($mysqli, $req);

while($row = mysqli_fetch_array($query))
{
	$results[] = array('label' => $row['name'],
	                   'con' => $row[continent_code]);
}

echo json_encode($results);
?>