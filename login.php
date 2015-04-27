<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
    $connect = mysql_connect("localhost", "pesNicola", "scimmia742") or die("Nessuna connessione a DB");
    mysql_select_db("amm14_pesNicola") or die("Il DB non e' stato trovato");

    $query = mysql_query("SELECT * FROM user WHERE username='$username'");

    $numrows = mysql_num_rows($query);

    if ($numrows !== 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }

        if ($username == $dbusername && $password == $dbpassword) {
            echo "Sei stato loggato!";
            @$_SESSION['username'] = $username;
        } else
            echo "Password Errata! Riprova";
    } else 
        die("Quest'username non e' registrato");
    }else
    die("Inserisci username e password.");
    
    ?>
