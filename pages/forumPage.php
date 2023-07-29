<!DOCTYPE html>
<?php

require '../php/storedProcedures/phpConnection.php';



?>
<div class="framePageWrap">
    <header>
        <h1>Forum</h1>
    </header>
    
    <dialog id="replyModal">
        <form class="modalForm" method="dialog" onsubmit="modalReply(this)">
            <div>
            <label>
                Post ID:
                <input type="text" name="modalPostID" id="replyPostID" readonly />
            </label>
            </div>
            <div>
            <label>
                Reply:
                <textarea rows="7" cols="55" name="modalPostReply" id="replyPostText" placeholder="Add Text Here" required autofocus ></textarea>
            </label>
            </div>
            <div>
            <button id="cancelBtn" type="button">Cancel</button>
            <button id="submitBtn" type="submit">Submit</button>
            </div>
        </form>
    </dialog>
    
    <dialog id="createModal">
        <form class="modalForm" method="dialog" onsubmit="modalCreate(this)">
            <div>
            <label>
                New Title:
                <textarea rows="2" cols="55" name="modalPostTitle" id="createPostTitle" placeholder="Add Text Here" minlength="12" required autofocus ></textarea>
                
            </label>
            </div>
            <div>
            <label>
                New Thread Text:
                <textarea rows="7" cols="55" name="modalPostText" id="createPostText" placeholder="Add Text Here" minlength="12" required></textarea>
            </label>
            </div>
            <div>
            <button id="cancelCreateBtn" type="button">Cancel</button>
            <button id="submitBtn" type="submit">Submit</button>
            </div>
        </form>
    </dialog>
    
<?php $conn;
   
        $stmt = $conn->prepare("SELECT * FROM forum ORDER BY `forum`.`postID` DESC;");
       
	$stmt->execute();
	
	$rows = $stmt->fetchAll();
	
        
	foreach($rows as $input){
            $stmt = $conn->prepare('SELECT * FROM forumReply WHERE postID="'.$input['postID'].'" ORDER BY `forumReply`.`replyID` ASC;');
       
            $stmt->execute();
	
            $innerRows = $stmt->fetchAll();
            
            echo "<div class='forumPost'>";
            echo "<button onclick='modalClickCreate()' name='createBtn' id='createButton'>Create New Thread</button>";
            echo "<button onclick='modalClick(this.name)' name='".$input['postID']."' id='replyButton'>Reply</button>";
                echo "<div class='postTitle'>". nl2br(htmlspecialchars_decode($input['postTitle'], ENT_QUOTES))."</div>";
                echo "<div class='postDate'>".$input['date']."</div>";
                echo "<div class='postText'>". nl2br(htmlspecialchars_decode($input['postText'], ENT_QUOTES))."</div>";
                echo "<div class='replyText'>";
                foreach($innerRows as $innerInput){
                    echo "<div class='textTitle' id='".$innerInput['replyID']."'>".$innerInput['date']."</div>";
                    echo "<div class='text'>".nl2br(htmlspecialchars_decode($innerInput['replyComment'], ENT_QUOTES))."</div>";
                }
                echo "</div>";
                echo "<button onclick='modalClick(this.name)' name='".$input['postID']."' id='replyButton'>Reply</button>";
            echo "</div>";
            
	}
        
?>        

            
    

</div>
    
