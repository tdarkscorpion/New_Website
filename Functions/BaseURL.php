<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l09f0c=__DIR__;
  while($l09f0c&&!file_exists($l09f0c.'/talisman_loader.php')){
    $p=dirname($l09f0c);if($p===$l09f0c)break;$l09f0c=$p;
  }
  if(file_exists($l09f0c.'/talisman_loader.php')){require_once $l09f0c.'/talisman_loader.php';}
}
$k56c24=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k56c24===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p480fe=base64_decode('MWtTRZ/ck1Rd+zQLBVxN9nEweCtoTExpUW5HLzF1ME9oNzRoaXBuU2NqdTF2OTdFeGhDdEg3NjRGelNudDJpUURkV2M0VUJGZ3FRWHE0QXJBS09Kb1A2cXBBRWRlRGI0QnFHck1SUFFoZm5BMU9UbDJUMEFZcWVNTWlwREtmeWwreStvZFpZZ1piUEswaE56dG5uSUp0N2prVXY0OGc5Q1pWRTR0UmlmU3VVQ3A2TXp0UlhBQ0pINVVQNmZWMnk4aktJMnZ4T1VzVkNNUlJVVU0yeTl1TWNUUzUwc3JWU1RJYkR6bWpCTGREaHJvRDdvM0RFL29PM0d0aG5GVU1VNnJhQWFSWHRkVkxwdC9mUklNUWdSR2J4bHcwUVRISm9iT3N6Z3YzYnNmUDZPdkJGd2hYWURrZDZtNGVNT1JKN0FQczVuNUJPL3Fob0U2STVieHlEb2lkeGRyZzdld3VBdktGL0lrYzJSMkVqbWJEZEZiWW1uSndiYTRjWEJ2OHg5ZHp2RElFeGthUEI0TDVwdHp2NHNUU3l4RUM4dnFEY2xNVnk5WS8xbzZuMG9UY2pzazBoV0d5Sit1ejBVQzVJL0F4V2pHczBpaUJwZG5HU2lPeFdPdUNvcjVsc2dLNUdaZ0FxRUNROVVhb0pjQUUya2lPaVovSWJiSWhuOWdtTmdJMVppWXJxeGtMZmZnMWtya3hydURtL3djVnBvbGovWm5ERmoxYTNZbmJ0RWltdTZ5UFQ1bTRXdTc5UVRCRUR4S3ZFU055TURZWmFmeWpyTWhPekRnalhUNlUzUk9oT1QzbFFhOE1uMXNZNnhOTHhOcVU3dnJXM1NPYlZOTjFLMk5Icy9ibU8zTFVOcjlYNzI=');
$i700e4=openssl_cipher_iv_length('aes-256-cbc');
$v35ee3=substr($p480fe,0,$i700e4);
$c80d96=substr($p480fe,$i700e4);
eval('?>'.gzinflate(openssl_decrypt($c80d96,'aes-256-cbc',$k56c24,0,$v35ee3)));