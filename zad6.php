<?php

//Напишете вложени цикли, които извеждат таблицата от прикачения файл table.png
// (в края на условието)

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table table-bordered">
        <?php
        //Правим цикъл за извеждане на числата от 1 до 10 за реда
        for ($i = 1; $i <= 10; $i++) {
            // Извеждаме html таг за ред
            echo '<tr>';
            //Правим цикъл за извеждане на числата от 1 до 10 за колоната
            for($j = 1; $j <= 10; $j++){
                // Извеждаме html таг за колона
                echo '<td>' ;
                // Извеждаме произведението на числата (реда по колоната)
                echo  $p=$i * $j;
                // Извеждаме html затварящ таг за колона
                echo '</td>';
            }
          // Извеждаме html затварящ таг за реда
          echo '</tr>';
        }
        ?>  
    </table>

 
</html>