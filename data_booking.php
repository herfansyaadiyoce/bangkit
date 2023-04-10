<?php
    $dbh = new PDO ('mysql:host=localhost;dbname=bangkit', 'root');
    $db = $dbh -> prepare ('SELECT * FROM booking');
    $db ->execute();
    $users = $db -> fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($users);
    echo $data;

?>