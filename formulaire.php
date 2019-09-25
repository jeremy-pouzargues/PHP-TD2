<?php
    include 'utils.inc.php';
?>


<?php
    start_page('Formulaire');

    echo '<input type="text" name="Id" placeholder="Identifiant" /> <br/>
          <input type="radio" name="CivH" placeholder="Homme"/> <br/>
          <input type="radio" name="CivF" placeholder="Femme"/> <br/>
          <input type="text" name="Mail" placeholder="E-Mail"/> <br/>
          <input type="password" name="Mdp" placeholder="Mot de passe"/> <br/>
          <input type="password" name="CMdp" placeholder="Verification du mot de passe"/> <br/>
          <input type="text" name="Tel" placeholder="Téléphone"/> <br/>
          <select name="Pays">
            <option value="Allemagne"/> Allemagne </option>
            <option value="Etats-Unis"/> Etats-Unis </option>
            <option value="France"/> France </option>
            <option value="Italie"/> Italie </option>
            <option value="Royaume-Uni"/> Royaume-Uni </option>
          </select> <br/>
          <input type="checkbox" name="CG" placeholder="Conditions Générales"/> <br/>
          <input type="submit" name="submit" value="Envoyer"/> <br/>';



    end_page();
?>