<?php
require '../storedProcedures/phpConnection.php';

$conn;
$returnVal;

    $email = $_GET['contact_email'];
    
    $stmt = $conn->prepare('SELECT COUNT(userEmail) AS found FROM userComments 
			WHERE userEmail = :email');
	
    $stmt->bindValue(':email', $email);

    $stmt->execute();
    $rows = $stmt->fetchAll();


    foreach($rows as $input){
        $returnVal = $input['found'];
    }
    echo $returnVal;
    
    if($returnVal > 0){
        return 1;
    }
    else{
       return 0;
    }
                
                