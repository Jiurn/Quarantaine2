$switch = $('#switch')

function Switch() {
    if (document.getElementById('switch').checked === true){
        $('body').css({"background-color":"rgb(15, 35, 61)"})
        $('p+a, p, span').css({"color":"whitesmoke"})
        document.cookie = "theme=light; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=dark; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }

    if (document.getElementById('switch').checked === false){
        $('body').css({"background-color":"rgb(241, 241, 241)"})
        $('p+a, p, span').css({"color":"rgb(11, 26, 45)"})
        document.cookie = "theme=dark; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=light; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }
}
Switch()
