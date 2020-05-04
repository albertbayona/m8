<?php
    include('DB_Connection.php');

    $task = $_REQUEST['task'];

    if (strlen(trim($task)) > 0) {
        $task = trim($task);
        $query = $dbconn->prepare('INSERT INTO tasks (task) VALUES (:task);');

        $query->bindParam(":task", $task, PDO::PARAM_STR);
        $query->execute();
        header ("Refresh:0; url=../html/index.html");
    }
    else {
        $message = "Por favor, rellene el formulario antes de enviar";
        echo $message;
    }
?>