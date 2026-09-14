<!DOCTYPE html>
<html>
    
<head>
        <title>Ariketak 3</title>
        <h1> Ariketak 3</h1>
    </head>

    <body>
        <h2>Ariketa3.1</h2>
        <!--Egin 10 ausazko zenbakien (1tetik 10era) batura while erabiliz (rand funtzioa erabili).-->

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

        <!--5eko Biderketa (for erabiliz): biderkatu 5 zenbakiak osatzen dituen zenbaki guztiak (1,2,3,4 eta 5).-->

        <?php

            $biderketa = 1;

            for ($i = 1; $i <= 5; $i++) {
              $biderketa = $biderketa * $i;
            }

         echo "5eko biderketaren emaitza: ". $biderketa;

        ?>

        <h2>Ariketa3.3</h2>

        <!-- 3ko gehiketak (do..while erabiliz): erakutsi 3tik 30era dauden zenbakiak baina hirunaka gehituz. -->

         <?php
            
            $zbk = 3;
            do { 

                echo $zbk. " ";
                $zbk = $zbk + 3;

            } while ($zbk <= 30);


            
         ?>

    <h2>Ariketa3.4</h2>
        <!-- Array Elementuak Bistaratu (foreach erabiliz): 
            array sinple bat honela definitzen da: $herrialdeak = array("EH", "Frantzia", "Alemania", "Italia");-->


         <?php
            
          $herrialdeak = array("EH", "Frantzia", "Alemania", "Italia");

          echo implode("<br> ", $herrialdeak);
            
         ?>

    <h2>Ariketa3.5</h2>
    
    <!-- 1 eta 100 artean dauden zenbaki lehenak (primoak) erakutsi eta zenbatu (for eta if erabiliz).
     Zenbaki lehena den jakiteko: 1 edo bera ez den beste edozein zenbakirekin zatitzen baduzu, zero ez den beste hondar bat lortzen da.-->
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
