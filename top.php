<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment 1.3: Making The World a Better Place - Home Page</title>
        <meta charset="utf-8">
        <meta name="author" content="Lynden Prior">
        <meta name="description" content="A site displaying my projects and assignments for CS008: HTML and CSS">

        <!-- see: http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag/ -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="style.css" type="text/css" media="screen">

        <?php
// parse the url into htmlentites to remove any suspicous vales that someone
// may try to pass in. htmlentites helps avoid security issues.

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

// break the url up into an array, then pull out just the filename
        $path_parts = pathinfo($phpSelf);
        ?>	

    </head>

    <?php
// giving each body tag an id really helps with css later on
    print '<body id="' . $path_parts['filename'] . '">';
    ?>
</html>
    <!-- ######################     Start of Body   ############################ -->
