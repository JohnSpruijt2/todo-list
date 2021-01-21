<? function showCreateItem() {
if ($_GET["id"] == null) {
    header("Location: index.php?page=index");
} 
if ($_POST["name"] == null) {

} else {
    if ($_POST["completed"] == null) {
        createItem($_GET["id"], $_POST["name"], $_POST["description"], "false");
    } else {
        createItem($_GET["id"], $_POST["name"], $_POST["description"], "true");
    }
    header("Location: index.php?page=index");
    
}

require 'php/view/createItem.php';
} ?>