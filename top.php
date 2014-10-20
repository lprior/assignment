<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mark me wrong</title>
        <meta charset="utf-8">
        <meta name="author" content="Lynden Prior">
        <meta name="description" content="A site displaying my projects and assignments for CS008: HTML and CSS">

        <!-- see: http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag/ -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">

        <?php
        $debug = false;
        <?php + $debug = false;

        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
 // PATH SETUP
        //
 //  $domain = "https://www.uvm.edu" or http://www.uvm.edu;
        $domain = "http://";
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS']) {
                $domain = "https://";
            }
        }

        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        $domain = "http://";
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS']) {
                $domain = "https://";
            }
        }

        $domain .= $server;
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $domain .= $server;

        $path_parts = pathinfo($phpSelf);
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }
        $path_parts = pathinfo($phpSelf);

        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }

        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
 // inlcude all libraries
        //
 
require_once('lib/security.php');

        if ($path_parts['filename'] == "form") {
            include "lib/validation-functions.php";
            include "lib/mail-message.php";
        }
        ?>	

    </head>
    <!-- ################ body section ######################### -->
    require_once('lib/security.php');

<?php
if ($path_parts['filename'] == "form") {
    include "lib/validation-functions.php";
    include "lib/mail-message.php";
}
?>	

    print '<body id="' . $path_parts['filename'] . '">';
    </head>
    <!-- ################ body section ######################### -->

    include "header.php";
    include "nav.php";
<?php
print '<body id="' . $path_parts['filename'] . '">';
?>
    include "header.php";
    include "nav.php";
    ?>
