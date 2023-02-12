<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="index.css">
        <script type="text/javascript" src="index.js"></script>


        <title>Escoger Team</title>
    </head>
    <body>

        <h1>
            <?php
                echo "Bienvenido a mi página";
            ?>
        </h1>

        <!--matriz para agregar el team enemigo-->
        <!--debuffer, striper, tanque, buffer, inmunidad, escudo, nuker, iniciador, reseteador-->
        <!--reviver, cleanser, curador, invencibilidad, cc-->
        <?php
            $TeamEnemigo = array("debuffer", "striper", "tanque");
            $strTeamEnemigo = implode(", ", $TeamEnemigo);
            $TeamAliado = array();
            

            //condicionales

            if (in_array("debuffer", $TeamEnemigo)) {
                $TeamAliado[] = "inmunidad";

                $strTeamAliado = implode(", ", $TeamAliado);            
            }

            if (in_array("striper", $TeamEnemigo)) {
                $TeamAliado[] = "iniciador"; ;
                $TeamAliado[] = "lider speed";
                $TeamAliado[] = "cc";
                $TeamAliado[] = "nuker";

                $strTeamAliado = implode(", ", $TeamAliado);            
            }

            //imprimir variables
            echo "<h1>Mi equipo aliado: " . $strTeamEnemigo . "</h1>";
            echo "<h1>Mi equipo aliado: " . $strTeamAliado . "</h1>";

            //monstruos
            $Monstruo1 = array("invencibilidad", "striper");
            $Monstruo2 = array("inmunidad", "escudo");
            $Monstruo3 = array("curador");
            $Monstruo4 = array("iniciador", "debuffer");
            $Monstruo5 = array("cc", "cleanser");
            $Monstruo6 = array("ghgh", "nuker");
            $Monstruo7 = array("lider speed", "nuker");

            
            $selectedMonsters = array();
            $neededRoles = $TeamAliado;

            foreach ($Monstruo1 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo1;
                    $neededRoles = array_diff($neededRoles, $Monstruo1);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            foreach ($Monstruo2 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo2;
                    $neededRoles = array_diff($neededRoles, $Monstruo2);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            foreach ($Monstruo3 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo3;
                    $neededRoles = array_diff($neededRoles, $Monstruo3);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            foreach ($Monstruo4 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo4;
                    $neededRoles = array_diff($neededRoles, $Monstruo4);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            foreach ($Monstruo5 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo5;
                    $neededRoles = array_diff($neededRoles, $Monstruo5);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            foreach ($Monstruo6 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo6;
                    $neededRoles = array_diff($neededRoles, $Monstruo6);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            foreach ($Monstruo7 as $role) {
                if (in_array($role, $neededRoles)) {
                    $selectedMonsters[] = $Monstruo7;
                    $neededRoles = array_diff($neededRoles, $Monstruo7);
                    if (count($neededRoles) == 0) {
                        break;
                    }
                }
            }

            if (count($selectedMonsters)) {
                echo "Los monstruos seleccionados son: ";
                echo "<br>";
                foreach ($selectedMonsters as $monster) {
                    echo implode(", ", $monster) . "; ";
                    echo "<br>";
                }
            } else {
                echo "No se puede encontrar un equipo de monstruos que cumpla con los roles necesarios.";
            }

            
        ?>
        
    </body>
</html>