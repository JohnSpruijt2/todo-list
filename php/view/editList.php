<div class="background"> 
    <div class="createDiv">
        <button id="exit" onclick="location.href='?page=index'"><i class="far fa-times-circle"></i></button>
        <form action="" method="post">
            <h1>edit list</h1>
            <input type="text" name="name" value="<?= $list['name']; ?>"><br><br>
            
            <input id="confirm" type="submit" value="confirm edit">
        </form> <br>
        <button onclick='location.href="?page=removeList&id=<?= $_GET["id"]; ?>"'>delete list</button> <br>
    </div>
</div>