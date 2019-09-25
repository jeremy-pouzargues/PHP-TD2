<?php


    $id = $_POST['Id'];
    $civ = $_POST['Civ'];
    $mail = $_POST['Mail'];
    $mdp = $_POST['Mdp'];
    $cmdp = $_POST['CMdp'];
    $tel = $_POST['Tel'];
    $pays = $_POST['Pays'];
    $cg = $_POST['CG'];
    $action = $_POST['action'];

    if ($action == 'Mailer')
    {

    }
    else
    {
        echo'<br/><strong>Bouton non géré!</strong><br/>';
    }
?>