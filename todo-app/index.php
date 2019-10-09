<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Todo App</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div id="myDIV" class="header">
  <h2>My To Do List</h2>
  <input type="text" id="myInput" placeholder="Tambah aktivitas baru">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
  <li draggable="true">sedang tidur</li>
  <li class="checked">makan</li>
  <li>belanja</li>
  <li>beli indomie</li>
</ul>

<!-- Draggable DIV -->
<!-- <div id="mydiv"> -->
  <!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
  <!-- <div id="mydivheader">Click here to move</div>
  <p>Move</p>
  <p>this</p>
  <p>DIV</p>
</div> -->

<h2>Drag and Drop</h2>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <p draggable="true" ondragstart="drag(event)" id="drag1" class="onDoing">SEDANG MENGERJAKAN PROJECT</p>
  <p draggable="true" ondragstart="drag(event)" id="drag2" class="onDoing">SEDANG TIDUR</p>
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<script src="js/script.js"></script>
</body>
</html>