<?php

function showEditList() {
    if ($_GET['id'] == null) {
        header("Location: ?page=index");
    }
    $list = getListById($_GET['id']);
    if ($_POST["name"] == null) {
    
    } else {
        if ($_POST['name'] != $list['name']) {
            editList($_GET['id'], $_POST['name']);
        }
        header("Location: ?page=index");
    }
    showIndex();
    require 'php/view/editList.php';
    } 

function showEditItem() {
    if ($_GET['id'] == null) {
        header("Location: ?page=index");
    }
    $item = getItemFromId($_GET['id']);
    if ($_POST["name"] == null) {
    
    } else {
        if ($_POST['name'] != $list['name'] || $_POST['description'] != $item['description'] || $_POST['completed'] != $item['completed']) {
            editItem($_GET['id'], $_POST['name'], $_POST['description'], $_POST['completed']);
        }
        header("Location: ?page=index");
    }
    showIndex();
    require 'php/view/editItem.php';
}

?>