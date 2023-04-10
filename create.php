<?php
include 'connection.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {
    $name= isset($_POST['name']) && !empty($_POST['name']) && $_POST['name'] != 'auto' ? $_POST['name'] : NULL;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $Service = isset($_POST['Service']) ? $_POST['Service'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $stmt = $pdo->prepare('INSERT INTO booking VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $number, $Service, $message]);

    $msg = 'Berhasil message';
}
?>
<div class="content update">
	<center><h2>Isi data</h2>
    <form action="create.php" method="post">
        <table border="2">
    <tr>
        <td> <label for="name">name</label></td></br>
        <td><input type="text" name="name" id="name"></td>
    </tr>   
    <tr>
    </br> <td><label for="number">number</label></td></br>
        <td><input type="text" name="number" id="number"></td>
    </tr>

    <tr>
    </br><td><label for="Service">Service</label></td></br>
        <td><input type="text" name="Service" id="Service"></td>
    </tr>

    <tr>
    </br><td><label for="message">message</label></td></br>
        <td><input type="text" name="message" id="message"></td>
    </tr>
</table>
        <input type="submit" value="message">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

