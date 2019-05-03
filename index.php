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
        <title>Expedia Registry | Welcome</title>
        <link rel ='stylesheet' href ='Style.css'>
    <a href="admin.html">Admin</a>
    </head>
    <body id="Home"> 
        <div class='container'>
            <div class='content-wrap'>
                <h1 class='text-over-image'>Are you a ...</h1>   
                <div class="centered">
                    <a class="button" href="Client1.php">Client?</a>
                    <a class="button" href="Donor1.php">Donor?</a>
                </div>   
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>



    </body>
</html>

