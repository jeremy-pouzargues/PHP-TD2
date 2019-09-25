<?php
    include 'utils.inc.php';
?>


<?php
    start_page('Formulaire');

    echo '<input type="text" value="Identifiant"/>
          <input type="radio" value="Civilité"/>
          <input type="text" value="Mail"/>
          <input type="password" value="Mdp"/>
          <input type="password" value="Confirmer Mdp"/>
          <input type="text" value="Téléphone"/>
          <select name="Pays">
            <option value="Allemagne"/> France </option>
            <option value="Etats-Unis"/> France </option>
            <option value="France"/> France </option>
            <option value="Italie"/> France </option>
            <option value="Royaume-Uni"/> France </option>
          </select>
          <input type="checkbox" value="CG"/>
          <input type="submit"/>';



    end_page();
?>