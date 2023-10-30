<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement du formulaire</title>
</head>
<body>
    <h1>Informations du club</h1>
    <?php
    // Vérifiez si les données nécessaires sont présentes
    if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['adresse']) && isset($_POST['domaine'])) {
    ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>Domaine</th>
            </tr>
            <tr>
                <td><?php echo $_POST['id']; ?></td>
                <td><?php echo $_POST['nom']; ?></td>
                <td><?php echo $_POST['description']; ?></td>
                <td><?php echo $_POST['adresse']; ?></td>
                <td><?php echo $_POST['domaine']; ?></td>
            </tr>
        </table>
    <?php
    } else {
        echo "Champs manquants";
    }
    ?>
</body>
</html>