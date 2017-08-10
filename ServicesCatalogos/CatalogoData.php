<?php

if (isset($_GET['id'])) {
    $url = 'http://localhost:8089/TechoCars/catalogo/' . $_GET['id'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
header('Content-Type: application/json');
echo $json;

//    $dataTable = json_decode($json);
//    
//    if ($_GET['id'] == 1) {
//        // Open the table
//        $tabla = "<table class='container'>";
//        // Cycle through the array
//        foreach ($dataTable as $values) {
//            // Output a row
//            $tabla. "<tr>" .
//                    "<td style='width:70px;'>$values->id</td>" .
//                    "<td>$values->nombre</td>" .
//                    "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='myAjax(" . $values->id . ");'/></td>" .
//                    "</tr>";
//        }
//        // Close the table
//        $tabla ."</table>";
//        echo $tabla;
//    } else if ($_GET['id'] == 2) {
//        // Open the table
//        $tabla = "<table class='container'>";
//        // Cycle through the array
//        foreach ($dataTable as $values) {
//            // Output a row
//            $tabla . "<tr>" .
//                    "<td style='width:70px;'>$values->id</td>" .
//                    "<td>$values->nombre</td>" .
//                    "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='myAjax(" . $values->id . ");'/></td>" .
//                    "</tr>";
//        }
//        // Close the table
//        $tabla ."</table>";
//        echo $tabla;
//    } else if ($_GET['id'] == 3) {
//        // Open the table
//        $tabla = "<table class='container'>";
//        // Cycle through the array
//        foreach ($dataTable as $values) {
//            // Output a row
//            $tabla . "<tr>" .
//                    "<td style='width:70px;'>$values->id</td>" .
//                    "<td>$values->ANIO</td>" .
//                    "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='myAjax(" . $values->id . ");'/></td>" .
//                    "</tr>";
//        }
//        // Close the table
//        $tabla ."</table>";
//        echo $tabla;
//    } else if ($_GET['id'] == 4) {
//        // Open the table
//        $tabla = "<table class='container'>";
//        // Cycle through the array
//        foreach ($dataTable as $values) {
//            // Output a row
//            $tabla . "<tr>" .
//                    "<td style='width:70px;'>$values->id</td>" .
//                    "<td>$values->motor</td>" .
//                    "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='myAjax(" . $values->id . ");'/></td>" .
//                    "</tr>";
//        }
//        // Close the table
//        $tabla ."</table>";
//        echo $tabla;
//    } else if ($_GET['id'] == 5) {
//        // Open the table
//        $tabla = "<table class='container'>";
//        // Cycle through the array
//        foreach ($dataTable as $values) {
//            // Output a row
//            $tabla . "<tr>" .
//                    "<td style='width:70px;'>$values->id</td>" .
//                    "<td>$values->color</td>" .
//                    "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='myAjax(" . $values->id . ");'/></td>" .
//                    "</tr>";
//        }
//        // Close the table
//        $tabla ."</table>";
//        echo $tabla;
//    } else if ($_GET['id'] == 6) {
//        // Open the table
//        $tabla = "<table class='container'>";
//        // Cycle through the array
//        foreach ($dataTable as $values) {
//            // Output a row
//            $tabla . "<tr>" .
//                    "<td style='width:70px;'>$values->id</td>" .
//                    "<td>$values->tipo</td>" .
//                    "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='myAjax(" . $values->id . ");'/></td>" .
//                    "</tr>";
//        }
//        // Close the table
//        $tabla ."</table>";
//        echo $tabla;
//    } else {
//        echo "Error: catalogo no encontrado";
//    }
}
       