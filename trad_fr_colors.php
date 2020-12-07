<?php
$servername = "localhost";
$username = "optieyesproxi548";
$password = "P6O1L238z9i6wYq";
$dbname = "optieyesproxi5489ytg85";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$row = 1;
if (($handle = fopen("colors.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $num = count($data);
   // echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
	
	$sql = "UPDATE lensOptions SET name = '".$data[1]."' WHERE code='".$data[0]."'";
	//$sql = "INSERT INTO `lensOptions` (`id`, `code`, `name`, `sorting`, `antireflex`, `color`, `photocromic`, `hard`, `clean`, `uvAbsorbing`, `mirrored`, `polarised`, `contrastEnhancing`, `remoteEdging`, `specialDiameter`, `specialThickness`, `trad_fr`, `display`) VALUES (NULL, '".$data[0]."', '".$data[1]."', '".$data[2]."', 'NONE', 'COLOR', '0', 'NONE', 'NONE', '0', '0', '0', '0', 'NONE', 'NO', '0', '".$data[3]."', 'X');";
	echo $sql."<br>";
	  
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}
   
  }
  fclose($handle);
}

?>