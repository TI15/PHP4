<?php
$title ="Alla medlemmar";
include("header.php");
include("dbcon.php");

if($con = connect_db()) {
	$sql ="select namn, telefon from medlem";
	$result = $con->query($sql);
	if($result->num_rows > 0) {
		echo "<ul>";
		while($row = $result->fetch_assoc()) {
			echo "<li>Namn : <b>" . $row['namn'] . "</b> telefon :<b>" . $row['telefon']. "</b></li>"; 
		}
		echo "</ul>";
	}
}


include("footer.php");
?>