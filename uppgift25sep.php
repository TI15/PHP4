<?php
$title ="Sektioner";
include("header.php");
include("dbcon.php");
if(!isset($_GET['kod'])) {
	if($con = connect_db()) {
		$sql ="select namn, sektionskod from sektion";
		$result = $con->query($sql);
		if($result->num_rows > 0) {
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$namn = $row['namn'];
				$kod = $row['sektionskod'];
				echo "<li>Namn : <a href=?kod=$kod>" . $row['namn']. "</a></li>"; 
			}
			echo "</ul>";
		}
	}
}
else {
	$sek= $_GET['kod'];
	if($con = connect_db()) {
		$sql ="select medlem.namn from deltar, medlem 
			where deltar.medlem = medlem.medlemsnummer 
			and deltar.sektion = '".$sek."'";
		$result = $con->query($sql);
		if($result->num_rows > 0) {
			echo "<ul>";
				while($row = $result->fetch_assoc()) {
					$namn = $row['namn'];
					
					echo "<li>Namn : " . $row['namn']. "</li>";

				}
				echo "</ul>";
				echo "<a href='uppgift25sep.php'>tillbaka</a> ";
		}
	} 
} 


include("footer.php");
?>