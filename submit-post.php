<?php

// get the data to insert into the db
$title = $_POST["title"];
$content = $_POST["postcontent"];
$author = $_POST["author"];
$date = $_POST["datepublished"];

// insert the data with the sql query
include_once 'db_connect.php';
$sql="INSERT INTO posts (title, postcontent, author, datepubl) VALUES ('" .     
    $title . "','" .  $content . "','" . $author . "','" . $date . "')";
$result = mysqli_query($conn, $sql);

// redirect to homepage
header("Location: index.php");

?>