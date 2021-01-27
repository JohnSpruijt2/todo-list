<div class="background">
    <div class="detailDiv">
        <button id="exit" onclick="location.href='?page=index'"><i class="far fa-times-circle"></i></button>
        <h1><?= $item['name']; ?></h1>
        <p><?= $item['description']; ?></p>
        <button onclick="location.href='?page=editItem&id=<?= $item['id']; ?>'">edit item</button>
        <button onclick="location.href='?page=removeItem&id=<?= $item['id']; ?>'">remove item</button>
    </div>
</div>
