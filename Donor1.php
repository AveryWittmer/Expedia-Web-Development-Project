
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
                <form action = 'Donor2.php' method="POST">
                    <h1>Enter Information Below:</h1>
                    <input type ="text" placeholder="First Name" class='info' name ='fname'>
                    <input type ="text" placeholder="Last Name" class='info' name='lname'>
                    <input type ="text" placeholder="State" class='info' name='address'>
                    <button type="submit" class="button"><span>Enter</span></button>   
                    <a href ="Donor2.php"></a>
                </form>
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>
    </body>
</html>