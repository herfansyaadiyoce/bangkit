<?php
function cek_data($username, $password){ 
    require_once "bacalogin.php";

    foreach($data1 as $row):
        if ( $row["username"] == $username && $row["password"] == $password){
            $_SESSION['username'] = $username;
            return header('Location: index.html');
        }
    endforeach;
}
?>