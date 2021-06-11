(function() {
    var elem = document.getElementById('astronaut'), pos = 0,
        timer = setInterval(function() {
            pos++;
            elem.style.left = pos+"px";
            elem.style.top = pos/3+"px";

            elem.style.webkitTransform = 'rotate('+pos-200+'deg)';
            elem.style.mozTransform    = 'rotate('+pos-200+'deg)';
            elem.style.msTransform     = 'rotate('+pos-200+'deg)';
            elem.style.oTransform      = 'rotate('+pos-200+'deg)';
            elem.style.transform       = 'rotate('+pos-200+'deg)';

            console.log(pos);
            if(pos == 2000 - (pos/4)){
                pos = -100;
            }
        },40);
})();