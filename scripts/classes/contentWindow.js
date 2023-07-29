  class contentWindow{

constructor(){
        this.windowStack = [];
        this.windowStack[0] = "home";
        this.currentWindow = this.windowStack[0];
        this.previousWindow = null;
    }
setWindowCSS(){

        switch(this.currentWindow){

            case "home": {
                    alert(this.currentWindow);
                break;
            }
            case "about": {
                    alert(this.currentWindow);
                break;
            }
            case "contact": {
                    alert(this.currentWindow);
                break;
            }
            case "portfolio": {
                    alert(this.currentWindow);
                break;
            }
            case "login": {
                    alert(this.currentWindow);
                break;
            }
        }
    }
    
    loadStack(newWindow){
            this.windowStack[1] = this.currentWindow;
            this.previousWindow = this.windowStack[1];
            this.windowStack[0] = newWindow;
            this.currentWindow = this.windowStack[0];
    }
    
    
    

    goToPage(){
        $.ajax({
        type:"GET",
        url:"http://lubbii.com/pages/" + this.currentWindow.toLowerCase() + "Page.php",
        beforeSend: unloadContent(),
        success: function(result){
            
            loadUnloadContent(result);
            
        }
    });
    }

    

}  