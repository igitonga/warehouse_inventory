    
var dropmenu = document.querySelector(".fa-bars");
var cancelmenu = document.querySelector(".fa-times");

dropmenu.addEventListener("click",function(){
    document.getElementById("dropmenu").style.display = "none";
    document.getElementById("cancelmenu").style.display = "block";
    document.getElementById("navigation-drawer").style.display = "block";
})

cancelmenu.addEventListener("click", function(){
    document.getElementById("dropmenu").style.display = "block";
    document.getElementById("cancelmenu").style.display = "none";
    document.getElementById("navigation-drawer").style.display = "none";
})