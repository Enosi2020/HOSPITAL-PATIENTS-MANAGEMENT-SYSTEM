<?php
include 'connection.php';

$full_name = $_POST['full_name'] ?? '';
$gender = $_POST['gender'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$disease = $_POST['disease'] ?? '';

$sql = "INSERT INTO patients (full_name, gender, age, phone, address, disease) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $gender, $age, $phone, $address, $disease);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Patient Registered Successfully";
        echo "<br><a href='view_patients.php'>View Patients</a>";
    } else {
        echo "Error execution: " . mysqli_stmt_error($stmt);
    }
    
    mysqli_stmt_close($stmt);
} else {
    echo "Error processing query: " . mysqli_error($conn);
}
?>
