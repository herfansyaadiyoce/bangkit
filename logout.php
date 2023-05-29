<?php
require_once "init.php";
if (isset($_POST['submit'])) {
    header("Location: login.php");
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>logout</title>
    <link rel="stylesheet" href="css/kode.css">
</head>

<body>
    <div class="logout">
        <form action="logout.php" method="POST" class="form">
            <?php echo "<h2>APAKAH ANDA YAKIN UNTUK LOGOUT DARI AKUN, " . $_SESSION['username'] . "?" . "</h2>"; ?>
            <br> <input type="submit" name="submit" class="tombol" value="LOGOUT">
    </div>
    </form>
    </div>
</body>

</html>