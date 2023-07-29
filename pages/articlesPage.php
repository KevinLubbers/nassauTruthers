<!DOCTYPE html>   
<div class="framePageWrap">
    <header>
        <h1>Articles</h1>
    </header>
    
    <dialog id="articleModal">
        <form class="modalForm" method="dialog" onsubmit="modalArticleReply(this)">
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
    
    <?php
require '../php/storedProcedures/phpConnection.php'; 

    $conn;
    
    $stmt = $conn->prepare("SELECT * FROM article ORDER BY `article`.`articleID` DESC;");
       
    $stmt->execute();
	
    $rows = $stmt->fetchAll();
	
        
    foreach($rows as $input){
        $stmt = $conn->prepare('SELECT * FROM articleReply WHERE articleID="'.$input['articleID'].'" ORDER BY `articleReply`.`articleReplyID` ASC;');
        $stmt->execute();
	$innerRows = $stmt->fetchAll();
        
        
        
        echo "<div class='singleArticle'>";
        echo "<img src='".$input['imgURL']."'  />";
        echo "<h2>".$input['articleTitle']."</h2>";
        echo "<div>". nl2br(htmlspecialchars_decode($input['articleText']), ENT_QUOTES) ."</div>";
        echo "<button onclick='articleModalClick(this.name)' name='".$input['articleID']."' id='replyButton'>Reply</button>";
        echo "</div>";
        foreach($innerRows as $innerInput){
            
            echo "<div class='textTitle' id='".$innerInput['articleReplyID']."'>".$innerInput['date']."</div>";
            echo "<div class='text'>".nl2br(htmlspecialchars_decode($innerInput['articleReplyComment'], ENT_QUOTES))."</div>";
        }
    }
    
    ?>
        

</div>
    
