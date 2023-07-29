
<?php
require '../storedProcedures/phpConnection.php';



    
    $conn;
    
    $post_guessL1= $_POST['post_guessL1'];
    
    $post_guessR1= $_POST['post_guessR1'];
    $post_guessL2= $_POST['post_guessL2'];
    $post_guessR2= $_POST['post_guessR2'];
    $post_guessL3= $_POST['post_guessL3'];
    $post_guessR3= $_POST['post_guessR3'];
    $post_guessL4= $_POST['post_guessL4'];
    $post_guessR4= $_POST['post_guessR4'];
    $post_guessL5= $_POST['post_guessL5'];
    $post_guessR5= $_POST['post_guessR5'];
    $post_guessL6= $_POST['post_guessL6'];
    $post_guessR6= $_POST['post_guessR6'];
    $post_guessL7= $_POST['post_guessL7'];
    $post_guessR7= $_POST['post_guessR7'];
    $post_guessL8= $_POST['post_guessL8'];
    $post_guessR8= $_POST['post_guessR8'];
    $post_guessL9= $_POST['post_guessL9'];
    $post_guessR9= $_POST['post_guessR9'];
    $post_guessL10= $_POST['post_guessL10'];
    $post_guessR10= $_POST['post_guessR10'];
    $post_guessL11= $_POST['post_guessL11'];
    $post_guessR11= $_POST['post_guessR11'];
    $post_guessL12= $_POST['post_guessL12'];
    $post_guessR12= $_POST['post_guessR12'];
    $post_diffL1= $_POST['post_diffL1'];
    $post_diffR1= $_POST['post_diffR1'];
    $post_diffL2= $_POST['post_diffL2'];
    $post_diffR2= $_POST['post_diffR2'];
    $post_diffL3= $_POST['post_diffL3'];
    $post_diffR3= $_POST['post_diffR3'];
    $post_diffL4= $_POST['post_diffL4'];
    $post_diffR4= $_POST['post_diffR4'];
    $post_diffL5= $_POST['post_diffL5'];
    $post_diffR5= $_POST['post_diffR5'];
    $post_diffL6= $_POST['post_diffL6'];
    $post_diffR6= $_POST['post_diffR6'];
    $post_diffL7= $_POST['post_diffL7'];
    $post_diffR7= $_POST['post_diffR7'];
    $post_diffL8= $_POST['post_diffL8'];
    $post_diffR8= $_POST['post_diffR8'];
    $post_diffL9= $_POST['post_diffL9'];
    $post_diffR9= $_POST['post_diffR9'];
    $post_diffL10= $_POST['post_diffL10'];
    $post_diffR10= $_POST['post_diffR10'];
    $post_diffL11= $_POST['post_diffL11'];
    $post_diffR11= $_POST['post_diffR11'];
    $post_diffL12= $_POST['post_diffL12'];
    $post_diffR12= $_POST['post_diffR12'];
    
   
    
    $stmt = $conn->prepare('INSERT INTO `catFaces` (`leftGuess1`, `rightGuess1`, `leftGuess2`, `rightGuess2`, `leftGuess3`, `rightGuess3`, `leftGuess4`, `rightGuess4`, `leftGuess5`, `rightGuess5`, `leftGuess6`, `rightGuess6`, `leftGuess7`, `rightGuess7`, `leftGuess8`, `rightGuess8`, `leftGuess9`, `rightGuess9`, `leftGuess10`, `rightGuess10`, `leftGuess11`, `rightGuess11`, `leftGuess12`, `rightGuess12`, `leftDiff1`, `rightDiff1`, `leftDiff2`, `rightDiff2`, `leftDiff3`, `rightDiff3`, `leftDiff4`, `rightDiff4`, `leftDiff5`, `rightDiff5`, `leftDiff6`, `rightDiff6`, `leftDiff7`, `rightDiff7`, `leftDiff8`, `rightDiff8`, `leftDiff9`, `rightDiff9`, `leftDiff10`, `rightDiff10`, `leftDiff11`, `rightDiff11`, `leftDiff12`, `rightDiff12`) 
			VALUES (:leftGuess1, :rightGuess1, :leftGuess2, :rightGuess2, :leftGuess3, :rightGuess3, :leftGuess4, :rightGuess4, :leftGuess5, :rightGuess5, :leftGuess6, :rightGuess6, :leftGuess7, :rightGuess7, :leftGuess8, :rightGuess8, :leftGuess9, :rightGuess9, :leftGuess10, :rightGuess10, :leftGuess11, :rightGuess11, :leftGuess12, :rightGuess12, :leftDiff1, :rightDiff1, :leftDiff2, :rightDiff2, :leftDiff3, :rightDiff3, :leftDiff4, :rightDiff4, :leftDiff5, :rightDiff5, :leftDiff6, :rightDiff6, :leftDiff7, :rightDiff7, :leftDiff8, :rightDiff8, :leftDiff9, :rightDiff9, :leftDiff10, :rightDiff10, :leftDiff11, :rightDiff11, :leftDiff12, :rightDiff12)');
	
    $stmt->bindValue(':leftGuess1', $post_guessL1);
    $stmt->bindValue(':rightGuess1', $post_guessR1);
    $stmt->bindValue(':leftGuess2', $post_guessL2);
    $stmt->bindValue(':rightGuess2', $post_guessR2);
    $stmt->bindValue(':leftGuess3', $post_guessL3);
    $stmt->bindValue(':rightGuess3', $post_guessR3);
    $stmt->bindValue(':leftGuess4', $post_guessL4);
    $stmt->bindValue(':rightGuess4', $post_guessR4);
    $stmt->bindValue(':leftGuess5', $post_guessL5);
    $stmt->bindValue(':rightGuess5', $post_guessR5);
    $stmt->bindValue(':leftGuess6', $post_guessL6);
    $stmt->bindValue(':rightGuess6', $post_guessR6);
    $stmt->bindValue(':leftGuess7', $post_guessL7);
    $stmt->bindValue(':rightGuess7', $post_guessR7);
    $stmt->bindValue(':leftGuess8', $post_guessL8);
    $stmt->bindValue(':rightGuess8', $post_guessR8);
    $stmt->bindValue(':leftGuess9', $post_guessL9);
    $stmt->bindValue(':rightGuess9', $post_guessR9);
    $stmt->bindValue(':leftGuess10', $post_guessL10);
    $stmt->bindValue(':rightGuess10', $post_guessR10);
    $stmt->bindValue(':leftGuess11', $post_guessL11);
    $stmt->bindValue(':rightGuess11', $post_guessR11);
    $stmt->bindValue(':leftGuess12', $post_guessL12);
    $stmt->bindValue(':rightGuess12', $post_guessR12);
    $stmt->bindValue(':leftDiff1', $post_diffL1);
    $stmt->bindValue(':rightDiff1', $post_diffR1);
    $stmt->bindValue(':leftDiff2', $post_diffL2);
    $stmt->bindValue(':rightDiff2', $post_diffR2);
    $stmt->bindValue(':leftDiff3', $post_diffL3);
    $stmt->bindValue(':rightDiff3', $post_diffR3);
    $stmt->bindValue(':leftDiff4', $post_diffL4);
    $stmt->bindValue(':rightDiff4', $post_diffR4);
    $stmt->bindValue(':leftDiff5', $post_diffL5);
    $stmt->bindValue(':rightDiff5', $post_diffR5);
    $stmt->bindValue(':leftDiff6', $post_diffL6);
    $stmt->bindValue(':rightDiff6', $post_diffR6);
    $stmt->bindValue(':leftDiff7', $post_diffL7);
    $stmt->bindValue(':rightDiff7', $post_diffR7);
    $stmt->bindValue(':leftDiff8', $post_diffL8);
    $stmt->bindValue(':rightDiff8', $post_diffR8);
    $stmt->bindValue(':leftDiff9', $post_diffL9);
    $stmt->bindValue(':rightDiff9', $post_diffR9);
    $stmt->bindValue(':leftDiff10', $post_diffL10);
    $stmt->bindValue(':rightDiff10', $post_diffR10);
    $stmt->bindValue(':leftDiff11', $post_diffL11);
    $stmt->bindValue(':rightDiff11', $post_diffR11);
    $stmt->bindValue(':leftDiff12', $post_diffL12);
    $stmt->bindValue(':rightDiff12', $post_diffR12);

    $stmt->execute();
    
    


