$switch = $('#switch')

function Switch() {
    if (document.getElementById('switch').checked === true){
        document.querySelector('body').style.backgroundColor = "rgb(15, 35, 61)"
        $('h1').css({"color":"darkgoldenrod"})
        $('fieldset').css({"background-color":"rgb(11, 26, 45)"})
        $('p, p span,a:not(.nav-link)').css({"color":"gray"})
        $('legend,input[type=submit]').css({"color":"white"})
        $('span, p, p a').css({"color":"white"})
        $('input[type=submit]').css({"background-color":"rgb(11, 26, 45)"})
        document.cookie = "theme=light; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=dark; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }
    if (document.getElementById('switch').checked === false){
        document.querySelector('body').style.backgroundColor = "#dcdcdc"
        $('h1').css({"color":"darkgoldenrod"})
        $('fieldset').css({"background-color":"#f1f1f1"})
        $('p, p span,legend,a:not(.nav-link), input[type=submit]').css({"color":"rgb(11, 26, 45)"})
        $('span, p, p a').css({"color":"rgb(11, 26, 45)"})
        $('input[type=submit]').css({"background-color":"rgb(193 193 193)"})
        document.cookie = "theme=dark; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=light; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }
}
Switch()