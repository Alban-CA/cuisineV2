/*
    var button  = document.querySelector("button");
    var on_button_click = function()
    {
        alert("hum i like it");
    };*/
    var button.onclick = on_button_click;

    var button_prev = document.querySelector("#prev");

    var button_next = document.querySelector("#next");

    var boxes = document.querySelectorAll("#carrousel div");

    /*pour connaitre le nombre d'eleemnt dans une liste*/
    //console.log ("la taille de ma liste est:", boxes.length);

    var selected = 0;

    var refresh_display = function(){
        for (var i = 0 ; i < boxes.length; i++) {
            /*si i égale à selected on affiche l'element
            sinon on le cache*/
            if (selected == i) {
                /*console.log("l'element "+i+" est selectionne.");*/
                boxes[i].style.display="";
            }else{
                /*console.log("l'element "+i+" n'est pas selectionne.");*/
                boxes[i].style.display="none";
            }
        }
    };

    var on_prev_click = function()
    {
        selected--;
        if(selected == -1) {
            selected = boxes.length -1;
        }
        refresh_display();
    };

    setInterval (on_prev_click, 200);

    var  on_next_click= function()
    {
        //console.log('test');
        selected++;
        if (selected == boxes.length){
            selected = 0;
        }
        refresh_display();
    };

    button_prev.addEventListener("click",on_prev_click);
    button_next.addEventListener("click",on_next_click);


    refresh_display();
    