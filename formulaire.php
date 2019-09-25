<?php
    include 'utils.inc.php';
?>


<?php
    start_page('Formulaire');

    echo '<input type="text" name="Id" placeholder="Identifiant" />
          <input type="radio" name="CivH" placeholder="Homme"/>
          <input type="radio" name="CivF" placeholder="Femme"/>
          <input type="text" name="Mail" placeholder="E-Mail"/>
          <input type="password" name="Mdp" placeholder="Mot de passe"/>
          <input type="password" name="CMdp" placeholder="Verification du mot de passe"/>
          <input type="text" name="Tel" placeholder="Téléphone"/>
          <select name="Pays">
            <option value="Allemagne"/> Allemagne </option>
            <option value="Etats-Unis"/> Etats-Unis </option>
            <option value="France"/> France </option>
            <option value="Italie"/> Italie </option>
            <option value="Royaume-Uni"/> Royaume-Uni </option>
          </select>
          <input type="checkbox" name="CG" placeholder="Conditions Générales"/>
          <input type="submit" name="submit" value="Envoyer"/>';



    end_page();
?>