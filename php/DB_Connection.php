<?php
    $dsn = 'mysql:dbname=M08_ToDo;host=localhost';
    $user = "ToDoUser";
    $password = "linuxlinux";

    try {
        $dbconn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo "Error de conexión: ".$e->getMessage();
    }
?>