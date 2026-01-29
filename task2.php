<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cruda_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}

$sql ="SELECT id, name, email, password, contact, gender FROM usertbl";
$result= $conn->query($sql);

if ($result->num_rows > 0){
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Contact</th>
    <th>Gender</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>". $row["id"]. "</td>
        <td>". $row["name"]. "</td>
        <td>". $row["email"]. "</td>
        <td>". $row["password"]. "</td>
        <td>". $row["contact"]. "</td>
        <td>". $row["gender"]. "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>