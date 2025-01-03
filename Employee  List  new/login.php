<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "employee";
session_start();

$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
    $result = mysqli_prepare($data, $sql);
    
    
    mysqli_stmt_bind_param($result, "ss", $username, $password);

    mysqli_stmt_execute($result);

    $result = mysqli_stmt_get_result($result);

  
    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "user")
     {
        $_SESSION["username"]=$username;

        header("location:index.php");
    } 
    elseif ($row["usertype"] == "admin")
     {
        $_SESSION["username"]=$username;
        header("location:index.php");
    }
     else 
     {
        echo "Username or password incorrect";
    }


}

mysqli_close($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="text-center"> <h3>Welcome back</h3> </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>