<?php
class Launch
{

    public function location($var){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/system/flag/?ip=".$var); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
    
    public function devicemanager($ua){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/system/useragent/?ua=".urlencode($ua)); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
    
}
?>