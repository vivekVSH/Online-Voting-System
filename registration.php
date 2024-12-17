<?php
include('db_connect.php');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "INSERT INTO users (name, mobile, password, address, role, image)
            VALUES ('$name', '$mobile', '$password', '$address', '$role', '$image')";
    if ($conn->query($sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form method="POST" enctype="multipart/form-data">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Mobile</label>
            <input type="text" name="mobile" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Address</label>
            <input type="text" name="address" required>

            <label>Image</label>
            <input type="file" name="image" required>

            <label>Role</label>
            <select name="role">
                <option value="voter">Voter</option>
            </select>

            <button type="submit" name="register">Register</button>
            <p>Already a user? <a href="index.php">Login here</a></p>
        </form>
    </div>
</body>
</html>
