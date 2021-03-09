<span id="sortSpan">
<a> sort by: </a><a class="sortBtn" href="?page=index&sort=status">status</a> <a class="sortBtn" href="?page=index&sort=duration">duration</a> <a class="sortBtn" href="?page=index">reset</a>
</span>
<section id="listSection">
        <?php  
            foreach ($listData as $data) {
                $itemsData = getItemsController($data['id'])
        ?>
        
        <div class="notAboveAndBelow">
        <div class="list"><h1><a class="check" href="?page=EditList&id=<?= $data['id']; ?>"><?= $data['name']?></a></h1>
            <div class="itemsDiv">
        <?php foreach ($itemsData as $items) { ?>
                <div  class="item">
                    <a class="check" href="php/controller/quickcomplete.php?id=<?= $items['id']; ?>"><i class="far fa<?php if ($items['completed'] == 1) { echo '-check'; } ?>-square"></i></a>
                    <a class="itemName" href="?page=detail&id=<?= $items['id']; ?>"><?= $items['name']; ?></a> 
                    <br> <br>
                    <a class="durationTxt"><?= $items['duration'];?> min</a>
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
        <button id="createBtn" onclick="location.href='?page=CreateList'"><i class="fas fa-plus"></i> <a>Create new List</a></button> <a href=""></a>
        </div>
        </div>
</section>