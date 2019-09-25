<?php
    $dbLink = mysqli_connect("mysql-jeremy-pouzargues.alwaysdata.net"
        ,"189628","tdphp83")
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink,"jeremy-pouzargues_db")
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT id, email, date FROM user';
    echo "$query";
?>