<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_POST['gender'], $_POST['post-surname'], $_POST['post-name'], $_FILES['post-file'])) {
    $cutFileName = explode(".", $_FILES['post-file']['name']);
    $filename = $cutFileName[0];
    $extension = $cutFileName[1];

    ?>

    <p><?= $_POST['gender'] ?></p>
    <p><?= $_POST['post-surname'] ?></p>
    <p><?= $_POST['post-name'] ?></p>
    <p><?= $filename ?></p>
    <p><?= $extension ?></p>

    <?php

    if ('pdf' === strtolower($extension)) {

        ?>

        <p>Le fichier est bien un PDF</p>

        <?php
    }
    else {

        ?>

        <p>Le fichier n'est pas un PDF</p>

        <?php
    }
} else {
    ?>
    <form action="/index.php" method="post">

        <select name="gender" id="gender">
            <option value="male">Mr</option>
            <option value="female">Mme</option>
        </select>

        <label for="id-post-surname">Surname</label>
        <input type="text" name="post-surname" id="id-post-surname">

        <label for="id-post-name">Name</label>
        <input type="text" name="post-name" id="id-post-name">

        <label for="id-post-file">Fichier</label>
        <input type="file" name="post-file" id="id-post-file">

        <input type="submit" value="Post-Submit" name="post-submit" id="id-post-submit">

    </form><?php
} ?>
</body>
</html>