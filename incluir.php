<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INCLUIR</title>

</head>
<body>
    <?php
           echo "<h1>Archivos de inclusión de PHP</h1><br>";
           //Supongamos que tenemos un archivo de pie de página estándar 
           //llamado "footer.php", que se ve así:
           //ejemplo:
      
          echo "<p>Copyright &copy; 1999-" . date("Y") . 
          " W3Schools.com</p>";


          echo "<h1>ejemplo</h1><br>";

         <div class="menu">
         <?php include 'menu.php';?>
         </div>

         <h1>Welcome to my home page!</h1>
         <p>Some text.</p>
         <p>Some more text.</p>


          

          


      
      

   
     
     

    






     




    ?>
    
</body>
</html>