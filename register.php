<!DOCTYPE html>
<html>
<head>
    <title>REGISTER</title>
    <link rel="stylesheet" href="kode.css">
</head>
<body bgcolor="black">
    <div class="login">
    <h3><center>REGISTRASI</center> </h3>
        <form action="" method="POST">
            <label>Username</label>
                <input type="username" placeholder="Username" class="form" name="username" value="<?php echo $username; ?>" required>
            <label>Alamat</label>
                <input type="alamat" placeholder="Alamat" class="form" name="alamat" value="<?php echo $alamat; ?>" required>
            <label>Password</label>
                <input type="password" placeholder="Password" class="form" name="password" value="<?php echo $_POST['password']; ?>" required>
            <label>Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class="form" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            <input type="submit" name="submit" class="tombol" value="REGISTER">
            <p class="form">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>