<? function showCreateItem() {
if ($_GET["id"] == null) {
    header("Location: index.php?page=index");
} 
if ($_POST["name"] != null) {
    if ($_POST["completed"] == null) {
        $complete = 0;
    } else {
        $complete = 1;
    }
    if ($_POST["duration"] == null) {
        $_POST["duration"] = 0;
    }
    createItem($_GET["id"], $_POST["name"], $_POST["description"], $complete, $_POST["duration"]);
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