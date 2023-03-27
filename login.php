<?php
session_start();
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>LOGIN</h1>
                <p>Responsi Praktikum PWD</p>
                <hr>
                <div class="form-group">
                            <label>ID Admin: </label>
                            <input type="number" name="id" placeholder="Masukan ID admin" class=ïnput-control">
                        </div>

                        <div class="form-group">
                            <label>Password : </label>
                            <input type="password" name="pass" placeholder="Masukan Password" class=ïnput-control">
                        </div>
                        <input type="submit"name="submit" value="Login" class="btn">
                        <a href="register.php">Sign Up</a>
            </form>
            <?php
                if(isset($_POST['submit'])){
                   $id = $_POST['id'];
                   $pass = $_POST['pass'];

                   $cek = mysqli_query($con, "SELECT * FROM user WHERE id = '".$id."' ");
                   if (mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    if($pass == $d ->password){
                        $_SESSION['status_login']  = true;
                        $_SESSION['id']          = $d->id;
                        $_SESSION['unama']         = $d->nama;

                        echo "<script>window.location = 'index.php'</script>";
                    }else{
                        echo "<script>alert('Password Salah')</script>";
                    }
                    
                   }else{
                    echo "<script>alert('ID Tidak Ditemukan')</script>";
                   }   
                }      
            ?>

        </div>
        <div class="right">
            <img src="logo.png">
        </div>
    </div>
    
</body>
</html>