<?php

try {

    $dbh = new PDO('mysql:host=mysql;dbname=ekkinox', 'root', 'root');
    echo 'OK, connected !';

} catch (PDOException $e) {

    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();

}
