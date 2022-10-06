<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
  <main>
    <form action="/action_page.php" method="get">
        <label for="title">Title</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="author">Author</label>
        <input type="text" id="author" name="author"><br><br>
        <label for="date">Date</label>
        <input type="date" id="date" name="date"><br><br>
        <label for="content"></label>
        <textarea id="content" name="content" rows="4" cols="50">Text area for content</textarea>
        <input type="submit" value="Submit">
      </form>
  </main>
  </html>