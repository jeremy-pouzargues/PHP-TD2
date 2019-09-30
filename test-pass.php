<?php
    include 'utils.inc.php';
    $log = $_POST['Log'];
    $pwd = $_POST['Pwd'];
    if ($pwd == 'jul')
        header('Location: page2.php');
    else
        start_page('Erreur');

    echo '<hr/><br/><strong>Erreur</strong><br/><br/><hr/>';

    end_page();
?>