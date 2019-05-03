<!DOCTYPE html>
<!--
Complete Donation
-->
<?php 
require('Variables.php');
include $header; 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Complete Donation</title>
        <link rel ='stylesheet' href ='Style.css'>       
    </head>
    <body  class='color-fade'>          
        <div class='container'>  
            <div class='content-wrap'>       
                <form action = 'ThankYouPage.php' method='POST'>
                    <h1>Donate to Experience 1:</h1>
                    <input type ="text" placeholder="Paypal Username" class='info' name = 'paypal'>
                    <input type ="text" placeholder="Donation Amount (eg: 60.99)" class='info' name = 'amount'>
                    <button type="submit" class="button"><span>Enter</span></button>   
                    <a href ="ThankYouPage.php"></a>
                </form>
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>
    </body>
</html>

