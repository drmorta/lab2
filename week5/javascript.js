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
// Window Color
function windowColor() {
    document.getElementById("colors").innerHTML =
    "Screen Color Depth: " + screen.colorDepth;
    };
 //Alert Box Prompt
 function messageFunction() {
    let text;
    let letter = prompt("Please enter any message: ");
    if (letter == null || letter == "") {
      text = "User cancelled the prompt.";
    } else {
      text = "Your message is: " + letter;
    }
    document.getElementById("messages").innerHTML = text;
  }