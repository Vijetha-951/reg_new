
<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> <!-- Your custom CSS -->
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST['login'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            require_once('database.php');
            $sql="SELECT * FROM users WHERE email='$email'";
            $result=mysqli_query($conn,$sql);
            $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($user){
                if(password_verify($password,$user['password'])){
                    session_start();
                    $_SESSION["user"]="yes";

                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }
        }
    

        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Email:" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter Password:" >
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Login" name="login">
            </div> <!-- Close form-btn div here -->
            </form>
            <div><p>Not Registered yet<a href="registration.php">Register Here</a></p></div>

            </div>
    
</body>
</html>