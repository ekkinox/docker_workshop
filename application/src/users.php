<?php

try {

    $dbh = new PDO('mysql:host=mysql;dbname=ekkinox', 'root', 'root');
    echo 'OK, connected !<br/>';

    $sql = 'SELECT id, name FROM users';
    $results = $dbh->query($sql);

    if (!empty($results)) {
        foreach  ($dbh->query($sql) as $row) {
            echo $row['id'] . ' - ' . $row['name'] . "<br/>";
        }
    } else {
        echo 'No users found.';
    }


} catch (PDOException $e) {

    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();

}
