<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: beranda.php");
    } else {
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="kode.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>LOGIN</h1>
                <hr>
                <div class="form-group">
                    <label>Username : </label>
                    <input type="username" name="username" class="ïnput-control" placeholder="Masukan Username" value="<?php echo $username; ?>" required>
                </div>

                <div class="form-group">
                    <label>Password : </label>
                    <input type="password" name="password" placeholder="Masukan Password" class="ïnput-control" value="<?php echo $_POST['password']; ?>" required>
                </div>
                <input type="submit"name="submit" value="LOGIN" class="btn">
                <p>Don't have an account? <a href="register.php">Sign Up</a> </p>
            </form>
        </div>
        <div class="right">
            <img src="logobarber.png">
        </div>
    </div>
    
</body>
</html>