<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File upload</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h1>File upload</h1>
<?php
    echo "<h2>Štruktúra adresára</h2>"
?>

<table>
    <thead>
        <tr>
            <th>Názov</th>
            <th>Veľkosť</th>
            <th>Čas</th>
        </tr>
    </thead>
    <tbody>
    <?php

        $files = scandir("uploads");
        foreach ($files as $file)
        {

            ?>
            <tr>
                <td><?php echo $file?></td>
                <td></td>
                <td></td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>
<hr>
<h2>Formulár pre upload</h2>
<form action="upload.php" enctype="multipart/form-data" method="post">
    <div><label for="title">Názov súboru:</label><input type="text" id="title" name="title"></div>
    <div><label for="file">Súbor:</label><input name="fileToUpload" type="file" multiple></div>
    <input type="submit" value="Upload">
</form>

</body>
</html>