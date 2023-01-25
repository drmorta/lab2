//Date Function
const d = new Date();

//New Window
function newWindow() {
      var myWindow = window.open("", "", "width=200, height=100");
      myWindow.blur();
	  };
//Object (me)
const me = {
        firstName: "Danni Raphael",
        lastName: "Morta",
        age: 20,
      };
//Random Number Generator
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
    };
// Window Width
function windowColor() {
    document.getElementById("colors").innerHTML =
    "Screen Color Depth: " + screen.colorDepth;
    };
 