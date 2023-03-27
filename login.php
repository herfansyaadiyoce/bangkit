<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="kode.css">
</head>
<body bgcolor="black">
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="login">
    <h3><center>LOGIN</center> </h3>
        <form action="" method="POST">
            <label>Username</label>
                <input type="username" name="username" class="form" placeholder="Username" value="<?php echo $username; ?>" required>
            
            <label>Password</label>
                <input type="password" name="password" class="form" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>        
                <input type="submit" name="submit" class="tombol" value="LOGIN">
             <br/>
			<br/>
            <p class="form">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>