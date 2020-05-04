<?php
    include('DB_Connection.php');

    $query = $dbconn->prepare('SELECT * FROM tasks;');
    $query->execute();

    $tasks = '<ul>';

    while ($row = $query->fetch()) {
        $tasks.= '<li>'.$row['task'].'<button type="button" id="'.$row['id'].'">Eliminar</button></li>';
    }

    $tasks.= '</ul>';

    echo $tasks;
?>
