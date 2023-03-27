<?php 
include 'config.php';

error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $password = ($_POST['password']);
    
 
    if ($password) {
        $sql = "SELECT * FROM user WHERE nama='$nama'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (id, nama, password)
                    VALUES ('$id', '$nama', '$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $id = "";
                $nama = "";
                $_POST['password'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! nama Sudah Terdaftar.')</script>";
        } 
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="login">
    <h3><center>SIGN UP</center> </h3>
        <form action="" method="POST">
            <label>ID</label>
                <input type="id" placeholder="id" class="form" name="id" value="<?php echo $id; ?>" required>
            <label>Nama</label>
                <input type="nama" placeholder="nama" class="form" name="nama" value="<?php echo $nama; ?>" required>
            <label>Password</label>
                <input type="password" placeholder="Password" class="form" name="password" value="<?php echo $_POST['password']; ?>" required>
            <input type="submit" name="submit" class="tombol" value="REGISTER">
            <p class="form">Have Already Account? <a href="login.php">Login </a></p>
        </form>
    </div>
    <div class="right">
        <img src="logo.png">
    </div>
</body>
</html>