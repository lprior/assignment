<!DOCTYPE HTML>
<html lang="en">
    <body>
        <?php
        include("top.php");
        ?>
        <article id="main">
            <p>
                The University of Vermont is a disposable water bottle free campus. This means 
                that you can’t buy a bottle of water anywhere on the campus. This rule has been 
                in place since January 31st, 2012 and I believe that it is a great idea. The 
                logic behind this decision is that by not selling disposable water bottles, 
                students are forced to use refillable water bottles and as a result be more 
                eco-friendly. Since coming to UVM, I have learned to carry my water bottle with 
                me in my backpack everywhere I go. This campus wide elimination of bottled water 
                has saved many plastic bottles from ending up in landfills. This table shows the
                total amount of water per capita in gallons per person in the United States from
                2001 to 2011:
            </p>
        </article>
        <aside id="other">
            <p><figure class="img-right small">
                <a href="http://www.homestoreandmore.ie/content/ebiz/hsandm/invt/054346/054346_large.jpg">
                    <img class="small" alt="Lynden Prior" src="data/waterbottle.jpg"></a>
                <figcaption>A common water bottle seen on campus. Click to view larger image.</figcaption>
            </figure>
        </aside>
        <?php
        echo "<html><body><table>\n\n";
        $file = fopen("statistics.csv", "r");
        while (($line = fgetcsv($file)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
                echo "<td>" . ($cell) . "</td>";
            }
            echo "</tr>\n";
        }
        fclose($file);
        echo "\n</table></body></html>";
        ?>

        <p>
            <a href="http://www.bottledwater.org/files/2011BWstats.pdf">Click for data source</a>
        </p>
        <?php
        include("footer.php");
        ?>
    </body>
</html>


