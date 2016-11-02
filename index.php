<!DOCTYPE html>
<html>
<head><meta http-equiv="refresh" content="10">
    <title>LoRa_Server</title>
    <style>
    table, th, td {
    padding: 10px;
    text-align: left;
    margin: 0 auto;
    }
    p.heading {
    font-family: Verdana, Geneva, sans-serif;
    }
    div.container {
    width: 100%;
    border: 1px solid gray;
    background-color: #660066;
    text-align: center;
    vertical-align: middle;
    }
    nav {
    float: left;
    max-width: 40px;
    margin: 1em;
    padding: 1em;
    }
    article {
    margin-left: 50px;
    padding: 1em;
    overflow: hidden;
    }
    input[type=submit] {
    background-color: #660066;
    border: none;
    color: white;
    padding: 20px 72px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    </style>
</head>
<body>
<div class="container">
<header>
<h1><p class = "heading"><font size="6" color="white">LoRa Server</font></p></h1>
<h2><p class = "heading"><font size="4" color="white">InternetOfThings</font></p></h2>
</header>
</div>
<div class ="article">
<nav>
<form action="delete.php" method="get">
  <input type="submit" value="Clear Database">
</form>
</nav>
<br></br>
<?php
include("display.php");
?>
</div>
</body>
</html>