<?php        
        $url = 'http://localhost:8089/TechoCars/vehiculos';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
        //curl_setopt($ch, CURLOPT_TIMEOUT, 5);
       // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
       // echo $json;
                                                                                      
                                                                                                                  
                          
        
      
        $dataTable =  json_decode($json);
            
            // Open the table
            echo "<table id='consultaVehiculos' class='container'>";

            // Cycle through the array
            foreach ($dataTable as $values) 
            {

                // Output a row
                echo "<tr>";
                echo "<td style='width:70px;'>$values->id</td>";
                echo "<td>$values->fabrica</td>";
                echo "<td>$values->modelo</td>";
                echo "<td>$values->ANIO</td>";
                echo "<td>$values->color</td>";
                echo "<td>$values->motor</td>";
                echo "<td>$values->tipo</td>";
                echo "<td>$values->kilometraje</td>";
                $kilom=str_replace('km', '', $values->kilometraje);
                echo "<td style='width:110px;'><img class='update'src='img/edit.png' alt='modificar' onclick='openPanelM(".$values->id.",".$values->idFabrica.",".$values->idModelo.",".$values->idAnio.",".$values->idColor.",".$values->idMotor.",".$values->idTipo.",".$kilom.");'/></td>";
                echo "<td style='width:110px;'><img class='delete' src='img/trash-icon.png' alt='eliminar' onclick='eliminar(".$values->id.");'/></td>";
                echo "</tr>";
            }

            // Close the table
            echo "</table>";
       
