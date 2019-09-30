<?php
include 'utils.inc.php';
?>


<?php
start_page('Login');


echo '<hr/><br/><strong>Login</strong><br/><br/><hr/>';
echo '<br/>';

print_r($_GET['step']);
exit();

echo '<form action="test-pass.php" method="post">
            <input type="text" name="Log" placeholder="Login" /> <br/>
            <input type="password" name="Pwd" placeholder="Mot de passe"/> <br/>
            <input type="submit" name="action" value="Ok"/> <br/>
          </form>';



end_page();
?>