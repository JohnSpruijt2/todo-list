<?php 

function connectDb() {
    $servername = 'localhost';
    $database = 'todolist';
    $username = 'root';
    $password = 'mysql';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    return $conn;
}

function getLists() {
    $conn = connectDb();
        try {

            // Zet de query klaar door midel van de prepare method. Voeg hierbij een
         
            $stmt = $conn->prepare("SELECT * FROM list");
        
    
            // Voer de query uit
            $stmt->execute();
    
            // Haal alle resultaten op en maak deze op in een array
            // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
            //daarom gebruiken we hier de fetch functie.
            $result = $stmt->fetchall();
        
    
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;
    return $result;
}

function getListById($listId) {
    $conn = connectDb();
        try {

            // Zet de query klaar door midel van de prepare method. Voeg hierbij een
         
            $stmt = $conn->prepare("SELECT * FROM list where `id`=:listId");
            $stmt->bindParam(":listId", $listId);
    
            // Voer de query uit
            $stmt->execute();
    
            // Haal alle resultaten op en maak deze op in een array
            // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
            //daarom gebruiken we hier de fetch functie.
            $result = $stmt->fetch();
        
    
        }
        catch(PDOException $e){
    
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;
    return $result;
}

function getItemsFromList($listId) {
    $conn = connectDb();
    try {

        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
     
        $stmt = $conn->prepare("SELECT * FROM items where `listid`=:listId");
        $stmt->bindParam(":listId", $listId);
    

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetchall();
    

    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
return $result;
}

function getItemsFromListSortByStatus($listId) {
    $conn = connectDb();
    try {

        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
     
        $stmt = $conn->prepare("SELECT * FROM items where `listid`=:listId ORDER BY completed DESC");
        $stmt->bindParam(":listId", $listId);
    

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetchall();
    

    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
return $result;
}

function getItemsFromListSortByDuration($listId) {
    $conn = connectDb();
    try {

        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
     
        $stmt = $conn->prepare("SELECT * FROM items where `listid`=:listId ORDER BY duration DESC");
        $stmt->bindParam(":listId", $listId);
    

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetchall();
    

    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
return $result;
}

function getItemFromId($itemId) {
    $conn = connectDb();
    try {

        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
     
        $stmt = $conn->prepare("SELECT * FROM items where `id`=:itemId");
        $stmt->bindParam(":itemId", $itemId);
    

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
    

    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
return $result;
}

function quickComplete($id, $compl) {
    var_dump($compl);
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("UPDATE `items` SET `completed`=:complete WHERE `id`=:id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":complete", $compl);
        

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function createItem($listId, $name, $description, $completed, $duration) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("INSERT INTO `items`(`name`, `description`, `completed`, `listid`, `duration`) VALUES (:itemName,:descript,:completed,:listId, :duration)");
        $stmt->bindParam(":itemName", $name);
        $stmt->bindParam(":descript", $description);
        $stmt->bindParam(":completed", $completed);
        $stmt->bindParam(":listId", $listId);
        $stmt->bindParam(":duration", $duration);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function createList($name) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("INSERT INTO `list`(`name`) VALUES (:listName)");
        $stmt->bindParam(":listName", $name);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function editList($listId, $name) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("UPDATE `list` SET `name`=:listName WHERE `id`=:listId");
        $stmt->bindParam(":listName", $name);
        $stmt->bindParam(":listId", $listId);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function editItem($itemId, $name, $description, $completed, $duration) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("UPDATE `items` SET `name`=:itemName,`description`=:descript,`completed`=:completed, `duration`=:duration WHERE `id`=:id");
        $stmt->bindParam(":id", $itemId);
        $stmt->bindParam(":itemName", $name);
        $stmt->bindParam(":descript", $description);
        $stmt->bindParam(":completed", $completed);
        $stmt->bindParam(":duration", $duration);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function removeItem($itemId) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("DELETE FROM `items` WHERE `id`=:id");
        $stmt->bindParam(":id", $itemId);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function removeList($listId) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("DELETE FROM `list` WHERE `id`=:id");
        $stmt->bindParam(":id", $listId);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

function removeItemsWithListId($listId) {
    $conn = connectDb();
    try {
    
        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("DELETE FROM `items` WHERE `listid`=:id");
        $stmt->bindParam(":id", $listId);

        // Voer de query uit
        $stmt->execute();
    
    }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}

?>