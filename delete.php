<?php
require 'pdo.php';

session_start();
if (isset($_POST['Delete'])){
    $sql ="DELETE FROM Todos WHERE id = :zip";
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
    ':zip' => $_POST['Delete'] ));
    $_SESSION['success'] = 'Task was deleted';
    header('Location: index.php');
    return;
}
