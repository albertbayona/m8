<?php
    include('DB_Connection.php');

    $id = $_REQUEST['id'];

    $query = $dbconn->prepare('DELETE FROM tasks WHERE id = :id;');
    $query->bindParam(":id", $id, PDO::PARAM_STR);
    $query->execute();


?>