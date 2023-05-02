<?php

$Option = array(
    "ssl" =>array(
        "verify_peer" => false,
        "verify_peer_name"=>false,
    ),
);

// Tiga link API JSON
$link1 = "https://bangkit-de572-default-rtdb.firebaseio.com/user.json";

// Mengambil data dari setiap link API JSON
$dataApi1 = file_get_contents($link1, false, stream_context_create($Option));


// Mendekode setiap data JSON menjadi array PHP
$data1 = json_decode($dataApi1, true);

?>