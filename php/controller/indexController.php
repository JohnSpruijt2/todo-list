<?php 

function showIndex() {
    $listData = getLists();
    require 'php/view/index.php';
}

?>