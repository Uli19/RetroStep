let menu = document.getElementById("menu");
let sideMenu = document.getElementById("side-menu");
let x = document.getElementById("x");
menu.addEventListener("click", function() {
   sideMenu.style.left ="0px";

});
x.addEventListener("click",function(){
    sideMenu.style.left= "-250px";
});
