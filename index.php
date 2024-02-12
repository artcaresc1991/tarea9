<!DOCTYPE html>
<html lang="es">
    <head>
        <a class="disabled" href="https://fontmeme.com/es/fuente-pokemon/"><img src="https://fontmeme.com/permalink/240212/113d1953185adb8234a08a79407ee46e.png" 
                alt="fuente-pokemon" border="0"></a>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DWES: Tarea 9</title>
        <style>
            body {

                text-align: center;
                margin: 50px;
            }

            h1 {
               color: #006414 
            }
            .disabled {
                cursor: not-allowed;
                pointer-events: none;
            }


        </style>
       

    </head>
    <body background="pokemon.jpg">
        <?php
            $identificador=1;
            //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $curl=curl_init();
            curl_setopt($curl,CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$identificador/");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $resp= curl_exec($curl);
            curl_close($curl);
            
            $resultado= json_decode($resp, true);                                                      
        ?>

        <h1><?php echo "El nombre del pokemón es: ". $resultado['name'] ?></h1>

    </body>
</html>