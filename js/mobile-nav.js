var menuOpened = false;

function MenuToggle() {
    menuOpened = !menuOpened;
    var menuToggle = document.getElementById("menu-toggle");
    var menu = document.getElementById("menu");
    
    if(menuOpened) {
        menuToggle.innerHTML = "close";
        menu.classList.add("menu-opened");
        console.log("Opened");
    } else {
        menuToggle.innerHTML = "menu";
        menu.classList.remove("menu-opened");
        console.log("Closed");
    }
}