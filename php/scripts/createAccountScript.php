<?php
require '../storedProcedures/phpConnection.php';



    
    $conn;
    
    $email = $_POST['account_email'];
    $name = $_POST['account_name'];
    $phone = $_POST['account_phone'];
    $account = $_POST['account_account'];
    $password = password_hash($_POST['account_password'], PASSWORD_DEFAULT);

/*    $email = json_decode($_POST['email']);
    $name = json_decode($_POST['name']);
    $phone = json_decode($_POST['phone']);
    $account = json_decode($_POST['account']);
    $password = json_decode($_POST['password']);
    
  */  
    
    $stmt = $conn->prepare('INSERT INTO `userAccounts` (`userEmail`, `userName`, `phone`, `accountName`, `accpw`) 
			VALUES (:email, :name, :phone, :account, :accpw)' );
	
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':account', $account);
    $stmt->bindValue(':accpw', $password);

    $stmt->execute();
    


