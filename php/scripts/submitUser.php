
<?php
require '../storedProcedures/phpConnection.php';



    
    $conn;
    
    $post_guess= $_POST['post_guess'];
    $post_diff= $_POST['post_diff'];
    
    echo $post_guess[0][0];
    echo $post_diff[0][0];
    
    //$stmt = $conn->prepare('INSERT INTO `catFaces` (`leftGuess1`, `rightGuess1`, `leftGuess2`, `rightGuess2`, `leftGuess3`, `rightGuess3`, `leftGuess4`, `rightGuess4`, `leftGuess5`, `rightGuess5`, `leftGuess6`, `rightGuess6`, `leftGuess7`, `rightGuess7`, `leftGuess8`, `rightGuess8`, `leftGuess9`, `rightGuess9`, `leftGuess10`, `rightGuess10`, `leftGuess11`, `rightGuess11`, `leftGuess12`, `rightGuess12`, leftDiff1`, `rightDiff1`, leftDiff2`, `rightDiff2`, leftDiff3`, `rightDiff3`, leftDiff4`, `rightDiff4`, leftDiff5`, `rightDiff5`, leftDiff6`, `rightDiff6`, leftDiff7`, `rightDiff7`, leftDiff8`, `rightDiff8`, leftDiff9`, `rightDiff9`, leftDiff10`, `rightDiff10`, leftDiff11`, `rightDiff11`, leftDiff12`, `rightDiff12`) 
			//VALUES (:leftGuess1, :rightGuess1, :leftGuess2, :rightGuess2, :leftGuess3, :rightGuess3, :leftGuess4, :rightGuess4, :leftGuess5, :rightGuess5, :leftGuess6, :rightGuess6, :leftGuess7, :rightGuess7, :leftGuess8, :rightGuess8, :leftGuess9, :rightGuess9, :leftGuess10, :rightGuess10, :leftGuess11, :rightGuess11, :leftGuess12, :rightGuess12, :leftDiff1, :rightDiff1, :leftDiff2, :rightDiff2, :leftDiff3, :rightDiff3, :leftDiff4, :rightDiff4, :leftDiff5, :rightDiff5, :leftDiff6, :rightDiff6, :leftDiff7, :rightDiff7, :leftDiff8, :rightDiff8, :leftDiff9, :rightDiff9, :leftDiff10, :rightDiff10, :leftDiff11, :rightDiff11, :leftDiff12, :rightDiff12)');
	
    //$stmt->bindValue(':leftGuess1', $post_guess);
    //$stmt->bindValue(':rightGuess1', $post_guess);

    //$stmt->execute();
    

    


