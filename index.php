<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
  <main>
  <?php
    $postTitles = getPostTitlesFromDatabase();
    
    foreach($postTitles as $postTitle) {
      echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
    }
  ?>
</u1>
    <h1>Most Popular Browsers</h1>
    <p>Chrome, Firefox, and Edge are the most used browsers today.</p>
  
    <article class="container">
      <h2>Google Chrome</h2>
      <img src="images/googlechrome.jpg" alt="google" style="width:25%">
      <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>

    </article>
  
    <article class="container">
      <h2>Mozilla Firefox</h2>
      <img src="images/firefox.jpg" alt="firefox" style="width:25%">
      <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
    </article>
  
    <article class="container">
      <h2>Microsoft Edge</h2>
      <img src="images/microsoftedge.jpg" alt="microsoft" style="width:25%">
      <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
    </article>
  </main>
  <?php
    include 'footer.php';
  ?>
  </html>