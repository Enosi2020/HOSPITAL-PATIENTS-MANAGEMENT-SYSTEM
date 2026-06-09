<?php
include 'connection.php';

$result = mysqli_query($conn, "SELECT * FROM patients");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patients List</title>
</head>
<body>

<h2>Registered Patients</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Disease</th>
    <th>Date</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['patient_id']; ?></td>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['disease']; ?></td>
    <td><?php echo $row['registration_date']; ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>