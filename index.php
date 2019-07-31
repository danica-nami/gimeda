<!DOCTYPE html>
<html lang="en">
<head>
<title>index.html</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;

header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: gray;
}


nav {
  float: left;
  width: 30%;
  height: 300px; 
  background:#ccc;
  padding: 20px;
}
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color:#f1f1f1;
  height: 300px;

section:after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color:#777;
  padding: 10px;
  text-align: center;
  color: white;
}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;


</style>
</head>
<body>

<h2 style="text-align:center;font-family:bookman old style">DANICA GIMEDA</h2>
<p style="font-family:Arial Unicode MS;text-align:center;">sample template</p>

<header>
  <h2>AESTHETIC</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">programming</a></li>
      <li><a href="#">web</a></li>
      <li><a href="#">I-comp</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Aesthetic</h1>
    <p>Aesthetics, or esthetics is a branch of philosophy that deals with the nature of art, beauty and taste and with the creation or appreciation of beauty.</p>
   
  </article>
</section>

<footer style="background-color:gray;">
  <p style="text-align:center;">Nica.monami</p>
</footer>

</body>
</html>
