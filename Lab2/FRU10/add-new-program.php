<?php
// Author: Julie Pokaran Vue
// Date: Today
// Unit: IS312

$conn = mysqli_connect("localhost", "root", "", "fru10_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$code = $_POST['ProgramCode'];
$name = $_POST['ProgramName'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName)
        VALUES ('$code', '$name')";

if (mysqli_query($conn, $sql)) {
    echo "Program added successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>