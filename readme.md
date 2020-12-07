>## JWT Authentication: 

*	JWT: JSON WEB TOKEN.
*	Why: JWT is a standard process to transfer json data or secure Json Object transmitting system. Encrypt & decrypt json object for security purpose is the main goal of JWT.
*	Key: Encrypt & decrypt signed with public/private a key.

<p align="center"><a href="#" ><img src="https://i.ibb.co/VwSZw8S/0512-FC6-B-716-A-4205-BD87-CD75486-EA702.png" width="600"></a></p>  

*	Uses: 
	-	Authentication Purpose.
	-	Secure Data Transfer. 

>## JWT Structure 3 part: 

*	Header: 
	-	Algorithm.
	-	Type. 
*	Payload (Main Data): 
	-	Subject.
	-	Name. 
	-	May be a lot of Properties.
*	Signature: 
	-	Encryption type or Encoding type.
*	Token: 
	-	Finally Created a token with a key.
	-	Must have to use that key to decode.

>## JWT Resource: 

*	ENV (Environmental variable): 
	-	SET.env: KEY=value
	-	USE.env: env(‘key’)
	-	Why: Set important constant in.env
	-	Set JWT token key inside.env
*	Website: 
	-	Website: JWT.io
	-	Version: created by firebase company
	-	Command: composer require firebase/php-jwt
	-	Why: To use JWT Build in functions. 
	-	 "iss" (Issuer)
	-	 "sub" (Subject)
	-	 "aud" (Audience)
	-	 "exp" (Expiration Time)
	-	 "nbf" (Not Before)
	-	 "iat" (Issued At)
	-	 "jti" (JWT ID)
>##	Basic Syntax: 
```sh
use \Firebase\JWT\JWT;
$key = "example_key";
$payload = [
    	"iss" => "https://developer.com",
    	"sub" => "login Information",
    	"iat" => time();
"exp" => time()+3600;

$jwt = JWT::encode($payload, $key);
$decoded = JWT::decode($jwt, $key, array('HS256'));
``` 
