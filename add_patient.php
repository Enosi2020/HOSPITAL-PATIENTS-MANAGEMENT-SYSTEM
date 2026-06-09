<!DOCTYPE html>
<html>
<head>
    <title>Register Patient</title>
</head>
<body>

<h2>Patient Registration Form</h2>

<form action="save_patient.php" method="POST">

Full Name:
<input type="text" name="full_name" required><br><br>

Gender:
<select name="gender">
    <option>Male</option>
    <option>Female</option>
</select><br><br>

Age:
<input type="number" name="age" required><br><br>

Phone:
<input type="text" name="phone"><br><br>

Address:
<input type="text" name="address"><br><br>

Disease:
<input type="text" name="disease"><br><br>

<input type="submit" value="Register Patient">

</form>

</body>
</html>