keycodes = [];
bon_keycodes = ["38", "38", "40", "40", "37", "39", "37", "39", "66", "65", "13"]
function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}


window.addEventListener('keyup', (e)=> {
    keycodes.push(e.keyCode)
    keycodes.splice(-bon_keycodes.length -1, keycodes.length - bon_keycodes.length);
    if (keycodes.join('') == bon_keycodes.join('')){
        music = new Audio("../musique/never-gonna-give-you-up-8-bits.wav");
        music.volume = 0.4;
        music.loop = true;
        music.play()

        $('<div style="text-align: center"><img src="../img/rick-astley.gif" style="width: 550px"></div>').insertAfter("footer")
    }
})
