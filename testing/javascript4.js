const noFaceImages = [
    "Faces_Set/pic1no.JPG",
    "Faces_Set/pic2no.JPG",
    "Faces_Set/pic3no.JPG",
    "Faces_Set/pic4no.JPG",
    "Faces_Set/pic5no.JPG",
    "Faces_Set/pic6no.JPG",
    "Faces_Set/pic7no.JPG",
    "Faces_Set/pic8no.JPG",
    "Faces_Set/pic9no.JPG",
    "Faces_Set/pic10no.JPG",
    "Faces_Set/pic11no.JPG",
    "Faces_Set/pic12no.JPG"
];

const noFaceMeasurements = [
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]]
];

const faceMeasurements = [
    [[249,225],[480,231]],
    [[267,259],[476,269]],
    [[259,274],[468,278]],
    [[269,288],[468,285]],
    [[261,278],[455,282]],
    [[260,250],[485,250]],
    [[262,240],[467,239]],
    [[259,218],[474,221]],
    [[268,239],[462,234]],
    [[269,216],[475,223]],
    [[278,235],[456,232]],
    [[256,233],[475,235]]
];

const faceDiff = [
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]],
    [[0,0],[0,0]]
];

const faceImages = [
    "Faces_Set/pic1.JPG",
    "Faces_Set/pic2.JPG",
    "Faces_Set/pic3.JPG",
    "Faces_Set/pic4.JPG",
    "Faces_Set/pic5.JPG",
    "Faces_Set/pic6.JPG",
    "Faces_Set/pic7.JPG",
    "Faces_Set/pic8.JPG",
    "Faces_Set/pic9.JPG",
    "Faces_Set/pic10.JPG",
    "Faces_Set/pic11.JPG",
    "Faces_Set/pic12.JPG"
];

let currentIndex = 0;


function displayNoFaceImg(){
    const image = document.getElementById("image");
    
    image.src = noFaceImages[currentIndex];
    
    image.addEventListener("click", function(event){
        const x = event.clientX - event.target.offsetLeft - image.parentNode.offsetLeft;
        const y = event.clientY - event.target.offsetTop - image.parentNode.offsetTop;
        
        const dotObject = document.createElement("div");
        dotObject.classList.add("dot");
        
        //const dotObject = document.createElement("img");
        //dotObject.classList.add("dotTest");
        //dotObject.src = "eye.svg";
        
        dotObject.style.left = x + "px";
        dotObject.style.top = y + "px";
        const imageContainer = document.getElementById("faceDiv");
        imageContainer.appendChild(dotObject);
        
        const outputLeft = document.getElementById("clickDisplayLeft");
        const outputRight = document.getElementById("clickDisplayRight");
        if (x < 368){
            
                outputLeft.innerHTML = "<p>Clicked Left Eye at coordinates: " + x + "," + y + "</p>";
                noFaceMeasurements[currentIndex][0] = [x,y];
                
            
           
        }
        else {
           
                outputRight.innerHTML = "<p>Clicked Right Eye at coordinates: " + x + "," + y + "</p>";
                noFaceMeasurements[currentIndex][1] = [x,y];
                
            
        }
        
    });
}

function displayFaceImg(){
    const image = document.getElementById("image");
    image.src = faceImages[currentIndex];
    
    
}

function nextBtn(){
    
    currentIndex++;
    if(currentIndex >= noFaceImages.length){
        currentIndex = (noFaceImages.length - 1);
        
        
    }
    else{
        resetBtn();
    }
    
}

function prevBtn(){
   
   currentIndex--;
    if(currentIndex < 0){
        currentIndex = 0;
    }
    else{
        resetBtn(); 
    }
    
            
}

function resetBtn(){
    displayNoFaceImg();
    const outputLeft = document.getElementById("clickDisplayLeft");
    const outputRight = document.getElementById("clickDisplayRight");
    const controlOutputLeft = document.getElementById("controlDisplayLeft");
    const controlOutputRight = document.getElementById("controlDisplayRight");
    const diffOutputLeft = document.getElementById("diffDisplayLeft");
    const diffOutputRight = document.getElementById("diffDisplayRight");
    const dot = document.getElementsByClassName("dot");
    
    Array.from(dot).forEach(function(dot){
        dot.remove();
    });
    
    outputLeft.innerHTML = "";
    outputRight.innerHTML = "";
    controlOutputLeft.innerHTML = "";
    controlOutputRight.innerHTML = "";
    diffOutputLeft.innerHTML = "";
    diffOutputRight.innerHTML = "";
}

function submitBtn(){
   
    displayFaceImg();
    let leftCell = faceMeasurements[currentIndex][0].toString();
    let rightCell = faceMeasurements[currentIndex][1].toString();
    const outputLeft = document.getElementById("controlDisplayLeft");
    const outputRight = document.getElementById("controlDisplayRight");
    const left = leftCell.split(",");
    const right = rightCell.split(",");
    
        const dotObject = document.createElement("div");
        dotObject.classList.add("dot");
        
        dotObject.style.left = left[0] + "px";
        dotObject.style.top = left[1] + "px";
        const imageContainer = document.getElementById("faceDiv");
        imageContainer.appendChild(dotObject);  
        
        const dotObject2 = document.createElement("div");
        dotObject2.classList.add("dot");
        
        dotObject2.style.left = right[0] + "px";
        dotObject2.style.top = right[1] + "px";
        
        imageContainer.appendChild(dotObject2);  
        outputLeft.innerHTML = "<p>Control Left Eye coordinates: " + leftCell + "</p>";
        outputRight.innerHTML = "<p>Control Right Eye coordinates: " + rightCell + "</p>";
        compareCoords();
        if (currentIndex === (noFaceImages.length - 1)){
            displayData();
            submitUser();
        }
}

