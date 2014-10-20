<!DOCTYPE HTML>
<!-- ######################     Main Navigation   ########################## -->

    <nav>
        <ol>
            <?php
            /* This sets the current page to not be a link. */
            /* If block for home page */
            if ($path_parts['filename'] == "index") {
                print '<li class="activePage">Home</li>';
            } else {
                print '<li><a href="index.php">Home</a></li>';
            }
            /* If block for recycling page */
            if ($path_parts['filename'] == "recycling") {
                print '<li class="activePage">Recycling</li>';
            } else {
                print '<li><a href="recycling.php">Recycling</a></li>';
            }
            /* If block for walking page */
            if ($path_parts['filename'] == "walking") {
                print '<li class="activePage">Walking</li>';
            } else {
                print '<li><a href="walking.php">Walking</a></li>';
            }
            /* If block for water bottle page */
            if ($path_parts['filename'] == "watterbottle") {
                print '<li class="activePage">Water Bottle</li>';
            } else {
                print '<li><a href="watterbottle.php">Water Bottle</a></li>';
            }
            ?>
        </ol>
    </nav>
