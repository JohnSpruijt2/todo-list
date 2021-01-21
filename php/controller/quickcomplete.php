<?php 

require '../model/connection.php';
$result = getItemsFromId($_GET["id"]);
if ($result["completed"] == "true") {
    $trueOrFalse = 'false';
} elseif ($result["completed"] == "false") {
    $trueOrFalse = 'true';
}
quickComplete($_GET["id"], $trueOrFalse);
header("Location: ../../");

?>