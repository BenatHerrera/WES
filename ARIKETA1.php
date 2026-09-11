<!DOCTYPE html>
<html>
<head>
    <title>Ariketak 1</title>
    <h1> Ariketak 1</h1>
</head>
<body>
    <h2>Ariketa 1.1</h2>

    <?php
    $zbk1 = 5; 
    $balioa = 10;
    //variable tipo integer
    echo " zenbakia : " . $zbk1 . "da";

    ?>

    <h2>Ariketa 1.2</h2> 

    <?php
        if ($zbk1 < $balioa){
            echo "zenbakia txikiagoa da balioa baino";

        } else if ($zbk1 > $balioa){
            echo "zenbakia handiagoa da balioa baino"; 
            
        }else {
            echo "zenbakia zure ezarritako balioa berdina da";
        };
        
    ?>

    <h2>Ariketa 1.3</h2>

        <?php

            $erosketak = readline("Zenbat erosketak egin dituzu?:  ");
            
                if ($erosketak >10 ) {

                echo "Zure erosketak 10 baino gehiago dira";

                } else {

                echo "Erosketa gutxi egin dituzu.";

                }

        ?>



    <h2>Ariketa 1.4</h2>
       
    <label for="<?php echo $pin;?>"> Sartu zure    PINA (8 karaktere):</label>

        <input
            type="text"
            id="pin"
            name="name"
            required
            minlength="8"
            maxlength="8"
            size="10" />  

        <?php

            $pin = "12345678";

            $respuesta = readline("Sartu zure PIN-a: ");

            while ($respuesta != $pin) {
                echo "Zure PIN-a okerra da.\n";
                $respuesta = readline("Sartu berriro: ");
            }

            echo "PIN zuzena da.\n";

        ?>


</body>


</html>