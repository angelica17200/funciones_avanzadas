<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FECHA Y HORA PHP</title>
</head>
<body>
    <?php
         
        
         echo "<h1>Obtener una cita</h1><br>";

         //El parámetro de formato requerido de la función date() 
         //especifica cómo formatear la fecha (o la hora).

         echo "Today is " . date("Y/m/d") . "<br>";
         echo "Today is " . date("Y.m.d") . "<br>";
         echo "Today is " . date("Y-m-d") . "<br>";
         echo "Today is " . date("l");
         

        //
        echo "<h1>Sugerencia de PHP: año de copyright automático</h1><br>";

         //Use la date()función para actualizar automáticamente el año de copyright 
         //en su sitio web:

        echo date("Y");
         

          //
         echo "<h1>Obtener un tiempo</h1><br>";
         //Aquí hay algunos caracteres que se usan comúnmente para veces:
         //H - formato de 24 horas de una hora (00 a 23)
         //h - formato de 12 horas de una hora con ceros a la izquierda (01 a 12)
         //i - Minutos con ceros a la izquierda (00 a 59)
         //s - Segundos con ceros a la izquierda (00 a 59)
         //a - Antemeridiem y Postmeridiem minúsculas (am o pm)

         echo "The time is " . date("h:i:sa");
         

         //
         echo "<h1>Obtenga su zona horaria</h1><br>";

         date_default_timezone_set("America/New_York");
          echo "The time is " . date("h:i:sa");

          
         //
         echo "<h1>Crear una fecha con mktime()</h1><br>";

         $d=mktime(11, 14, 54, 8, 12, 2014);
         echo "Created date is " . date("Y-m-d h:i:sa", $d);

         
         //
         echo "<h1>Crear una fecha a partir de una cadena con strtotime()</h1><br>";
          // La strtotime()función PHP se utiliza para convertir una cadena de fecha legible 
           //por humanos en una marca de tiempo de Unix (la cantidad de segundos desde el 1 de 
         //enero de 1970 00:00:00 GMT).

         $d=strtotime("10:30pm April 15 2014");
         echo "Created date is " . date("Y-m-d h:i:sa", $d);

         
         //
         echo "<h1>Otro ejemplo</h1><br>";

         $d=strtotime("tomorrow");
         echo date("Y-m-d h:i:sa", $d) . "<br>";

         $d=strtotime("next Saturday");
         echo date("Y-m-d h:i:sa", $d) . "<br>";

         $d=strtotime("+3 Months");
         echo date("Y-m-d h:i:sa", $d) . "<br>";
         
         

         echo "<h1>Más ejemplos de fechas</h1><br>";

         $startdate = strtotime("Saturday");
         $enddate = strtotime("+6 weeks", $startdate);

         while ($startdate < $enddate) {
         echo date("M d", $startdate) . "<br>";
         $startdate = strtotime("+1 week", $startdate);

          }

          echo "<h1>Número de días</h1><br>";
          

         // El siguiente ejemplo muestra el número de días hasta el 4 de julio:
 
         $d1=strtotime("July 04");
         $d2=ceil(($d1-time())/60/60/24);
         echo "There are " . $d2 ." days until 4th of July."; 

          
    

     
    
    
      
    








    

















    ?>
    
</body>
</html>