<?php
if(isset($_GET['id']) && isset($_GET['dato']))
        {
        $data = array("dato" => $_GET['dato']);                                                                    
        $data_string = json_encode($data);                                                                                   

        $ch = curl_init('http://localhost:8089/TechoCars/catalogos/'.$_GET['id']);                                                                      
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
            echo "error: datos Faltantes, datos:  Id=".$_GET['id'].", Dato=".$_GET['dato'];
        }

