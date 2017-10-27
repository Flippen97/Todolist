<?php
require 'pdo.php';
session_start();
if (isset($_POST['Completed'])){
    $sql ="UPDATE Todos SET Completed = '1' WHERE id = :comp";
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
    ':comp' => $_POST['Completed'] ));
    $_SESSION['success'] = 'Task was moved to completed';
    header('Location: index.php');
    return;
}