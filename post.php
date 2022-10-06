<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
<h1>Posts</h1>
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
        <body>
        <div class="author">
        </div>
        </body>    
        
        <body>
            <div class="datepublished">
            </div>
            </body>  

        </body>  
        <div class="postcontent">
          </div>
          </body> 
  </main>
  <?php
    include 'footer.php';
  ?>
  </html>