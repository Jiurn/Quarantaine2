let current_url = document.location.href

document.querySelectorAll(".nav-link").forEach(function(e){
    if(e.href === current_url){
        e.classList += " active_nav";
    }
})

function Dropdown() {
    document.getElementById("myDropdown").classList.toggle("show_nav");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show_nav')) {
            myDropdown.classList.remove('show_nav');
        }
    }
}