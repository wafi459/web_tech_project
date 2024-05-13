<!DOCTYPE html>
<html><body>
<?php


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "my_app";


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT property_name , price ,location , details  FROM PROPERTY";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
       echo "<fieldset >"."<table>"."<tr>"."<td >"."<b>"."Property Name: "."</b>" . $row["property_name"]."</td>". "<td>"."<b>"."  Price: " ."</b>".$row["price"]."</td>"."</tr>";
       echo  "<tr>". "<td>"."<b>". "  Location: " ."</b>". $row["location"]. "</td>"."<td>". "<b>"."  Property Details: " ."<b>". $row["details"]. "</td>";
       echo "</tr>"."</table>"."</fieldset>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
