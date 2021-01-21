<?php

function showEditList() {
    $list = getListById($_GET['id']);
    var_dump($list);
    if ($_POST["name"] == null) {
    
    } else {
        if ($_POST['name'] != $list['name']) {
            editList($_GET['id'], $_POST['name']);
        }
        header("Location: index.php?page=index");
    }
    showIndex();
    require 'php/view/editList.php';
    } 

?>