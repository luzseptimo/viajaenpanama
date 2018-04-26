<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>Viaja En Panama</title>
  </head>
  <body>
    <div class="header"><h1>
      <?php
      $welcome = "Bienvenido a Viaja En Panamá!";
      echo $welcome;
      ?>
      </h1>
    <p><strong>¿Qué puedes hacer con esta app?</strong>
      <?php
        $things = array("Calcular el costo de viaje entre lugares turísticos de Panamá",
        "Encontrar contactos de las líneas de transporte de Panamá", "Encontrar lugares para visitar",
        "Sugerir ideas para esta app!");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
        
        unset($thing);
      ?>
    
    
  </body>
</html>
