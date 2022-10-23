$switch = $('#switch')

function Switch() {
    if (document.getElementById('switch').checked === true){
        document.querySelector('body').style.backgroundColor = "#2b2b2b" /*#0f233d*/
        $('section').css({"backgroundColor":"#505050"}) /*#0b1a2d*/
        $('h1,h2,h3,h4,h5,h6,p,cite,li, blockquote, p, strong, cite, span a').css({"color":"#f1f1f1"})
        document.getElementById("img_titre_du_site").src = "../img/titre_site_darkmode.png"
        document.cookie = "theme=light; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=dark; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }
    if (document.getElementById('switch').checked === false){
        document.querySelector('body').style.backgroundColor = "white"
        $('section').css({"backgroundColor":"#f1f1f1"})
        $('h1,h2,h3,h4,h5,h6,p,cite,li, blockquote, p, strong, cite, span a').css({"color":"#212529"})
        document.getElementById("img_titre_du_site").src = "../img/titre_site.png"
        document.cookie = "theme=dark; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=light; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }
}
Switch()