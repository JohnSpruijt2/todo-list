<div class="background"> 
    <div class="createDiv">
        <button onclick="location.href='?page=index'"><i class="far fa-times-circle"></i></button>
        <form action="" method="post">
            <h1>Create new list</h1>
            <input type="text" name="name" value="<?= $list['name']; ?>"><br><br>
            <button onclick='location.href="?page=deleteList&id=<?= $_GET["id"]; ?>"'>delete list</button> <br>
            <input type="submit" value="confirm edit">
        </form>
        
    </div>
</div>