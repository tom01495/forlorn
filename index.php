<?php require_once("function_convertMD.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORLORN</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <!-- title -->
        <div class="flex"><h1>FORLORN</h1><hr class="title"></div>
        <p class="red">FORLORN - Abandoned, deserted, or desolate - Bereft or deprived - Nearly hopeless; desperate.</p>

        <!-- brief description -->
        <p class="black"><?= convertMD("Text/Briefdescription.md") ?></p>

        <!-- background -->
        <h2>Creation of the world</h2>
        <p class="scroll"><?= convertMD("Text/Bulletpoints.md") ?></p>
    </main>
    <script src="index.js"></script>
  </body>
</html>
