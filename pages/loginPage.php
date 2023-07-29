<!DOCTYPE html>
<?php require_once '../layoutUI/form.php'; ?>
    
<div class="framePageWrap">
    <header>
        <h1>Login</h1>
    </header>
    
    <div class="gridWrapLogin">
        
            
                <button type="button" name="createAccountFormButton" class="signButton" onclick="toggleForm('createAccountForm')">Create New Account</button>
                <button type="button" name="loginFormButton" class="signButton" onclick="toggleForm('loginForm')">Sign Into Your Account</button>
            
            
         
        <form method='POST' class='loginForm' name='createAccountForm' enctype='multipart/form-data' style='display:none;' onsubmit='return checkForm(this.name)' >
            <h3>Create Account Form</h3>
            <div><label>Email:</label></div>
            <input type='email' name='account_email' id='createEmail' required class="loginInput" onfocusout="validateCreateAccountMail()" placeholder='Enter Your Email Address' />
            <div><label>Name:</label></div>
            <input type='text' name='account_name' id='createName' required class="loginInput" placeholder='Enter Your Name' />
            <div><label>Phone Number:</label></div>
            <input type='text' name='account_phone' id='createPhone' required class="loginInput" placeholder='Enter Your Phone Number' />
            <div><label>Account:</label></div>
            <input type='text' name='account_account' id='createAccount' required class="loginInput" onfocusout="validateAccount()" placeholder='Enter Account Name' />
            <div><label>Password:</label></div>
            <input type='password' name='account_password' id='createPassword' required class="loginInput" placeholder='Enter Your Password' />
            <div><label>Re Type Password:</label></div>
            <input type='password' name='account_retype' id='createRepeat' required class="loginInput" placeholder='Re Enter Your Password' />
            <input type='submit' name='account_button' class='submitButton' id='accButton' />
        </form>
        <form method='POST' class='loginForm' name='loginForm' enctype='multipart/form-data' style='display:none;' onsubmit='return checkForm(this.name)' >
            <h3>Login Form</h3>
            <div><label>Account:</label></div>
            <input type='text' name='login_account' id='loginAccount' class="loginInput" required placeholder='Enter Account Name' />
            <div><label>Password:</label></div>
            <input type='password' name='login_password' id='loginPassword' class="loginInput" required placeholder='Enter Account Password' />
            <input type='submit' class='submitButton' id='loginButton' />
        </form>
        
        
     </div>       
    
      

</div>
    
