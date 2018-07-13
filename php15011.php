<!DOCTYPE html>
<html>
<body>

<?php
/* 
UŽDAVINYS
15
Sukurkite su phpMyAdmin bent 15 automobilių greičių įrašų.
Parašykite programą, kuri išvestų įrašus puslapiais po 10.
Padarykite, kad būtų du mygtukai “Pirmyn” ir/arba “Atgal” vaikščiojimui per
puslapius.
*/
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Auto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `radars` LIMIT 10,15 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Laikas: ". $row["date"]. " - Autonumeris: " . $row["number"] . " - Atstumas: " . $row["distance"] . 
        " - Laikas: " . $row["time"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
<button><a href="php1501.php" class="button">Atgal</a></button>
<button><a href="php15011.php" class="button">Pirmyn</a></button>
</body>
</html>