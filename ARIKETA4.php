<!DOCTYPE html>
<html>
    <head>
        <title>Ariketak 4</title>
        <h1> Ariketak 4</h1>
    </head>

    <body>
    
        <h2> Ariketak 4.1</h2>
            
            <!--Zenbakien Batura (array erabiliz): ausazko 5 zenbakien batura egin (1tik 100erako balioak izango dute). 
            Taula batean erakutsiko dituzue balioak eta azkenengo lerroan batuketaren emaitza agertuko da.-->

            <?php

            $zbkarray = [];
            $kantitatea = 6;
            
            echo "<table border 1><tr>";
            for ($i = 1; $i < $kantitatea; $i++) {
                $zbkarray[] = rand(1, 100);
                echo "<th>". $i." Zenbakia</th>";

                
            }           
            echo "</tr>";


            
            echo "<tr>";
            foreach ($zbkarray as $balioa) {
                echo "<td>" . $balioa . "</td>";       
            }
            
            echo "</tr>";

            echo "<tr>";

            echo "<td>";
            
            echo "Batura: ". array_sum($zbkarray);

            echo "</td>";

            echo "</tr>";


            echo "</table>";

            ?>


        <h2> Ariketak 4.2</h2>

        <!-- Arrayaren Elementuak Ordenatzea (sort funtzioa erabiliz): ondorengo balioak ordenatu eta bistaratu - "EH", "Frantzia", "Alemania", "Italia".-->

            <?php

                $herrialdeak = ["EH","FRANTZIA","ALEMANIA","ITALIA"];
                
                echo "<table border 1>";
                echo "<tr>";

                for ($i = 1; $i < 5; $i++) {
                    $zbkarray[] = rand(1, 100);
                    echo "<th>". $i.". Herrialdea</th>";
                } 
                echo "</tr>";
                
                
                echo "<tr>";
                sort($herrialdeak);
                foreach ($herrialdeak as $izenak) {
                echo "<td>" . $izenak . "</td>";       
                }


                echo "</tr>";
                echo "</table>";

            ?>
        <h2> Ariketak 4.3</h2>
        <!-- Arrayaren Elementuak Bikoitia edo Ez Bakoitia (foreach eta if erabiliz): 
            kargatu 6 ausazko zenbaki oso (1etik 100era) zerrenda batean eta bakoitzeko esan bikoitia den ala ez.-->

            <?php
            

            $zbkbi = [];
            $kantitatebi = 3;


            echo "<table border 1>";
                echo "<tr>";
                echo "<th>Zenbakia"; 
                echo "<th>Bikoitia"; 
                echo "</tr>";
                echo "<tr>";
                
                for ($i = 0; $i < $kantitatebi; $i++) {
                $zbkbi[] = rand(1, 100);
                
                }    
                
                foreach ($zbkbi as $zbkbikoiti) {
                    echo "<tr>";
                    echo "<td>" . $zbkbikoiti . "</td>";
    
                    if ($zbkbikoiti % 2 === 0) {
                        echo "<td>Bai</td>";
                    } else {
                        echo "<td>Ez</td>";
                    }
                    
                    echo "</tr>";
                }
            echo "</table>";


            ?>



    </body>

</html>
