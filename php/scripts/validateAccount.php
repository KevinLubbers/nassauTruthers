<?php
require '../storedProcedures/phpConnection.php';

$conn;
$returnVal;

    $account = $_GET['account_account'];
    
    $stmt = $conn->prepare('SELECT COUNT(accountName) AS found FROM userAccounts 
			WHERE accountName = :account');
	
    $stmt->bindValue(':account', $account);

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

