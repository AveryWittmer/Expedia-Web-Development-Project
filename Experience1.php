<!DOCTYPE html>
<!--
Home Page
-->
<?php
require('Variables.php');
include $header;
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
                <div class = "centered">
                    <img src="Images/honeymoondinner.jpg" class='centerpiece'>
                    <figcaption>Beachside Dinner</figcaption>
                    <p>The beachside dinner experience includes fine local cuisine, vintage wines, and a string quartet.
                        <br>Please contact us for further questions about this experience.</p>  
                        <a href ="Donation_Page.php">
                            <button type="submit" class="button"><span>Donate</span></button>
                        </a>
                </div>

            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>
    </body>
</html>
