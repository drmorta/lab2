<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title> Personal Website </title>
      <script defer src="javascript.js"></script>
</head>
<!-- Head End -->
<body>

      <h1>Introduction</h1>
	<img src="me.jpeg" alt="What I look like" class="image"> 
      <h2>Nickname: Danni </h2>
      <h3>Age: 20</h3>

<section>

      <p>
      <b>Senior High School Graduate From? City the High School is located at? Course?</b><br>
      Graduated Senior High School from Asia Pacific College located in Makati City with a course from STEM-IT.
      <br>
      <br>
      <b>Scholarship? Yes/No If yes, %? Type?</b><br>
      I have a scholarship, public high school graduate scholarship since I am from a public high school in junior high school. It has 50% discount in my tuition.
      <br>
      <br>
      <b>Transferee/Second course?</b><br>
      No. Second course option was BSCS.
      <br>
      <br>
      <b>Did you choose this course? Yes/ NO Why Yes?</b><br>
      I chose this course because it aligns with my interest which are computers in general and I want to learn more about my interest with this course.
      <br>
      <br>
      <b>I.T Experience: Programming/ Gaming/ Others:</b><br>
      First programming experience in a seminar in UE, then in senior high school at bootcamp and then in college.
      <br>
      <br>
      <b>Hobbies/ Interest/ libangan:</b><br>
      Gaming, watching movies or series, listening to music and reading manga
      <br>
      <br>
      <b>Goals in life/Pangarap sa buhay: As of now, my goal is just to graduate college together with my classmates and hopefully find a stable job in a work that I will surely be enjoying.</b><br>
      What do you expect to learn from this course (Web Programming)? I expect to learn from this subject about basic and advance web programming as I need to study some of them again as building a website can be a great skill in my course.
      </p>

</section>
<h4> JavaScript Buttons </h4>

<div class="photos">
<button type="button" onclick="alert(d)">Time check</button>
<br>
<button onclick="document.getElementById('photo').src='NM.png'">Click to show my sample shot</button>
<img id="photo"> 
<br>
<button onclick="document.getElementById('photo').style.display='none'">Click to hide my sample shot</button>
<br>
<button onclick="newWindow()">Open a New Window</button>
<br>
<button onclick="window.print()">Print the website</button>
<br>
<li id="demo"></li><br>
<button onclick="document.getElementById('demo').innerHTML = getRndInteger(0,999999)">Click Me to Generate a random number</button>
<br>
<li id="colors"></p>
<button onclick="windowColor()">Click me to see color depth</button>
<br>
<li id="messages"></p>
<button onclick="messageFunction()">Click me to prompt an alert box</button>
<br>   
</div>

<div class="footer">
<a href="resources.html"> My Resources </a>

</div>
</body>
<!-- Body End -->
</html>
