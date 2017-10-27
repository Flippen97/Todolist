<?php
    try{
    $pdo = new PDO(
	"mysql:host=localhost;dbname=Todolist;charset=utf8",
		"root",
		"root"
	);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    
    catch(PDOException $e){
    echo $e->getMessage();
    die();
    }
