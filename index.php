<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> <!-- Your custom CSS -->
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to the User Dashboard</h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>