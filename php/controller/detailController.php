<?php 

function showdetail() {
    if ($_GET["id"] == null) {
        header("Location: ?page=index");
    } 
    $item = getItemFromId($_GET['id']);
    showIndex();
    require 'php/view/detailItem.php';

}

?>