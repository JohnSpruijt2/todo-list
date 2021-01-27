<section id="listSection">
        <?php  
            foreach ($listData as $data) {
                $itemsData = getItemsFromList($data['id']);
        ?>
        <div class="notAboveAndBelow">
        <div class="list"><h1><a class="check" href="?page=EditList&id=<?= $data['id']; ?>"><?= $data['name']?></a></h1>
            <div class="itemsDiv">
        <?php foreach ($itemsData as $items) { ?>
                <div  class="item">
                    <a class="check" href="php/controller/quickcomplete.php?id=<?= $items['id']; ?>"><i class="far fa<?php if ($items['completed'] == 'true') { echo '-check'; } ?>-square"></i></a>
                    <a class="itemName" href="?page=detail&id=<?= $items['id']; ?>"><?= $items['name']; ?></a>
                </div>
        <?php } ?>
        
            </div>
            <div class="createBtn">
            <button id="createBtn" onclick="location.href='?page=CreateItem&id=<?= $data['id']; ?>'"><i class="fas fa-plus"></i> <a>Create new task</a></button>
            </div>
        </div>
        </div>
        <?php } ?>
        <div class="notAboveAndBelow">
        <div class="createListDiv">
        <button id="createBtn" onclick="location.href='?page=CreateList'"><i class="fas fa-plus"></i> <a>Create new List</a></button>
        </div>
        </div>
</section>