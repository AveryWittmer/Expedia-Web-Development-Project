<!DOCTYPE html>
<!--
Home Page
-->
<?php
require('Variables.php');
require('Functions.php');
require('Config.php');
include $header;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$clients = get_clients($fname, $lname, $address);
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
                <table class='table-results'>
                    <thead>
                        <tr>
                            <th>Choose Couple</th>
                            <th>Package Description</th>
                            <th>Donate</th>                           
                        </tr> 
                    </thead>
                    <tbody>
                        <?php
                        $row_count = $clients->num_rows;

                        for ($i = 0; $i < $row_count; $i++):
                            $client = $clients->fetch_assoc();
                            $client_id = $client['CLIENT_ID'];
                            $package_desc = get_package($client_id);
                            ?>

                            <tr>
                                <td>
                                    <a href = "Donor3.php">
                                        <img src='Images/stockcoupleforexpedia.jpg' class='img-in-table' alt='Donate'>
                                    </a>    
                                </td>
                                <td><?php echo $package_desc; ?></td>
                                <td>
                                    <form action="Donor3.php" method="POST">
                                        <input type="hidden" name="lname" value="<?php echo $lname;?>">
                                        <a href="Donor3.php">
                                            
                                            <button type="submit" class="button" ><span>Donate</span></button>
                                        </a>    
                                    </form>

                                </td>
                            </tr>  
                            <tr>

                            </tr>
                            <tr>

                            </tr>                               
                        <?php endfor; ?>                 
                    </tbody>                
                </table>
            </div>
            <footer class='footer'>Expedia Travel, Copyright &copy; <?php echo date("Y"); ?></footer>
        </div>
    </body>
</html>

