<?php 
$hn = 'localhost';
$db = 'faux-metropolitan_museum';
$un = 'harric1';
$pw = 'charr1';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT name,artist FROM object_table JOIN donation_table ON object_table.accession_number=donation_table.accession_number";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j) {
	$result->data_seek($j);
	$row = $result->fetch_row();
	echo $row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>".$row[4]."<br>";
}

$result->close();
$conn->close();
?>

