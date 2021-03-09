<?php 

function showIndex() {
    $listData = getLists();
    require 'php/view/index.php';
}

function getItemsController($id) {
    if ($_GET["sort"] == "status") {
        $itemsData = getItemsFromListSortByStatus($id);
    } elseif ($_GET["sort"] == "duration") {
        $itemsData = getItemsFromListSortByDuration($id);
    } else {
        $itemsData = getItemsFromList($id);
    }
    return $itemsData;
}

?>