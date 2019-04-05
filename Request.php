<?php
    
foreach (getallheaders() as $name => $value) {
  /* echo "$name: $value\n"; */
}

class Request {
    
function emu_getallheaders() { 
        foreach ($_SERVER as $name => $value) 
       { 
           if (substr($name, 0, 5) == 'HTTP_') 
           { 
               $name = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5))))); 
               $headers[$name] = $value; 
           } else if ($name == "CONTENT_TYPE") { 
               $headers["Content-Type"] = $value; 
           } else if ($name == "CONTENT_LENGTH") { 
               $headers["Content-Length"] = $value; 
           } 
       } 
       return $headers; 
    } 
    
    
function getGET()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        $response = $_GET;
}
    
    
function getPOST() 
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
        $response = $_POST;
    return $response; 
}
    
    
function getURL($key, $value){
   $value = preg_replace('/[\[{\(].*[\]}\)]/U' , $value, $this->routes[$key]);
   return $value;
}
    
    
function getURI()
    {
        return $_SERVER['REQUEST_URI'];
    }
    
    
    
function getClientIp()
    {
        return $_SERVER['REMOTE_ADDR'];
    }   
    
    
    
    
    
    
    
    
    
    
    
/*
function get_contents() {
  file_get_contents("http://example.com");
 print_r($http_response_header);
}
get_contents();
*/ 
/*
if(!function_exists('getallheaders')) { 
   function getallheaders($url,$format=0,$httpn=0){ 
    $fp = fsockopen($url, 80, $errno, $errstr, 30); 
    if ($fp) { 
       $out = "GET / HTTP/1.1\r\n"; 
       $out .= "Host: $url\r\n"; 
       $out .= "Connection: Close\r\n\r\n"; 
       fwrite($fp, $out); 
       while (!feof($fp)) { 
           $var.=fgets($fp, 1280); 
       } 
    $var=explode("<",$var); 
    $var=$var[0]; 
    $var=explode("\n",$var); 
    fclose($fp); 
    return $var; 
    } 
    } 
} 
*/
        
}
?> 