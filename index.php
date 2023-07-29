<!DOCTYPE html>
<?php
    require_once './layoutUI/navBar.php';
    require_once './layoutUI/content.php';
    require_once './layoutUI/footer.php';
    
    
?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.nassautruthers.com/scripts/functionz.js?last=21"></script>
    <meta name="viewport" content="width=device-width, initial-scale=0.76, maximum-scale=5.0, minimum-scale=0.76">
    <title>Nassau Truthers</title>
    
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap">
    <link rel="stylesheet" type="text/css" href="https://www.nassautruthers.com/css/uiStylezz.css?last=32">
    
    
    
    <!--FavIcon Style Sheets + img source-->
    <link rel="apple-touch-icon" sizes="180x180" href="./imgs/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imgs/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imgs/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./imgs/favicon_io/manifest.json">
    
   
</head>

<body id="mainBody">

    <div id="scrollBar">
        <div id="scrollThumb" ><i class="material-icons" style='font-size:3vh;color:white;display:flex;justify-content: center;'>adjust</i></div>
    </div>
    

       
<div id="pageWrap">
     
<?php
    createNavBar();
?>
 
<div id="contentWindow">
 
</div>
    
   
    
</div>
<div class="ocean">  
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
</div>     
   
</body>


</html>
