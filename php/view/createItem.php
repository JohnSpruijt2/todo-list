<div class="background">
    <div class="createDiv">
        <button id="exit" onclick="location.href='?page=index'"><i class="far fa-times-circle"></i></button>
        <form action="" method="post">
            <h1>Create new item</h1>
            <label for="name">Name:</label><br>
            <input type="text" name="name"><br><br>
            <label for="name">description:</label><br>
            <textarea name="description" rows="4" cols="50" maxlength="200"></textarea> <br>
    
            <label for="name">Duration in minutes:</label><br>
            <input type="number" name="duration" id="duration"> <br>

            <input type="checkbox" id="completed" name="completed" value="true">
            <label for="completed"> completed</label><br>

            <input id="confirm" type="submit" value="Create">
        </form>
    </div>
</div>
