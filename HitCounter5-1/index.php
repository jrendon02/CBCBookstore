<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $CounterFile = "hitcount.txt"; 
        if (file_exists($CounterFile)) {
            $Hits = file_get_contents($CounterFile);  ++$Hits;
            
        } else {
           $Hits = 1;
           
        }
        echo "<h1>There have been $Hits hits to this page.  </h1>\n";
        if (file_put_contents($CounterFile, $Hits))  
                echo "<p>The counter file has been updated.  </p>\n"; 
        ?>

    </body>
</html>
