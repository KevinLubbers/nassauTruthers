<?php
require '../storedProcedures/phpConnection.php';


$conn;
   
        $stmt = $conn->prepare("SELECT * FROM forum ORDER BY `forum`.`postID` DESC;");
       
	$stmt->execute();
	
	$rows = $stmt->fetchAll();
	
        
	foreach($rows as $input){
            $stmt = $conn->prepare('SELECT * FROM forumReply WHERE postID="'.$input['postID'].'" ORDER BY `forumReply`.`replyID` ASC;');
       
            $stmt->execute();
	
            $innerRows = $stmt->fetchAll();
            
            echo "<div class='forumPost'>";
                echo "<div class='postTitle'>".$input['postTitle']."</div>";
                echo "<div class='postText'>".$input['postText']."</div>";
                echo "<div class='replyText'>";
                foreach($innerRows as $innerInput){
                    echo "<div class='".$innerInput['replyID']."'>".$innerInput['date']."</div>";
                    echo "<div class='text'>".$innerInput['replyComment']."</div>";
                }
                echo "</div>";
                echo "<button id='replyButton'>Reply</button>";
            echo "</div>";
            
	}
    




?>