function compareCoords(){
    let faceLeftCell = faceMeasurements[currentIndex][0].toString().split(",");
    let faceRightCell = faceMeasurements[currentIndex][1].toString().split(",");
    let noLeftCell = noFaceMeasurements[currentIndex][0].toString().split(",");
    let noRightCell = noFaceMeasurements[currentIndex][1].toString().split(",");
    const outputLeft = document.getElementById("diffDisplayLeft");
    const outputRight = document.getElementById("diffDisplayRight");
    
    let leftDiffA = parseInt(faceLeftCell[0]) - parseInt(noLeftCell[0]);
    let leftDiffB = parseInt(faceLeftCell[1]) - parseInt(noLeftCell[1]);
    let rightDiffA = parseInt(faceRightCell[0]) - parseInt(noRightCell[0]);
    let rightDiffB = parseInt(faceRightCell[1]) - parseInt(noRightCell[1]);
    
    faceDiff[currentIndex][0] = leftDiffA.toString() + "," + leftDiffB.toString();
    faceDiff[currentIndex][1] = rightDiffA.toString() + "," + rightDiffB.toString();
    outputLeft.innerHTML += "<p>Difference between Left Eye coordinates: " + leftDiffA + ","+ leftDiffB + "</p>";
    outputRight.innerHTML += "<p>Difference Right Eye coordinates: " + rightDiffA + ","+ rightDiffB + "</p>";
}

function displayData(){
    const display = document.getElementById("results");
    let displayString = "";
    
    displayString += "<table style='border:1px solid black'><tr><th>Picture</th><th>User Left-Click</th><th>User Right-Click</th><th>Left-Click Offset</th><th>Right-Click Offset</th></tr>";
    for (let i = 0; i < noFaceImages.length; i++){
        displayString += "<tr><td>"+ (i+1) +"</td><td>"+noFaceMeasurements[i][0].toString()+"</td><td>"+noFaceMeasurements[i][1].toString()+"</td><td>"+faceDiff[i][0].toString()+"</td><td>"+faceDiff[i][1].toString()+"</td></tr>";
    }
    displayString += "</table>";

    display.innerHTML = displayString;
}

function submitUser(){
   
    
    
    
    $.ajax({
	type: "POST",
	url: "php/scripts/submitUser.php",
        data: {post_guessL1: noFaceMeasurements[0][0].toString(),
            post_guessR1: noFaceMeasurements[0][1].toString(),
            post_guessL2: noFaceMeasurements[1][0].toString(),
            post_guessR2: noFaceMeasurements[1][1].toString(),
            post_guessL3: noFaceMeasurements[2][0].toString(),
            post_guessR3: noFaceMeasurements[2][1].toString(),
            post_guessL4: noFaceMeasurements[3][0].toString(),
            post_guessR4: noFaceMeasurements[3][1].toString(),
            post_guessL5: noFaceMeasurements[4][0].toString(),
            post_guessR5: noFaceMeasurements[4][1].toString(),
            post_guessL6: noFaceMeasurements[5][0].toString(),
            post_guessR6: noFaceMeasurements[5][1].toString(),
            post_guessL7: noFaceMeasurements[6][0].toString(),
            post_guessR7: noFaceMeasurements[6][1].toString(),
            post_guessL8: noFaceMeasurements[7][0].toString(),
            post_guessR8: noFaceMeasurements[7][1].toString(),
            post_guessL9: noFaceMeasurements[8][0].toString(),
            post_guessR9: noFaceMeasurements[8][1].toString(),
            post_guessL10: noFaceMeasurements[9][0].toString(),
            post_guessR10: noFaceMeasurements[9][1].toString(),
            post_guessL11: noFaceMeasurements[10][0].toString(),
            post_guessR11: noFaceMeasurements[10][1].toString(),
            post_guessL12: noFaceMeasurements[11][0].toString(),
            post_guessR12: noFaceMeasurements[11][1].toString(),
            post_diffL1: faceDiff[0][0].toString(),
            post_diffR1: faceDiff[0][1].toString(),
            post_diffL2: faceDiff[1][0].toString(),
            post_diffR2: faceDiff[1][1].toString(),
            post_diffL3: faceDiff[2][0].toString(),
            post_diffR3: faceDiff[2][1].toString(),
            post_diffL4: faceDiff[3][0].toString(),
            post_diffR4: faceDiff[3][1].toString(),
            post_diffL5: faceDiff[4][0].toString(),
            post_diffR5: faceDiff[4][1].toString(),
            post_diffL6: faceDiff[5][0].toString(),
            post_diffR6: faceDiff[5][1].toString(),
            post_diffL7: faceDiff[6][0].toString(),
            post_diffR7: faceDiff[6][1].toString(),
            post_diffL8: faceDiff[7][0].toString(),
            post_diffR8: faceDiff[7][1].toString(),
            post_diffL9: faceDiff[8][0].toString(),
            post_diffR9: faceDiff[8][1].toString(),
            post_diffL10: faceDiff[9][0].toString(),
            post_diffR10: faceDiff[9][1].toString(),
            post_diffL11: faceDiff[10][0].toString(),
            post_diffR11: faceDiff[10][1].toString(),
            post_diffL12: faceDiff[11][0].toString(),
            post_diffR12: faceDiff[11][1].toString() 
            
        },
	contentType: "application/x-www-form-urlencoded",
	dataType: "text",
        success: function(response){
		alert(response);
	}
	});
    
}

displayNoFaceImg();