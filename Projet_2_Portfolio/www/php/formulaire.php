<form action="formulaire.php" method="get">
    
<label>Pseudo :</label>
<input type="text" placeholder="Pseudo" name='pseudo'></input>
<br>
<br>
<label>Mail :</label>
<input type="text" placeholder="Mail" name='mail'></input>
<br>
<br>
<label>Mot de passe :</label>
<input type="text" placeholder="Mot de passe" name='mdp'></input>
<br>
<br>
<label>Numéro de téléphone :</label>
<input type="text" placeholder="Numéro de téléphone" name='tel'></input>
<br>
<br>
<button type="submit" name="submit">Envoyer</button>

</form>

<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_GET['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $nom = $_GET['pseudo']; 
     // afficher le résultat
     echo '<h3>Merci ! Je vous recontacte dès que possible !</h3>'; 
     echo 'Nom : ' . $nom; 
     exit;
  }
?>