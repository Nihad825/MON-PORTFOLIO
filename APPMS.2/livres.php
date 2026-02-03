<?php

$host = "localhost";
$user = "root";
$password = "mysql";
$database = "biblio";

$conn = mysqli_connect($host, $user, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Requête SQL pour récupérer tous les livres avec les informations de l'auteur
$sql = "
    SELECT l.reference_livre, l.nbre_pages, l.annee, l.genre, l.disponibilite, l.nbre_emprunts, l.etat, l.nbre_exemplaire,
           a.nom AS nom_auteur, a.prenom AS prenom_auteur
    FROM livres l
    JOIN auteur a ON l.id_auteur = a.id_auteur
";

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Livres</title>

    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 90%; margin: auto; }
        th, td { border: 1px solid #444; padding: 10px; text-align: center; }
        th { background-color: #e4e4e4; }
        h2 { text-align: center; }
    </style>

</head>
<body>

<h2>Liste des Livres</h2>

<table>
    <tr>
        <th>Référence</th>
        <th>Nombre de Pages</th>
        <th>Auteur</th>
        <th>Année</th>
        <th>Genre</th>
        <th>Disponibilité</th>
        <th>Nombre d'emprunts</th>
        <th>État</th>
        <th>Nombre d'exemplaires</th>
    </tr>

    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['reference_livre']."</td>";
            echo "<td>".$row['nbre_pages']."</td>";
            echo "<td>".$row['nom_auteur']." ".$row['prenom_auteur']."</td>";
            echo "<td>".$row['annee']."</td>";
            echo "<td>".$row['genre']."</td>";
            echo "<td>".$row['disponibilite']."</td>";
            echo "<td>".$row['nbre_emprunts']."</td>";
            echo "<td>".$row['etat']."</td>";
            echo "<td>".$row['nbre_exemplaire']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9'>Aucun livre trouvé.</td></tr>";
    }

    mysqli_close($conn);
    ?>

</table>

</body>
</html>