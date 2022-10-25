<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Affichage</h2>

    <?php 
    echo 'bonjour'
    ?>

    <h2> Variables</h2>

    <?php
    $prenom = "Melvin";
    $nom = "Guellaff";
    echo $prenom;
    echo "<br>";
    echo $nom;
    ?>
    
    <h2> Conditions</h2>

    <?php
    $a = false;
    if($a = true) {
        echo 'ca marche';
    } else if($a = false) {
        echo 'ca marche pas';
    }
    ?>

    <h2>Concaténation</h2>

    <?php
    $a = 'bonjour';
    $nom = 'Guellaff';

    echo $a . " " . $nom;

    ?>

<h2> Boucle</h2>

<?php
    for ($i = 0; $i <= 5; $i++) {
        echo "tour numero : $i <br>";
    }
?>

<h2> Include</h2>
<?php
    include('php.php');
?>

<h2>Tableaux</h2>

<?php
$liste = array('rouge', 'bleu', 'jaune', 'vert');
print_r($liste);
var_dump($liste);
?>
</body>
</html>