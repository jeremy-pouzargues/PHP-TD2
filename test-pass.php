<?php
    include 'utils.inc.php';
    include 'base.php';
    $log = $_POST['Log'];
    $pwd = $_POST['Pwd'];
    if (login($log,$pwd))
        header('Location: page2.php');
    else
        header('Location: login.php?step=ERROR');

?>