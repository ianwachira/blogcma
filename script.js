<div id="sortable-blog-list">
    <input class="search" placeholder="Search" />
    <button class="sort" data-sort="title">Sort</button>
    <ul class="list">
        <?php
            $postTitles = getPostTitlesFromDatabase();
            foreach($postTitles as $postTitle) {
                echo "<li><a href='post.php?title=" . $postTitle 
                    . "' class='title'>" . $postTitle . "</a></li>";
            }
        ?>
    </ul>
</div>

var options = {
    valueNames: [ 'title' ]
};
new List('sortable-blog-list', options)