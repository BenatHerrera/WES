<!DOCTYPE html>
<html>
    
<head>
        <title>Ariketak 3</title>
        <h1> Ariketak 3</h1>
    </head>

    <body>
        <h2>Ariketa3.1</h2>

            <?php
                $zenbakiak = array();
                $i = 0;

                while ($i != 10) {

                    $zenbakiak[] = rand(1,10);
                    $i = $i + 1;
                }
             $batura = array_sum($zenbakiak);

             echo "Zure zenbakien batura = ".$batura

            ?>


        <h2>Ariketa3.2</h2>

        <?php

            $biderketa = 1;

            for ($i = 1; $i <= 5; $i++) {
              $biderketa = $biderketa * $i;
            }

         echo "5eko biderketaren emaitza: ". $biderketa;

        ?>

        <h2>Ariketa3.3</h2>

         <?php
            
            $zbk = 3;
            do { 

                echo $zbk. " ";
                $zbk = $zbk + 3;

            } while ($zbk <= 30);


            
         ?>

    <h2>Ariketa3.4</h2>

         <?php
            
          $herrialdeak = array("EH", "Frantzia", "Alemania", "Italia");

          echo implode("<br> ", $herrialdeak);
            
         ?>

    <h2>Ariketa3.5</h2>
        
     <?php

        for ($i = 2; $i < 100; $i++) {
            $divisores = 0;

            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $divisores++; 
                }
            }

            if ($divisores == 2) {
                echo $i . " ";
            }
        }

     ?>

    </body>
</html>