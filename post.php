<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<head>
  <main>
  <?php
    function getPostDetailsFromDatabase() {


       $postDetails = array('title' => 'Blog Post 1',
                            'postcontent' => 'My first blog post',
                            'datepublished' => '10/06/2022',
                            'author' => 'ianw');

       return $postDetails;
    }
  ?>
  <?php
      $postDetails = getPostDetailsFromDatabase();
  ?>
  <h1> <?php echo $postDetails["title"]; ?> </h1>
  <div> <?php echo $postDetails["author"]; ?> </div>
  <div> <?php echo $postDetails["datepublished"]; ?> </div>
  <div> <?php echo $postDetails["postcontent"]; ?> </div>

        <div class="author">
        </div> 
        
        <div class="datepublished">
        </div>

        <div class="postcontent">
        </div>
  </main>
  <?php
    include 'footer.php';
  ?>
  </html>