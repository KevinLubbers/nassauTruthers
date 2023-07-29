<!DOCTYPE html>   
<div class="framePageWrap">
    <header>
        <h1>Memes</h1>
    </header>
    
    <div id="memeContainer">
    <?php
require '../php/storedProcedures/phpConnection.php'; 
    $conn;
   
    $stmt = $conn->prepare("SELECT * FROM memes ORDER BY `memes`.`memeID` ASC;");
       
    $stmt->execute();
	
    $rows = $stmt->fetchAll();
	
        
    foreach($rows as $input){
        if ($input['typeVideo'] != 0){
            echo "<div class='singleMeme'>";
            echo "<video width='".$input['width']."' height='".$input['height']."' controls>";
            echo "<source src='".$input['memeURL']."' type='video/mp4'>";
            echo "</video>";
            echo "</div>";
        }
        else{
            echo "<div class='singleMeme'>";
            echo "<img src='".$input['memeURL']."' width='".$input['width']."' height='".$input['height']."' />";
            echo "</div>";
        }
    }
    
    ?>
    </div>
</div>


    
