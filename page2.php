<?php
include 'utils.inc.php';
session_start();
if($_SESSION['login']!='ok')
{
    die('Erreurd\'authentification');
}
?>


<?php
start_page('page2');


echo '<hr/><br/><strong>Page 2</strong><br/><br/><hr/>';
echo '<br/>';




end_page();
?>