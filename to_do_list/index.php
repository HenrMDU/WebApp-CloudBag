<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <title>Document</title>
</head>

<!-- How to create a to do list: https://www.w3schools.com/howto/howto_js_todolist.asp -->
<!--
Add a delete all list items
Fix ul not working on second
basic layout with organismes working
OPTION: Style
add cookies
clear all button?
-->

<body>
  <aside>
    <header>
      <p>header</p>
    </header>

    <nav>
      <ul id="main_nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Logout</a></li>
      </ul>

      <p>Kim</p>
      <ul id="user_nav">
        <li><a href="#">Profile</a></li>
        <li><a href="#">Lists</a></li>
      </ul>
    </nav>
  </aside>

  <article>
    <input type="text" id="inputItem" placeholder="Title...">
    <button onclick="addItem()" class="addBtn">Add</button>

    <ul id="fullList">
      <li class="listItem">Clothes</li>
      <li class="checked listItem">Socks</li>
      <li class="listItem">Laptop</li>
      <li class="listItem">Phone charger</li>
    </ul>
  </article>

  <script src="script.js"></script>
</body>
</html>
