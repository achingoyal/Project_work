<?php 
include('inc_dbcon.php');

$sql = "SELECT id, cat, location, title FROM gallery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["cat"]. " " . $row["location"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>