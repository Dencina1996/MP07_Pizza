<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pizza Buonna</title>
</head>
<body>
  <?php
  $Total = 0.0;
  $Extras = 0.0;
  echo "<form method='post'>";
      include "Ingredientes.php";
        echo "<h2>Masa</h2>\n";
        echo "<select name='Masa'>\n";
          foreach ($Masa as $Key_Masa => $Value_Masa) {
            echo "<option id='Masa_Pizza'Masa value='$Value_Masa'>$Value_Masa</option>\n";
           }
        echo "</select>";
        echo "<h2>Estilo</h2>\n";
        echo "<select name='Estilo'\n>";
          foreach ($Estilo as $Key_Estilo => $Value_Estilo) {
            echo "<option id='Estilo_Pizza' value='$Value_Estilo'>$Value_Estilo</option>\n";
          }
        echo "</select>\n";
        echo "<h2>Extras</h2>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra0' checked='true'>Orégano</input>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra1'>Champiñones</input>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra2'>Piña</input>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra3'>Cebolla</input>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra4'>Aguacate</input>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra5'>Aceitunas</input>\n";
          echo "<input type='checkbox' name='Ingredientes[] value='Extra6'>Aceitunas (Negras)</input>\n";        
        echo "<br><br>";
      echo "<input type='submit' name='Pizza'></input><br><br>\n";
    echo "</form>\n";
  ?>
  <?php
    if (isset($_POST["Masa"])) {
      $Total = $Total+5.0;    
    } else {  
    echo "No se ha seleccionado ningún tipo de masa.";
    }
    if (isset($_POST["Estilo"])) {
      $Total = $Total+3.0;    
    } else {  
    echo "No se ha seleccionado ningún estilo.";
    }
    $Extras = count($_POST['Ingredientes'])*0.5;  
    $Total += $Extras;
    echo "<b>TOTAL: </b>".$Total;
  ?>
</body>
</html>