        $( document ).ready(function() {

                
            $('#contentWindow').load('https://www.nassautruthers.com/pages/homePage.php/');
              
            $('.navBlock').click(function(){
                
                
                loadContent($(this).text());
                
                
            });
            
           
            
            
            
   var userTime = new Date().getHours();
            switch (userTime){
                case 0:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 1:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 2:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    break;
                case 3:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 4:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 5:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 6:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 7:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 8:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 9:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 10:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 11:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 12:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 13:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    
                    break;
                case 14:
                    timeUpdateFrameDay();
                    timeUpdate(userTime);
                    timeUpdateDay();
                    
                    break;
                case 15:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 16:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 17:
                    timeUpdate(userTime);
                    timeUpdateDay();
                    timeUpdateFrameDay();
                    break;
                case 18:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 19:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    break;
                case 20:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 21:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 22:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                    break;
                case 23:
                    timeUpdate(userTime);
                    timeUpdateNight();
                    timeUpdateFrameNight();
                break;
            }        
          
              
        
           
            
});
function unloadContent(){
    
    $('#contentWindow').fadeOut('.75s', function(){
                $('#contentWindow').html("");
            });
}

function loadUnloadContent(result){
    $('#contentWindow').fadeIn('.33s', function(){
                scrollToTop();
                $('#contentWindow').html(result);
            });
}

function loadContent(text){
    //$('#contentWindow').load("http://lubbii.com/pages/" + text.toLowerCase() + "Page.php", function(){scrollToTop();});
    $.ajax({
        type:"GET",
        url:"https://www.nassautruthers.com/pages/" + text.toLowerCase() + "Page.php/",
        beforeSend: unloadContent(),
        success: function(result){
            loadUnloadContent(result);
        }
    });
}


function scrollToTop() {
            window.scrollTo(0, 0);
}
function animateSlide(){
    $(document).ajaxSuccess(function(){
                
                 
               
            });    
   
}            
function timeUpdate(hours){
    let userTime = (hours *60 * -60);
    let insert = "86400s linear " + userTime + "s infinite normal";
    $('#mainBody').css("animation", "color-animation " + insert);
    
}
function timeUpdateNight() {
                    
                    $('#navWrap').css("background", "#161B36");
                    $('.navBlock').css("background", "#0B1026");
                    $('.navBlock').css("color", "white");
                    $('.navBlock').mouseover(function(){
                        $(this).css("background", "#215D6E");
                    }).mouseout(function() {
                        $(this).css("background", "#0B1026");
                    });
                    $('#pageWrap').css("background", "#242B4B");
                    $('#contentWindow').css("background", "#35475F");
                    $('.submitButton').css("background", "#1b2f52");
                    $('.signButton').css("background", "#1b2f52");
  
            }
            
//updates Frame CSS styles after contentWindow load            
function timeUpdateFrameNight() {         
    
}   
            
  //Only updates elements from first Content Window Load - this includes standard UI      
  function timeUpdateDay(){               
                    $('#navWrap').css("background", "#96C0B7");
                    $('.navBlock').css("background", "#e8e8e8");
                    $('.navBlock').css("color", "#9d9a89");
                    $('.navBlock').mouseover(function(){
                        $(this).css("background", "#a3adc1");
                        $(this).css("color", "white");
                        
                    }).mouseout(function() {
                        $(this).css("background", "#e8e8e8");
                        $(this).css("color", "#9d9a89");
                        
                    });
                    $('#pageWrap').css("background", "#D4DFC7");
                    $('#contentWindow').css("background", "#878E88");
                    $('.submitButton').css("background", "#E9D585");
                    $('.signButton').css("background", "#E9D585");
                   
                    
                    
                    
            }
            
function timeUpdateFrameDay() {         
    $('#pictureWrap').css("background", "#aab06d");
    $('.mobileNavPageButtonDay').css("background-color","#161B36");
     //document.querySelector('#contentWindow').style.transform = 'translate(0px)';
}


