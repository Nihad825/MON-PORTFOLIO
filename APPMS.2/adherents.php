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

// Requête SQL pour récupérer les adhérents
$sql = "SELECT id_adherent, nom, prenom, date_naissance, date_adhesion, adresse, num_tel, mail FROM adherents";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Adhérents</title>

    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 90%; margin: auto; }
        th, td { border: 1px solid #444; padding: 10px; text-align: center; }
        th { background-color: #e4e4e4; }
        h2 { text-align: center; }
    </style>

</head>
<body>

<h2>Liste des Adhérents</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de Naissance</th>
        <th>Date d'Adhésion</th>
        <th>Adresse</th>
        <th>Numéro de Téléphone</th>
        <th>Email</th>
    </tr>

    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id_adherent']."</td>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['prenom']."</td>";
            echo "<td>".$row['date_naissance']."</td>";
            echo "<td>".$row['date_adhesion']."</td>";
            echo "<td>".$row['adresse']."</td>";
            echo "<td>".$row['num_tel']."</td>";
            echo "<td>".$row['mail']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>Aucun adhérent trouvé.</td></tr>";
    }

    mysqli_close($conn);
    ?>

</table>

</body>
</html>
