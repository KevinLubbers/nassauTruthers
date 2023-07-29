<?php
require '../storedProcedures/phpConnection.php';



    
    $conn;
    
    $post_id = filter_input(INPUT_POST, 'post_id', FILTER_VALIDATE_INT);
    $post_reply = htmlspecialchars(stripslashes(strip_tags($_POST['post_reply'])), ENT_QUOTES);
    
    
    $stmt = $conn->prepare('INSERT INTO `forumReply` (`postID`, `replyComment`) 
			VALUES (:postid, :comment)');
	
    $stmt->bindValue(':postid', $post_id);
    $stmt->bindValue(':comment', $post_reply);

    $stmt->execute();
    


