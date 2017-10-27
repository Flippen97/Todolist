<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODOLIST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    require 'pdo.php';

    require 'session_message.php';

?>
<div class="row">
<div class="col-xs-4"></div>
    <div class="col-xs-4 addform">
    <form action="add.php" method="POST">
    
    <p class="add-p"><label for="Title">Title:</label></p>

    <input type="text" name="Title" placeholder="Titel of todo:" required>
    
    <p class="add-p"><label for="Name">Name:</label></p>
    
    <input type="text" name="Name" placeholder="Enter your name:" required>
    
    <p class="add-p"><label for="Prio">Priority:</label></p>
    
    <input type="text" name="Prio" placeholder="0-10" required>
    <br>
    <button type="submit" class="btn btn-default" value="Add New">Add new</button>
    
    </form>
    
    <form action="index.php" method="POST">
       <button type="submit" name="Id-DESC" class="btn btn-default">By ID-Desc</button>
      
       <button type="submit" name="Prio" class="btn btn-default">By Priority</button>
        
    </form>
    </div>
</div>

<div class="row">

<?php
    
    if(isset($_POST['Prio'])){
    $statement = $pdo->prepare("SELECT * FROM Todos WHERE Completed = 0 ORDER BY Priority DESC");
    }
    elseif(isset($_POST['Id-DESC'])){
    $statement = $pdo->prepare("SELECT * FROM Todos WHERE Completed = 0 ORDER BY id DESC");}
    else{
      $statement = $pdo->prepare("SELECT * FROM Todos WHERE Completed = 0 ORDER BY id DESC");  
    }
	$statement->execute();
	$todos = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($todos as $Todos){
    require 'print_todo.php';
        
 } ?>
   </div>
   <div class="row">
<?php
      
    if(isset($_POST['Prio'])){
    $statement = $pdo->prepare("SELECT * FROM Todos WHERE Completed = 1 ORDER BY Priority DESC");
    }
    elseif(isset($_POST['Id-DESC'])){
    $statement = $pdo->prepare("SELECT * FROM Todos WHERE Completed = 1 ORDER BY id DESC");}
    else{
      $statement = $pdo->prepare("SELECT * FROM Todos WHERE Completed = 1 ORDER BY id DESC");  
    }
	$statement->execute();
	$todos = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($todos as $Todos){
       require 'print_todo_comp.php';
     }?>
  </div>
</body>
</html>
