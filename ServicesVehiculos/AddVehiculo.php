<?php
if(isset($_GET['fabrica']) && isset($_GET['modelo']) && isset($_GET['ANIO']) && isset($_GET['color']) && isset($_GET['motor']) && isset($_GET['tipo']) && isset($_GET['kilometraje']))
        {
        $data = array("fabrica" => $_GET['fabrica'], "modelo" => $_GET['modelo'], "ANIO" => $_GET['ANIO'], "color" => $_GET['color'], "motor" => $_GET['motor'], "tipo" => $_GET['tipo'], "kilometraje" => $_GET['kilometraje']);                                                                    
        $data_string = json_encode($data);                                                                                   

        $ch = curl_init('http://localhost:8089/TechoCars/vehiculos');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   

        $result = curl_exec($ch);
        echo $result;
        }
        else{
            echo "error: datos Faltantes, datos:  fabrica=".$_GET['fabrica'].", modelo=".$_GET['modelo'].", año=".$_GET['ANIO'].", color =".$_GET['color'].", motor=".$_GET['motor'].", tipo=".$_GET['tipo'].", kilometraje=".$_GET['kilometraje'];
        }
