<?php
function cek_data($username, $password){
    // global $conn;
    // $username = mysqli_real_escape_string($conn, $username);
    // $password = mysqli_real_escape_string($conn, $password);

    // $query = "SELECT password FROM customer WHERE username = '$username'";

    // $result = mysqli_query($conn, $query);
    // $hash = mysqli_fetch_assoc($result)['password'];

    // if (password_verify($password, $hash)){
    //     $_SESSION['user'] = $username;
    //     header('Location: dashboard.php');
    // }else{
    //     die("Password verification failed");
    // }
    
    // $query = "SELECT * FROM customer WHERE username = '$username'";
    
    // if ( $result = mysqli_query($conn, $query) ){
        //     if (mysqli_num_rows($result) == 0) return true;
        //     else return false;
        // }
    
    require_once "bacalogin.php";

    foreach($data1 as $row):
        if ( $row["username"] == $username && $row["password"] == $password){
            $_SESSION['username'] = $username;
            return header('Location: index.html');
        }
    endforeach;
}
?>