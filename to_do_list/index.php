<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
      <p><a href="#">Cloud Bag</a></p>
    </header>

    <nav>
      <ul id="main_nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Logout</a></li>
      </ul>

      <p>Helle Ibsen</p>
      <ul id="user_nav">
        <li style="font-weight: 700;"><a href="#"># Poland</a></li>
        <li><a href="#"># Summer house</a></li>
      </ul>
    </nav>
  </aside>

  <main>
    <article>
      <h1>Poland</h1>

      <section>
        <h2>Helle Ibsen</h2><i class="material-icons">&#xE7FD;</i>
        <input type="text" id="inputItem" placeholder="New item...">
        <button onclick="addItem()" class="addBtn">Add</button>

        <ul id="fullList">
          <li class="listItem">Clothes</li>
          <li class="checked listItem">Socks</li>
          <li class="listItem">Laptop</li>
          <li class="listItem">Phone charger</li>
        </ul>
      </section>

      <section>
        <h2>Lars Jensen</h2><i class="material-icons">&#xE7FB;</i>
        <br><br>
        <ul class="mem_list">
          <li>Clothes</li>
          <li>Tablet</li>
          <li class="checked">Camera</li>
          <li class="checked">Headset</li>
          <li>Card game</li>
          <li class="checked">Book</li>
          <li>Pillow</li>
          <li>Passport</li>
        </ul>
      </section>
    </articel>
  </main>

  <script src="script.js"></script>
</body>
</html>
