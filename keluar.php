<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>logout</title>
    <link rel="stylesheet" href="kode.css">
</head>
<body bgcolor="black">
    <div class="logout">
        <form action="logout.php" method="POST" class="form">
            <?php echo "<h2>APAKAH ANDA YAKIN UNTUK LOGOUT DARI AKUN, " . $_SESSION['username'] ."?". "</h2>"; ?>
           <br> <input type="submit" name="submit" class="tombol" value="LOGOUT">
            </div>
        </form>
    </div>
</body>
</html>