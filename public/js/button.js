var keep = true;
var swap = true;
var array = [3, 4, 5, 6, 2, 3];

function changeText() {

    var x = document.getElementById("hello");
    if (keep) {
        x.appendChild(document.createTextNode("Hello there!"));
        x.style.color = "red";
        x.style.fontSize = "x-large";
    }
    keep = false;

}

function square(n) {

    var x = document.getElementById("new");
    if (swap)
        x.innerHTML = n * n;
    else
        x.innerHTML = "Lol";
    swap = !swap;

}

function printArray() {

    var x = document.getElementById("sort");
    x.innerHTML = array.toString();

}

function myMove() {

    var elem = document.getElementById("myAnimation");
    var pos = 0;
    var id = setInterval(frame, 10);
    function frame() {
        if (pos == 350)
            clearInterval(id);
        else {
            pos++;
            elem.style.top = pos + 'px';
            elem.style.left = pos + 'px';
        }
    
    }

}
