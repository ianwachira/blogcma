<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
  <body>
  <main>
  <?php
      function getPostDetailsFromDatabase() {
        $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
        return $postTitles;
      }
  ?>
<u1>
    <?php
      $postTitles = getPostTitlesFromDatabase();
    
      foreach($postTitles as $postTitle) {
          echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
      }
    ?>
</u1>
  </main>
  <?php
    include 'footer.php';
  ?>
  </body>
  </html>