function showForumPost(){
    const email = $('#userEmail').val();
    
    $.ajax({
	type: "GET",
	url: "php/scripts/forumPost.php",
        data: {
            contact_email: email
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "html",
        success: function(response){
		if(response > 0){
                    $('#userEmail').css({"border": "solid red 2px"});
                }
                else{
                    $('#userEmail').css({"border": "solid green 2px"});
                }
	}
	});
}


function validateCommentMail(){
    const email = $('#userEmail').val();
    
    $.ajax({
	type: "GET",
	url: "php/scripts/validateComment.php",
        data: {
            contact_email: email
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "html",
        success: function(response){
		if(response > 0){
                    $('#userEmail').css({"border": "solid red 2px"});
                }
                else{
                    $('#userEmail').css({"border": "solid green 2px"});
                }
	}
	});
}

function validateCreateAccountMail(){
    const email = $('#createEmail').val();
    
    $.ajax({
	type: "GET",
	url: "php/scripts/validateCreateAccount.php",
        data: {
            account_email: email
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "html",
        success: function(response){
		if(response > 0){
                    $('#createEmail').css({"border": "solid red 2px"});
                }
                else{
                    $('#createEmail').css({"border": "solid green 2px"});
                }
	}
	});
}

function validatePassword(){
    const firstPass = $('#createPassword').val();
    const secondPass = $('#createRepeat').val();
    
    
}

function validateAccount(){
    const account = $("#createAccount").val();
    
    $.ajax({
	type: "GET",
	url: "php/scripts/validateAccount.php",
        data: {
            account_account: account
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "html",
        success: function(response){
		if(response > 0){
                    $('#createAccount').css({"border": "solid red 2px"});
                }
                else{
                    $('#createAccount').css({"border": "solid green 2px"});
                }
	}
	});
    
}

function submitComment(){
    var email = $('#userEmail').val();
    var name = $('#userName').val();
    var comment = $('#userComment').val();
    
    
    $.ajax({
	type: "POST",
	url: "php/scripts/commentScript.php",
        data: {contact_email: email,
            contact_name: name,
            contact_comment:comment
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "text",
        success: function(response){
		alert(response);
	}
	});
    
}

function submitAccount(){
    var email = $('#createEmail').val();
    var name = $('#createName').val();
    var phone = $('#createPhone').val();
    var account = $('#createAccount').val();
    var password = $('#createPassword').val();
    
    
    $.ajax({
	type: "POST",
	url: "php/scripts/createAccountScript.php",
        data: {
            account_email: email,
            account_name: name,
            account_phone: phone,
            account_account: account,
            account_password: password
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "text",
        success: function(response){
		alert(response);
	}
	});
    
}

function submitLogin() {
    var account = $('#loginAccount').val();
    var password = $('#loginPassword').val();
    
    
    
    $.ajax({
	type: "GET",
	url: "php/scripts/loginScript.php",
        data: {
            login_account: account,
            login_password: password
        },
	contentType: "application/json; charset=utf-8",
	dataType: "html",
        success: function(response){
		alert(response);
	}
	});
    
}


function checkForm(form){
                             
                             if(confirm("Are you sure you want to submit this form?") === true){
                                
                                if(form === 'contactForm'){
                                    submitComment();
                                }
                                else if(form === 'createAccountForm'){
                                    submitAccount();
                                }
                                else if(form === 'loginForm'){
                                    submitLogin();
                                }
                                
                                 $(form).submit.disabled = true;
                                 //submitComment();
                                 return true;
                                 
                             }
                             else {
                                 $(form).submit.disabled = false;
                                 return false;
                             }
                             
                             
                         }
function mobileNavHome(){
    loadContent("home");
}     

function mobileNavMenu(){
    loadContent("menu");
    //$('#contentWindow').load("http://lubbii.com/pages/menuPage.php");
    //$('#contentWindow').on("click", $('.mobileNavPageButtonDay'), mobileMenu(this));
}     


function mobileMenu(nameText){
    
    loadContent(nameText);
}

function toggleForm(formName) {
					$("[name="+ formName + "]").animate({
                                            opacity: 'toggle'
                                        });
                                        
                                    
                                    
                                    //$(".signButtonToggle");
                                    //$("[name="+ formName + "Button]").prop("disabled", false);    
                                        

}
            
function displayGrid(self){
    (self).children('article').children('div').toggleClass('contentHide');
    (self).children('aside').children('div').toggleClass('contentHide');
    
    
    
    if (self.attr('style') === 'flex: 1 1 100%; color: white; opacity: 1;'){
        (self).css({flex:'1 1 38%', color:'whitesmoke', opacity:'.6'});
    }
    else{
        (self).css({flex:'100%'});
        (self).css({color:'white'});
        (self).css({opacity:'1'});
    }
    
    console.log(self.attr('style'));
            
}

function articleModalClick(name){
    var modal = document.getElementById("articleModal");
    var postID = document.getElementById("replyPostID");
    
    modal.showModal();
    postID.value = name;
    
    $('#cancelBtn').click(function(){
       modal.close(); 
    });
}

function modalClick(name){
    var modal = document.getElementById("replyModal");
    var postID = document.getElementById("replyPostID");
    
    modal.showModal();
    postID.value = name;
    
    $('#cancelBtn').click(function(){
       modal.close(); 
    });
    
}

function modalReply(form) {
    var f = form.modalPostID.value;
    var r = form.modalPostReply.value;
    $.ajax({
	type: "POST",
	url: "php/scripts/forumPostReply.php",
        data: {post_id: f,
            post_reply: r
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "text",
        success: function(response){
		$('#contentWindow').load('https://www.nassautruthers.com/pages/forumPage.php/');
	}
	});
}

function modalArticleReply(form) {
    var f = form.modalPostID.value;
    var r = form.modalPostReply.value;
    $.ajax({
	type: "POST",
	url: "php/scripts/articlePostReply.php",
        data: {post_id: f,
            post_reply: r
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "text",
        success: function(response){
		$('#contentWindow').load('https://www.nassautruthers.com/pages/articlesPage.php/');
	}
	});
}

function modalClickCreate(){
    var modal = document.getElementById("createModal");
    
    
    modal.showModal();
    
    
    $('#cancelCreateBtn').click(function(){
       modal.close(); 
    });
    
}

function modalCreate(form) {
    var f = form.modalPostTitle.value;
    var r = form.modalPostText.value;
    $.ajax({
	type: "POST",
	url: "php/scripts/forumPostCreate.php",
        data: {post_title: f,
            post_text: r
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "text",
        success: function(response){
		$('#contentWindow').load('https://www.nassautruthers.com/pages/forumPage.php/');
	}
	});
}
        
        

            
            
            











