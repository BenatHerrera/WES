<!DOCTYPE html>
<html>
    
<head>
        <title>Ariketak 2</title>
        <h1> Ariketak 2</h1>
    </head>

    <body>
        <h2>Ariketa2.1</h2>
            <?php

                
                $egunak = ["igandea","astelehena", "asteartea", "asteazkena", "osteguna", "ostirala", "larunbata", "igandea"];

                $gaurkoeguna = date ('w');

                echo "Gaur ".$egunak[$gaurkoeguna]. " da";

            ?>


        <h2>Ariketa2.2</h2>

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