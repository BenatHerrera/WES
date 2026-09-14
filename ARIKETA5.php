<!DOCTYPE html>
<html>
<head>
    <title>Ariketak 5</title>
    <h1> Ariketak 5</h1>
</head>
<body>
    <h2>Ariketa 5.1</h2>

    <!-- Array Multidimentsionala Bistaratu (foreach erabiliz): sortu array multidimentsional bat ondorengo idazleekin 
     "izena" => "Harry Potter", "autorea" => "J.K. Rowling", "izena" => "Game of Thrones", 
     "autorea" => "George R.R. Martin", "izena" => "The Hobbit", "autorea" => "J.R.R. Tolkien" eta bistaratu datuak.


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

    <h2>Ariketa 5.2</h2>

        <!--Array Multidimentsionalaren Elementua Bilketa (for erabiliz): kalkulatu eta bistaratu ondorengo ikasleen batazbesteko nota; 
        "ikaslea" => "Jon", "nota" => 8, "ikaslea" => "Ane", "nota" => 9, "ikaslea" => "Markel", "nota" => 7.-->

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
   
    <h2>Ariketa 5.3</h2>

        <!--Array Multidimentsionala Baldintzak (foreach eta if erabiliz): esan ondorengo ikasleek nota txarra, ona edo oso ona daukaten 
        (<5 txarra, <7 ona, >7 oso ona). "ikaslea" => "Jon", "nota" => 8, "ikaslea" => "Ane", "nota" => 6, "ikaslea" => "Markel", "nota" => 3
        -->

        <?php

            

            $notak = [
            ["ikaslea"=> "Jon", "nota"=>8],
            ["ikaslea"=> "Ane", "nota"=>6],
            ["ikaslea"=> "Markel", "nota"=>3]
            ];

            foreach($notak as $value){
                
                if($value["nota"] < 5){
                    
                    echo "Ikaslea: " . $value["ikaslea"] . 
                    " - Nota: " . $value["nota"] . 
                    " Nota Txarra<br>";

                
                } elseif($value["nota"]<7){

                    echo "Ikaslea: " . $value["ikaslea"] . 
                    " - Nota: " . $value["nota"] . 
                    " Nota ona<br>";

                } else {

                    echo "Ikaslea: " . $value["ikaslea"] . 
                    " - Nota: " . $value["nota"] . 
                    " Nota Oso Ona  <br>";

                }



            }
            



            
        ?>

   

    <h2>Ariketa 5.4</h2>

    <!--Array multidimentsionala (foreach erabiliz): sortu array bat gordetzeko 3 ikasleen zerrenda bat. 
    Ikasle bakoitzeko bere izena, abizena, telefonoa eta adina gorde nahi da. Ondoren, taula batean bistaratu.-->

        <?php

            $ikasleak = [
            ["izena"=> "Mikel", "abizena"=>"Merino", "telefonoa"=>"642 123 567", "adina"=>"32"],
            ["izena"=> "Markel", "abizena"=>"Susaeta", "telefonoa"=>"678 987 312", "adina"=>"28"],
            ["izena"=> "Ohian", "abizena"=>"Sancet", "telefonoa"=>"634 234 226", "adina"=>"25"]

            ];


            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Izena</th>";
            echo "<th>Abizena</th>";
            echo "<th>Telefonoa</th>";
            echo "<th>Adina</th>";
            echo "</tr>";

            foreach ($ikasleak as $value) {
               
            
            echo "<tr>";
                echo "<td>" . $value["izena"] . "</td>";
                echo "<td>" . $value["abizena"] . "</td>";
                echo "<td>" . $value["telefonoa"] . "</td>";
                echo "<td>" . $value["adina"] . "</td>";
            echo "</tr>";
            }

            echo "</table>";
            
        ?>

    <h2>Ariketa 5.5</h2>

    <!--Aurreko ariketa moldatu ondorengo datuak gordetzeko ere bai: 
    2 abizen, 2 telefono eta modulo bakoitzaren nota (3 gutxienez).-->



     <?php

            $ikasleak = [
            ["izena"=> "Mikel", "abizena"=>["Merino","Lopez"], "telefonoa"=>["642 123 567","987 123 456"], "adina"=>"32"],
            ["izena"=> "Markel", "abizena"=>["Susaeta","Gerenabarrena"], "telefonoa"=>["678 987 312","901 342 886"], "adina"=>"28"],
            ["izena"=> "Ohian", "abizena"=>["Sancet","Simon"], "telefonoa"=>["634 234 226","932 449 665"], "adina"=>"25"]

            ];


            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Izena</th>";
            echo "<th>Abizena</th>";
            echo "<th>Bigarren Abizena</th>";
            echo "<th>Telefonoa</th>";
            echo "<th>Bigarren Telefonoa</th>";
            echo "<th>Adina</th>";
            echo "</tr>";

            foreach ($ikasleak as $value) {
               
            
            echo "<tr>";
                echo "<td>" . $value["izena"] . "</td>";
                echo "<td>" . $value["abizena"][0] . "</td>";
                echo "<td>" . $value["abizena"][1] . "</td>";
                echo "<td>" . $value["telefonoa"][0] . "</td>";
                echo "<td>" . $value["telefonoa"][1] . "</td>";
                echo "<td>" . $value["adina"] . "</td>";
            echo "</tr>";
            }

            echo "</table>";
            
        ?>


    </body>


</html>
