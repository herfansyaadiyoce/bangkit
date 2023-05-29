<?php

// include 'config.php';

// error_reporting(0);

// session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];
//     $password = md5($_POST['password']);

//     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//     $result = mysqli_query($conn, $sql);
//     if ($result->num_rows > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['username'] = $row['username'];
//         header("Location: index.php");
//     }
// }
?>

<?php

require_once "init.php";
require_once "lihatdata.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty(trim($password)) && !empty(trim($username))) {
        // if (login_cek_email($username)) {
        //     cek_data($username, $password);
        // } else {
        //     echo "Email belum terdaftar";
        // }
        cek_data($username, $password);
    } else {
        echo "Sorry it can't be empty";
    }
}

// include 'config.php';
// error_reporting(0);
// session_start();
// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];
//     $password = md5($_POST['password']);
//     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//     $result = mysqli_query($conn, $sql);
//     if ($result->num_rows > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['username'] = $row['username'];
//         header("Location: index.php");
//     } else {
//         echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/kode.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>LOGIN</h1>
                <hr>
                <div class="form-group">
                    <label>Username : </label>
                    <input type="username" name="username" class="ïnput-control" placeholder="Masukan Username" required>
                </div>

                <div class="form-group">
                    <label>Password : </label>
                    <input type="password" name="password" placeholder="Masukan Password" class="ïnput-control" required>
                </div>
                <input type="submit" name="submit" value="LOGIN" class="btn">
                <p>Don't have an account? <a href="register.php">Sign Up</a> </p>
            </form>
        </div>
        <div class="right">
            <img src="img/logo.png">
        </div>
    </div>

</body>

</html>