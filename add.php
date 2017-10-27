<?php
require 'pdo.php';
session_start();

if (isset($_POST['Title']) && isset($_POST['Name']) && isset($_POST['Prio'])){
     
         require 'pdo.php';
         $statement = $pdo->prepare("SELECT COUNT(Title) AS row FROM Todos WHERE Title = :title");

         $statement->execute(array(
             ":title" => $_POST["Title"]));

         $Taken = $statement->fetch(PDO::FETCH_ASSOC);

         if($Taken['row'] > 0){
			$_SESSION['Error'] = 'Title alredy exist!';
            header('Location: index.php');
            return;			
				}
         else {
        $sql ="INSERT INTO Todos(Title, CreatedBy, Priority) 
                VALUES (:title, :Name, :Prio)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
        ':title' => $_POST['Title'],
        ':Name' => $_POST['Name'],
        ':Prio' => $_POST['Prio']));
        $_SESSION['success'] = 'Task was created';
        header('Location: index.php');
        return;
         }
     }

