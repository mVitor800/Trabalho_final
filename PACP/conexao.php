<?php
   
   session_start();
   
   $localhost = "localhost";
    $user = "root";
    $passw ="aluno";
    $bd = "agendeclinicpet";

    global $pdo;

    $pdo = new PDO("mysql:host=$localhost; dbname=$bd" , $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->query("SELECT * FROM adm")
    $sql->execute();
?>