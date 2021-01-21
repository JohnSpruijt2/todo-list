<section id="listSection">
        <?php  
            foreach ($listData as $data) {
                $itemsData = getItemsFromList($data['id']);
        ?>
        <div class="list"><h1><?= $data['name']?></h1>
            <div class="itemsDiv">
        <?php foreach ($itemsData as $items) { ?>
                <div class="item">
                    <a class="check" href="php/controller/quickcomplete.php?id=<?= $items['id']; ?>"><i class="far fa<?php if ($items['completed'] == 'true') { echo '-check'; } ?>-square"></i></a>
                    <a><?= $items['name'] ?></a>
                </div>
        <?php } ?>
        
            </div>
            <div class="createBtn">
            <button onclick="location.href='?page=CreateItem&id=<?= $data['id']; ?>'"><i class="fas fa-plus"></i> <a>Create new task</a></button>
            </div>
        </div>
        <?php } ?>

        <div class="createListDiv">
        <button onclick="location.href='?page=CreateList'"><i class="fas fa-plus"></i> <a>Create new List</a></button>
        </div>
</section>