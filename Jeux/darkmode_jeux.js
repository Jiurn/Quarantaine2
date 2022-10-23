$switch = $('#switch')

function Switch() {
    if (document.getElementById('switch').checked === true){
        document.querySelector('body').style.backgroundColor = "#2b2b2b" /*#0f233d*/
        $('.content').css({"backgroundColor":"#505050"})
        $('input[type=text],input[type=submit],input[type=number]').css({"backgroundColor":"#737373"})
        $('span,p,input[type=text],input[type=submit],input[type=number],::placeholder, span a').css({"color":"#f1f1f1"})
        document.cookie = "theme=light; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=dark; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
        console.log(document.cookie)
    }

    if (document.getElementById('switch').checked === false){
        document.querySelector('body').style.backgroundColor = "white"
        $('.content,input[type=text],input[type=submit],input[type=number]').css({"backgroundColor":"#f1f1f1"})
        $('span,p,input[type=text],input[type=submit],input[type=number],::placeholder, span a').css({"color":"#212529"})
        document.cookie = "theme=dark; expires=Sun, 15 Jul 2020 00:00:01 GMT; path=/"
        document.cookie = "theme=light; expires=Sat, 20 Apr 2069 20:20:00 GMT; path=/"
    }
}
Switch()