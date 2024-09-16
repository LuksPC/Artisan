function showDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    function changeLanguage(language) {
        var element = document.getElementById("url");
        element.value = language;
        element.innerHTML = language;
    }

    function showDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
}

function printMousePos(objetoId) {
    document.getElementById(objetoId).classList.toggle("show");
    var cursorX;
    var cursorY;
    document.onclick = function(e){
    cursorX = e.pageX;
    cursorY = e.pageY;

    // alert("x: " + cursorX + ", y: " + cursorY);
    document.getElementById(objetoId).style.margin.left= cursorX;
    document.getElementById(objetoId).style.margin.top = cursorY;
}  
   
}