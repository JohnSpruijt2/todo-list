<?php 

require '../model/connection.php';
$result = getItemFromId($_GET["id"]);
if ($result["completed"] == "true") {
    $trueOrFalse = 'false';
} elseif ($result["completed"] == "false") {
    $trueOrFalse = 'true';
}
quickComplete($_GET["id"], $trueOrFalse);
header("Location: ../../");

?>