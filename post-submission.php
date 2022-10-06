<html>
<article>
    <header>
      <h1>Post Submission</h1>
      <p>Here is where you can submit posts</p>
      <link rel="stylesheet" href="styles.css">  
    </header>
  </article>
  <nav>
    <a href="index.php">Index page</a> |
    <a href="post-submission.php">Post Submission page</a> |
    <a href="post.php">Posts</a> 
  </nav>
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
  <footer>
    <p>Author: Ian Wachira</p>
    <p><a href="iwachira@lesley.edu">iwachira@lesley.edu</a></p>
  </footer>
  </html>