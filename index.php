<?php
include_once "php/init.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./css/Style.css">
    <link rel="icon" href="img/icon.jpg">
    <title><?php print $title;?></title>
</head>
<body>

    <?php require_once 'partial/header.php';?>



<!-- <?php
print_r($_SESSION['produtos']);
?> -->




    <?php require_once 'partial/footer.php';?>
    <script src="Script/Script.js"></script>
</body>
</html>