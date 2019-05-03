<!DOCTYPE html>
<!--
Thank You Page
-->
<?php
require('Variables.php');
require('Functions.php');
require('Config.php');
include $header;
$paypal = $_POST['paypal'];
$amount = $_POST['amount'];
insert_paypal($paypal);
insert_amount($amount);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Expedia Registry | Welcome</title>
        <link rel ='stylesheet' href ='Style.css'>
    </head>
    <body id="Home"> 
        <div class='container'>
            <div class='content-wrap'>
                <div>
                    <h1 class='text-over-image'>Thank You for Donating!</h1>   
                </div>
                <form action = 'index2.php' class="centered" method='POST'>
                    <h1 class="text-over-image">Want to get updates from the Honeymoon?<br></h1>
                    <h2 class="text-over-image">Enter your email address here:</h2>                    
                    <input type ="text" placeholder="someone@mail.com" class="enter-email" name='email'>
                    <button type="submit" class="button"><span>Enter</span></button>   
                    <a href ="index2.php"></a>
                </form>   
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>



    </body>
</html>


