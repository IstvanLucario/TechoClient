<?php
 if(isset($_GET['id']))
        {
         $url = 'http://localhost:8089/TechoCars/catalogo/'.$_GET['id'];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        header('Content-Type: application/json');
        echo $json;
        }

