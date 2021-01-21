<?php 
require 'php/model/connection.php';

function showIndex() {
    $listData = getLists();
    require 'php/view/index.php';
}

?>