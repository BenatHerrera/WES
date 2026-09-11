<!DOCTYPE html>
<html>
<head>
    <title>Ariketak 5</title>
    <h1> Ariketak 5</h1>
</head>
<body>
    <h2>Ariketa 5.1</h2>


        <?php

           $filmak = [
            ["nombre" => "Harry Potter", "autor" => "J.K. Rowling"],
            ["nombre" => "Games Of Thrones", "autor" => "George R.R. Martin"],
            ["nombre" => "The Hobbit", "autor" => "J.R.R. Tolkien"]
            ];
           
           
            foreach($filmak as $film){
                echo "Titulo: " . $film["nombre"]." - Autor: ".$film["autor"]."<br>";

            }
         
        ?>

    <h2>Ariketa 5.3</h2>

        <?php


            $notak = [
            ["ikaslea"=> "Jon", "nota"=>8],
            ["ikaslea"=> "Ane", "nota"=>9],
            ["ikaslea"=> "Markel", "nota"=>7]
            ];
            $nota_guztiak = array_column($notak, 'nota');

            $batazbestekoa = array_sum($nota_guztiak) / count($nota_guztiak);

            for ($i = 0; $i < count($notak); $i++) {

            echo "Ikaslea: ".$notak[$i]["ikaslea"].", Nota: ".$notak[$i]["nota"]."<br>";
            

            };

            echo "Batazbestekoa: ".$batazbestekoa;


            
        ?>

   

    <h2>Ariketa 5.4</h2>



    

            <?php

            
            ?>

    <h2>Ariketa 5.5</h2>



    

            <?php

            
            ?>


    </body>


</html>