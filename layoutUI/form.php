<?php

function createForm(){
  
    echo "<form method='POST' id='contactForm' enctype='multipart/form-data' onsubmit='return checkForm(this.id)'>\n";
        echo "<div>\n";
        echo "<label>Email:</label>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<input type='email' name='contact_email' id='userEmail' placeholder='yourEmail@gmail.com' minlength='7' onfocusout='validateCommentMail()' required />\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<label>Name:</label>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<input type='text' name='contact_name' id='userName' placeholder='Joey Baggadonuts' minlength='3' required />\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<label>Comment:</label>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<textarea name='contact_comment' id='userComment' placeholder='Enter your comment' rows='5' required ></textarea>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<input type='submit' name='submit' id='commentButton' class='submitButton' />\n";
        echo "</div>\n";
    echo "</form>\n";
}

function createLoginForm(){
    echo "<form method='POST' enctype='multipart/form-data' onsubmit='return checkForm(this)'>\n";
        
        echo "<div>\n";
        echo "<label>Form Type:</label>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<input type='radio' name='formType' value='create'>Create Account</label>\n";
        echo "<input type='radio' name='formType' value='signIn'>Sign In To Account</label>\n";
        echo "</div>\n";
    
        echo "<div>\n";
        echo "<label>Email:</label>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<input type='email' name='userEmail' id='userEmail' placeholder='yourEmail@gmail.com'/>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<label>Name:</label>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<input type='text' name='userName' placeholder='Joey Baggadonuts'/>\n";
        echo "</div>\n";
        
        echo "<div>\n";
        echo "<button name='submit' >Submit</button>\n";
        echo "</div>\n";
    echo "</form>\n";
}

?>




