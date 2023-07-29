<?php
require '../storedProcedures/phpConnection.php';

$conn;
    
    $account = $_GET['login_account'];
    $password = password_hash($_POST['login_password'], PASSWORD_DEFAULT);

