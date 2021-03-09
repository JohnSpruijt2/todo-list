<?php 

require '../model/connection.php';
$result = getItemFromId($_GET["id"]);
if ($result["completed"] == 1) {
    $trueOrFalse = 0;
} elseif ($result["completed"] == 0) {
    $trueOrFalse = 1;
}
quickComplete($_GET["id"], $trueOrFalse);
header("Location: ../../index.php?page=index");
?>