<?php
require '../storedProcedures/phpConnection.php';



    
    $conn;
    
    $post_title = htmlspecialchars(stripslashes(strip_tags($_POST['post_title'])), ENT_QUOTES);
    $post_text = htmlspecialchars(stripslashes(strip_tags($_POST['post_text'])), ENT_QUOTES);
    
    $stmt = $conn->prepare('INSERT INTO `forum` (`postTitle`, `postText`) 
			VALUES (:postTitle, :postText)');
	
    $stmt->bindValue(':postTitle', $post_title);
    $stmt->bindValue(':postText', $post_text);

    $stmt->execute();
    


