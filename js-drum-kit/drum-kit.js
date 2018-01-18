document.addEventListener("keydown", function (event) {
    document.querySelector("div [data-key='"+ event.keyCode +"']").classList.add("playing");
    document.querySelector("audio[data-key='"+ event.keyCode +"']").play();
});

document.addEventListener("keyup", function(event){
   document.querySelector("div [data-key='"+ event.keyCode +"']").classList.remove("playing"); 
});
     