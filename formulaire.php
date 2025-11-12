<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="enregistrement.php">
    <label for="">Nom du joueur</label>
    <input type="text" name="nom"><br><br>

    <label for="">Prenom du joueur</label>
    <input type="text" name="prenom"><br><br>

    <label for="">Date de naissance</label>
    <input type="date" name="date"><br><br>

    <label for="">Nationalite</label>
    <input type="text" name="nationalite"><br><br>

    <label for="">Sport pratique</label>
    <select name="sport" id="">
        <option value="basketball">Basketball</option>
        <option value="football">Football</option>
        <option value="volleyball">Volleyball</option>
        <option value="handball">Handball</option>
    </select><br><br>

    <label for="">Equipe</label>
    <input type="text" name="equipe"><br><br>

    <button>ENREGISTRER</button>
    </form><br><br>

    <table border="1">
        <tr>
            <th>Nom du joueur</th>
            <th>Prenom du joueur</th>
            <th>Date de naissance</th>
            <th>Nationalite</th>
            <th>Sport pratique</th>
            <th>Equipe</th>
        </tr>
    <?php
    include("./connexion.php");
    $selection = $connexion -> prepare("SELECT * FROM joueur");
    $selection -> execute();
    $array_joueur = $selection ->fetchAll();
    $nb_joueur = count($array_joueur);
    for($i=0; $i < $nb_joueur; $i++){
    ?>
    <tr>
        <td><?php echo $array_joueur[$i]["nom_joueur"] ?></td>
        <td><?php echo $array_joueur[$i]["prenom_joueur"] ?></td>
        <td><?php echo $array_joueur[$i]["date_de_naissance"] ?></td>
        <td><?php echo $array_joueur[$i]["nationalite"] ?></td>
        <td><?php echo $array_joueur[$i]["sport_pratique"] ?></td>
        <td><?php echo $array_joueur[$i]["equipe"] ?></td>
    </tr>
    <?php
    }?> 
    </table>
</body>
</html>