<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <main>
   <?php
      function getPostTitlesFromDatabase() {
        $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
        return $postTitles;
      }
   ?>
<ul>
   <?php
      $postTitles = getPostTitlesFromDatabase();
    
      foreach($postTitles as $postTitle) {
          echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
      }
   ?>
</ul>
  </main>
  <?php
    include 'footer.php';
  ?>
  </body>
  </html>