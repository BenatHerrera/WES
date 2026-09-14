<!DOCTYPE html>
<html>
    
<head>
        <title>Ariketak 2</title>
        <h1> Ariketak 2</h1>
    </head>

    <body>
        <h2>Ariketa2.1</h2>
        <!--date funtzioa erabiliz lortu asteko egun zenbakia eta ondoren idatzi zein egunari dagokion (Adibidez 1 → astelehena, etab). if eta elseif erabiliz:-->
            <?php

                
                $egunak = ["igandea","astelehena", "asteartea", "asteazkena", "osteguna", "ostirala", "larunbata", "igandea"];

                $gaurkoeguna = date ('w');

                echo "Gaur ".$egunak[$gaurkoeguna]. " da";

            ?>


        <h2>Ariketa2.2</h2>
        <!--Ingeles klaseko notak bistaratu (switch eta case erabiliz): nota F bada “oso gutxi”, D “gutxi”, C “nahiko”, B “ondo”, A “oso ondo” (nota aldagai batean gorde).-->
        <?php

            $nota = readline("Zein da zure ingeleseko nota? F/D/C/B/A: ");

            switch ($nota){

            case "F":
                echo "oso gutxi";
                break;
            

            case "D":
                echo "gutxi";
                break;
            
            case "C":
                echo "nahiko";
                break;
            
            case "B":
                echo "ondo";
                break;

            case "A":
                echo "oso ondo"; 
                break;
            
        
            }

        ?>



            <h2>Ariketa2.3</h2>

            <!--Gutxieneko eta Gehienezko Kopurua Bistaratu (if erabili): rand funtzioa erabiliz lortu 0 eta 30 bitarteko zenbakia 
            eta esan zenbakia 0-10 artean dagoen 10 eta 20 artean edo 20 eta 30 artean dagoen.-->

                <?php

                $zbk = rand(0,30);

                if ($zbk >= 10 & $zbk <= 20 ){

                    echo "Aterako zenbakia ".$zbk." da eta "."Zure zenbakia 10-20 artean dago";

                } else if ($zbk >= 20 & $zbk <= 30){

                    echo "Aterako zenbakia ".$zbk." da eta "."Zure zenbakia 20-30 artean dago";

                } else {

                        echo "Aterako zenbakia ".$zbk." da eta "."Zure zenbakia 0-10 artean dago";
                }
                ?>


    </body>
</html>
