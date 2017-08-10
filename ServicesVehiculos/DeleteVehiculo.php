<?php
     
        if(isset($_GET['id']))
        {
            $ch = curl_init('http://localhost:8089/TechoCars/vehiculos/'.$_GET['id']);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            $result = curl_exec($ch);
            echo $result;
            
        }
