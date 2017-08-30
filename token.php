 <?php
include_once('scripts.php');
strip_php_extension();
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
		  ];

$payload = json_encode($header);		
$payload = base64_encode($header);

// Generates a keyed hash value using the HMAC method
$signature = hash_hmac('sha256','$header.$payload', $key, true);

//base64 encode the signature
$signature = base64_encode($signature);

//concatenating the header, the payload and the signature to obtain the JWT token
$token = "$header.$payload.$signature";
echo $token;
?> 
