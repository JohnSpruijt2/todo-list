<?php 

function showIndex() {
    $listData = getLists();
    require 'php/view/index.php';
}

function getItemsController($id) {
    if ($_GET["sort"] == "status") {
        $itemsData = getItemsFromListSortByStatus($data['id']);
    }
}

?>