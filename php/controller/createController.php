<? function showCreateItem() {
if ($_GET["id"] == null) {
    header("Location: index.php?page=index");
} 
if ($_POST["name"] != null) {
    if ($_POST["completed"] == null) {
        createItem($_GET["id"], $_POST["name"], $_POST["description"], "false", $_POST["duration"]);
    } else {
        createItem($_GET["id"], $_POST["name"], $_POST["description"], "true", $_POST["duration"]);
    }
    header("Location: index.php?page=index");
}
showIndex();
require 'php/view/createItem.php';
} 

function showCreateList() {
    if ($_POST["name"] != null) {
        createList($_POST["name"]);
        header("Location: index.php?page=index");
    }
    showIndex();
    require 'php/view/createList.php';
    } 
?>