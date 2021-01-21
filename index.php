<?php require 'php/controller/indexController.php';
require 'php/controller/createController.php';
require 'php/controller/editcontroller/php';
require 'php/model/connection.php';
if ($_GET['page'] == null) {
    header("Location: ?page=index");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles/style3.css">
    <script src="https://kit.fontawesome.com/c296bd0381.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body>
    <?php
    $showPage = 'show'.$_GET['page'];
    $showPage();
     ?>
</body>
</html>