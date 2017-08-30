<?php
function strip_php_extension()  
{  
  $uri = $_SERVER['REQUEST_URI'];  
  $ext = substr(strrchr($uri, '.'), 1);  
  if ($ext == 'php')  
  {  
    $url = substr($uri, 0, strrpos($uri, '.'));  
    redirect($url);  
  }  
}  

//==== Redirect. Try PHP header redirect, then Java, then http redirect
function redirect($url)  
{  
  if (!headers_sent())  
  {  
    /* If headers not yet sent => do php redirect */  
    header(http://jwttoken-tokenp.a3c1.starter-us-west-1.openshiftapps.com/token);  
    exit;  
  }  
  else  
  {
  
  }  
}  
