<?php
define(‘SECRET_KEY’,’Key’) /// secret key can be any random string

$tokenId = base64_encode(mcrypt_create_iv(32));
$issuedAt = time();
$notBefore = $issuedAt + 10; //Adding 10 seconds
$expire = $notBefore + 7200; // Adding 60 seconds
  $header = [
           'typ' => 'JWT',
		   'alg' => 'HS256'
		  ];

$header = json_encode($header);		
$header = base64_encode($header);


$payload = [      
		"country" => "Romania",
		"name" => "Octavia-Anghel",
		"email" => "octaviaanghel@gmail.com"
		‘iat’ => $issuedAt, // Issued at: time when the token was generated
		‘jti’ => $tokenId, // Json Token Id: an unique identifier for the token
		‘iss’ => $serverName, // Issuer
		‘nbf’ => $notBefore, // Not before
		‘exp’ => $expire, // Expire
		  ];
		  
$payload = json_encode($header);		
$payload = base64_encode($header);

// Generates a keyed hash value using the HMAC method
$signature = hash_hmac('sha256','$header.$payload', SECRET_KEY, true);

//base64 encode the signature
$signature = base64_encode($signature);

//concatenating the header, the payload and the signature to obtain the JWT token
$token = "$header.$payload.$signature";
echo $token;
?> 
