<?php
include 'connection.php';
$pdo = pdo_connect_mysql();
$page = isset($_GET['name']) && is_numeric($_GET['name']) ? (int)$_GET['name'] : 1;
$records_per_page = 5;

$stmt = $pdo->prepare('SELECT * FROM kue ORDER BY name LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

$num_contacts = $pdo->query('SELECT COUNT(*) FROM booking')->fetchColumn();
?>