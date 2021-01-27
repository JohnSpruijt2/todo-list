<div class="background"> 
    <div class="createDiv">
        <button id="exit" onclick="location.href='?page=index'"><i class="far fa-times-circle"></i></button>
        <form action="" method="post">
            <h1>edit item</h1>
            <input type="text" name="name" value="<?= $item['name']; ?>"><br><br>
            <textarea name="description" rows="4" cols="50" maxlength="200"><?= $item['description'] ?></textarea> <br>
    

            <input type="checkbox" id="completed" name="completed" value="true" <?php if ($item['completed'] == true) {echo "checked";} ?>>
            <label for="completed"> completed</label><br>
            

            <input id="confirm" type="submit" value="confirm edit">
        </form>
    </div>
</div>