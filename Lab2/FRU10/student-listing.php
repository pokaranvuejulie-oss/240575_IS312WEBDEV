<?php
$conn = mysqli_connect("localhost", "root", "", "fru10_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Listing</title>
</head>
<body>

<h2>Student Listing</h2>

<table border="1">
<tr>
    <th>StudentNo</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Gender</th>
    <th>ContactNo</th>
    <th>ProgramCode</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['StudentNo']."</td>";
    echo "<td>".$row['Firstname']."</td>";
    echo "<td>".$row['Lastname']."</td>";
    echo "<td>".$row['Gender']."</td>";
    echo "<td>".$row['ContactNo']."</td>";
    echo "<td>".$row['ProgramCode']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>