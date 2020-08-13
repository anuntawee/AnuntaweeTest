<?php
 $url = 'https://dummy-api.cm.edu/employees/'; 
  
 $data = "fn=login&test=1";
 
 /*$data = array(
       'fn' => "login" 
   );*/
   $username='user7';
   $password='8LsyLHBt6HXAMFTRQXYw';
  
   try{
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$url);
   curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
   curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
   curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
   $result=curl_exec ($ch);
   $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
   curl_close ($ch);
 
   
   print_r($ch);
   
 }catch(Exception $ex){
 
   echo $ex;
 }
  
    
?>