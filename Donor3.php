<!DOCTYPE html>
<!--
Select Experience
-->
<?php 
require('Variables.php');
require('Functions.php');
require('Config.php');
include $header; 
$lname = $_POST['lname'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Find your Couple</title>
        <link rel ='stylesheet' href ='Style.css'>       
    </head>
    <body  class='color-fade'>          
        <div class='container'>  
            <div class='content-wrap'>
                <div>
                    <h1><img src="Images/stockcoupleforexpedia.jpg" class="centerpiece"></h1>
                    <figcaption class="centerpiece"><?php echo "Mr. and Mrs. ", $lname; ?></figcaption>
                </div>       
                <nav>
                    <ul class="horiz-list">
                        <li class = 'column'><a href="Experience1.php">Experience 1<img src="Images/honeymoondinner.jpg" class="same-size"></a></li>
                        <li class = 'column'><a href="Experience2.php">Experience 2<img src="Images/jetski.jpg" class="same-size"></a></li>
                        <li class = 'column'><a href="Experience3.php">Experience 3<img src="Images/parasail.jpg" class="same-size"></a></li>
                    </ul>
                </nav>
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>
    </body>
</html>

