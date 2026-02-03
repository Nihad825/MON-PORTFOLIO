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

// Requête SQL pour récupérer les emprunts avec les adhérents et livres
$sql = "
    SELECT e.id_emprunt, e.date_emprunt, e.duree, a.nom AS nom_adherent, a.prenom AS prenom_adherent, l.reference_livre
    FROM emprunts e
    JOIN adherents a ON e.id_adherent = a.id_adherent
    JOIN livres l ON e.reference_livre = l.reference_livre
";

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Emprunts</title>

    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #444; padding: 10px; text-align: center; }
        th { background-color: #e4e4e4; }
        h2 { text-align: center; }
    </style>

</head>
<body>

<h2>Liste des Emprunts</h2>

<table>
    <tr>
        <th>ID Emprunt</th>
        <th>Date Emprunt</th>
        <th>Durée (jours)</th>
        <th>Nom Adhérent</th>
        <th>Prénom Adhérent</th>
        <th>Référence Livre</th>
    </tr>

    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id_emprunt']."</td>";
            echo "<td>".$row['date_emprunt']."</td>";
            echo "<td>".$row['duree']."</td>";
            echo "<td>".$row['nom_adherent']."</td>";
            echo "<td>".$row['prenom_adherent']."</td>";
            echo "<td>".$row['reference_livre']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Aucun emprunt trouvé.</td></tr>";
    }

    mysqli_close($conn);
    ?>

</table>

</body>
</html>