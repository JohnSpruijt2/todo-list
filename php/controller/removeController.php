<?php

function showremoveItem() {
    removeItem($_GET['id']);
    header("Location: ?page=index");
}

function showremoveList() {
    removeList($_GET['id']);
    removeItemsWithListId($_GET['id']);
    header("Location: ?page=index");
}


?>