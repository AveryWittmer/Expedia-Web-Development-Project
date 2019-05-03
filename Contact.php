<!DOCTYPE html>
<!--
Contact
-->
<?php
require('Variables.php');
include $header;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Contact Us</title>
        <link rel ='stylesheet' href ='Style.css'>
    </head>
    <body class="color-fade"> 
        <div class='container'>
            <div class='content-wrap'>
                <img src="Images/expedia-staff.jpg" class="right-side">
                <h1 class = 'text-over-image'>Contact Us:</h1>
                <ul class="vertical-list">
                    <li>
                        <a href ="mailto:person@expedia.org">
                           <button type="submit" class="button">
                                <span>
                                    Email
                                </span>
                            </button>  
                        </a>
                    </li>
                    <li>
                        <a href ="tel:616-555-4839">
                           <button type="submit" class="button">
                                <span>
                                    Call
                                </span>
                            </button>  
                        </a>
                    </li>
                    <li>
                        <a href ="sms:616-555-4839">
                           <button type="submit" class="button">
                                <span>
                                    Text
                                </span>
                            </button>  
                        </a>
                    </li>
                </ul>                    
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>



    </body>
</html>