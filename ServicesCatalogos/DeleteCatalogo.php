<?php

   if(isset($_GET['id']) && isset($_GET['catalogo']))
        {
            $ch = curl_init('http://localhost:8089/TechoCars/'.$_GET['catalogo'].'/'.$_GET['id']);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            $result = curl_exec($ch);
            echo $result;
            
        }


