let menu = document.getElementById("menu");
let sideMenu = document.getElementById("side-menu");
let x = document.getElementById("x");
menu.addEventListener("click", function() {
    if (sideMenu.style.left === "-250px") {
        sideMenu.style.left = "0";
        
    } else {
        sideMenu.style.left = "-250px";
    }

});
x.addEventListener("click",function(){
    sideMenu.style.left= "-250px";
});
