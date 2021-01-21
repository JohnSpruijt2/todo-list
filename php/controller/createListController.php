<? function showCreateList() {
if ($_POST["name"] == null) {

} else {
    createList($_POST["name"]);
    header("Location: index.php?page=index");
    
}

require 'php/view/createList.php';
} ?>