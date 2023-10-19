var delayInMilliseconds = 3000;

setTimeout(function(){
    var msg = document.getElementById("msg");
    if (msg) {
        msg.style.opacity = '0';
        setTimeout(function () {
            if (msg.parentNode) {
                msg.parentNode.removeChild(msg);
            }
        }, 600);
    }
}, delayInMilliseconds);
