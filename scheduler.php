<?php
session_start();
if ($_SESSION['name'] == '') {
    header('Refresh: 0; URL = ./');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Expenzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <?php include("./includes/header.php") ?>
        <h2 class="username">Scheduler</h2>
    </div>
    <script src="js/script.js"></script>
</body>

</html>