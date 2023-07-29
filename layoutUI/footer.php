<?php

function createFooter(){
    echo "<footer id='footerWrap'>";
        echo "<div id='signature'></div>";
        echo "<ul id='linkList'>";
            echo "<li class='linkItem'><a><img src='../imgs/gitLogo.png' />- GitHub</a></li>";
            echo "<li class='linkItem'><a>LinkedIn</a></li>";
        echo "</ul>";
        
        echo "<div id='imgLogoDiv'>";
        echo "<img src='' />";
    echo "</div>";
        
    echo "</footer>";
    
    
}

?>