<?php
    include('DB_Connection.php');

    $query = $dbconn->prepare('SELECT * FROM tasks;');
    $query->execute();

    $tasks = '';

    while ($row = $query->fetch()) {
        $tasks.= '<p><button type="button" id="'.$row['id'].'" class="button_eliminar">X</button>'.$row['task'].'</p>';
    }


    echo $tasks;
?>
