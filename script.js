var menu = document.getElementById('menu');
var menu_bar = document.getElementById('menu-bar');
var btns = menu_bar.getElementsByClassName('btn');
menu.addEventListener("click", function () {
    menu.classList.toggle("active");
    menu_bar.classList.toggle("active");
    })
for(var i=0;i<btns.length;i++){
    btns[i].addEventListener("click",function(){
        var current= document.getElementsByClassName("selected");
        current[0].className.replace("selected", "");
        this.className += "selected";
    });
}
