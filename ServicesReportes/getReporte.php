<?php
if(isset($_GET['id']) && isset($_GET['selectFabrica']) && isset($_GET['valorFabrica']) && isset($_GET['selectModelo']) && isset($_GET['valorModelo']) && isset($_GET['selectAnio']) && isset($_GET['valorAnio']) && isset($_GET['selectColor']) && isset($_GET['valorColor']) && isset($_GET['selectMotor']) && isset($_GET['valorMotor']) && isset($_GET['selectTipo']) && isset($_GET['valorTipo']) && isset($_GET['selectKilometraje']) && isset($_GET['valorKilometraje']) && isset($_GET['catalogoOrdenar']) && isset($_GET['formaOrdenar']) && isset($_GET['selectLimite']))
        {
                                                                                            
            if($_GET['id']!=''){
                $data = array("fabrica" =>$_GET['selectFabrica'],"modelo" =>$_GET['selectModelo'],"ANIO" =>$_GET['selectAnio'],"color" =>$_GET['selectColor'],"motor" =>$_GET['selectMotor'],"tipo" =>$_GET['selectTipo'],"kilometraje" =>$_GET['selectKilometraje'], "condicionFabrica" =>$_GET['valorFabrica'],"condicionModelo" =>$_GET['valorModelo'], "condicionANIO" =>$_GET['valorAnio'], "condicionColor" =>$_GET['valorColor'], "condicionMotor" =>$_GET['valorMotor'], "condicionTipo" =>$_GET['valorTipo'], "condicionKilometraje" =>$_GET['valorKilometraje'], "agrupar" => "", "ordenar" => " ".$_GET['catalogoOrdenar']." ".$_GET['formaOrdenar'], "numeroRegistros" =>" ".$_GET['selectLimite']);                                                                    
                $data_string = json_encode($data);   
                $ch = curl_init('http://localhost:8089/TechoCars/consultaDinamica/'.$_GET['id']);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_string))                                                                       
                );                                                                                                                   
                header('Content-Type: application/json');
                $result = curl_exec($ch);
                echo $result;
            }else{
                $data = array("fabrica" =>$_GET['selectFabrica'],"modelo" =>$_GET['selectModelo'],"ANIO" =>$_GET['selectAnio'],"color" =>$_GET['selectColor'],"motor" =>$_GET['selectMotor'],"tipo" =>$_GET['selectTipo'],"kilometraje" =>$_GET['selectKilometraje'], "condicionFabrica" =>$_GET['valorFabrica'],"condicionModelo" =>$_GET['valorModelo'], "condicionANIO" =>$_GET['valorAnio'], "condicionColor" =>$_GET['valorColor'], "condicionMotor" =>$_GET['valorMotor'], "condicionTipo" =>$_GET['valorTipo'], "condicionKilometraje" =>$_GET['valorKilometraje'], "agrupar" => "", "ordenar" => " ".$_GET['catalogoOrdenar']." ".$_GET['formaOrdenar'], "numeroRegistros" =>" ".$_GET['selectLimite']);                                                                    
                $data_string = json_encode($data);   
                $ch = curl_init('http://localhost:8089/TechoCars/consultaDinamica'); 
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_string))                                                                       
                );                                                                                                                   
                header('Content-Type: application/json');
                $result = curl_exec($ch);
                echo $result;
            }
        
        }
        else{
            echo "error: datos Faltantes, datos:";
        }

