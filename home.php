<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Online Voting System</h1>
        <p>User: <?php echo $_SESSION['user']; ?></p>
        <h3>No groups available right now.</h3>
        <a href="logout.php"><button>Logout</button></a>
    </div>
</body>
</html>
