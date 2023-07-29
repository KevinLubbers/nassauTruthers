<?php
require '../storedProcedures/phpConnection.php';



    
    $conn;
    
    $email = $_POST['contact_email'];
    $name = $_POST['contact_name'];
    $comment = $_POST['contact_comment'];
    
    $stmt = $conn->prepare('INSERT INTO `userComments` (`userEmail`, `userName`, `userComment`) 
			VALUES (:email, :name, :comment)');
	
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':comment', $comment);

    $stmt->execute();
    


