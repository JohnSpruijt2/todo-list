<head>
<link rel="stylesheet" href="../../styles/style2.css">
</head>
<?
if ($_GET["id"] == null) {
    header("Location: ../../");
} 
require '../model/connection.php';
if ($_POST["name"] == null) {

} else {
    if ($_POST["completed"] == null) {
        createItem($_GET["id"], $_POST["name"], $_POST["description"], "false");
    } else {
        createItem($_GET["id"], $_POST["name"], $_POST["description"], "true");
    }
    header("Location: ../../");
    
}
?>
<div class="createDiv">
<form action="" method="post">
    <input type="text" name="name"><br><br>
    <textarea name="description" rows="4" cols="50" maxlength="200"></textarea> <br>
    

    <input type="checkbox" id="completed" name="completed" value="true">
    <label for="completed"> completed</label><br>

    <input type="submit" value="Create">
</form>
</div>