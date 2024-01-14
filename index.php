<?php
    // connect to db service
    // create connection to sql cluster with mysqli
    $connect = mysqli_connect(
        'db',           // service name
        'php_docker',   // username
        'password',     // password
        'php_docker'    // database name
    );

    // define table name
    $table_name = 'php_docker_table';

    // run a SQL query
    $query = "SELECT * FROM $table_name";

    // await a response
    $response = mysqli_query($connect, $query);

    // return query response to webpage
    echo '<strong>$table_name: </strong>';
    while ($row = mysqli_fetch_assoc($response)) {
        echo "<p>".$row['title']."</p>";
        echo "<p>".$row['body']."</p>";
        echo "<p>".$row['date_created']."</p>";
        echo "<hr>";
    }
?>
