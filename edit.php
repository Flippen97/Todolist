<?php
require 'pdo.php';
session_start();
if ( isset($_POST['Whattodo']) && isset($_POST['CreatedBy'])
     && isset($_POST['Edit'])){

    $sql = "UPDATE Todos SET Title = :Title,
            CreatedBy = :Name
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':Title' => $_POST['Whattodo'],
        ':Name' => $_POST['CreatedBy'],
        ':id' => $_POST['Edit']));
    $_SESSION['success'] = 'Todo updated';
    header( 'Location: index.php') ;
    return;
     }