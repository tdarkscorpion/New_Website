<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l68dc6=__DIR__;
  while($l68dc6&&!file_exists($l68dc6.'/talisman_loader.php')){
    $p=dirname($l68dc6);if($p===$l68dc6)break;$l68dc6=$p;
  }
  if(file_exists($l68dc6.'/talisman_loader.php')){require_once $l68dc6.'/talisman_loader.php';}
}
$k8d1f6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8d1f6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pce8c4=base64_decode('Nsr3TT0WpG3FqylcOTqmm2QyaURMZ0RPeFJySkx2R1VBd3lFMVpTT2c5NmtRTzdtcml3eHpESk9GcTNmaWVXTDZMQnNBVGdqZ0lPUzQyNkhqblZiaS9mL3RDMzZna3pZdlA5VXBLOVFtemNDSUJlWmo0OHRsczZwQTVRM3RPNE9yVWJXaVJDSnJFRXZOTkJHc01IZTNlSGlWYmlieFdnNDE4SWczcENWQ2FoT2JieEQyLzFyZ0Q0ZVRYWDdGNTdJaEtrSG5MdkZ0bklCZkpjdnJJNTdKQ2QvdUlqbkRneHNucW5ySkQxWkFoRTF3clJXcjdLZ2VGbkVFWHppRHM0bHR0T0ZMNDJhNEtNd1IxTUhqVGJJb2tJOFdQaHhMWEVFNFJhZVR4WS9EQUcrcE05WkYxSkZMcDFObndaVVN4MFZlZmtDVnBqU3ZGK0Z6eU9OZ0VSQzFBOFllOURzdlBkWkU0ZzgrZWR6RW5VVWZsL3BUWnZmb2JueWlzNTBSVlljT0FWT25McFREM2xHczUyWjJkREg3SGh0emhNZ1lxRllOYStRcUhMYlhwaFZyYm5obXZneDlEdmNMRjZNaXRFdzFuaXRyZTNpMXJSWlh3cHVpUTI2cEhkZXFOYzlBejhqN2h2NEwvNmxJUk9wcndqWHZkanV1N2ZCSXFHQlZxSlByckxnVHh2ZXloV0syS2djWEZuc2dua2xVV1RUcHliRUpJOWJFMWpNZmEvaGEzNnpSRHV3RGZTRklCTnlZTUE4NStBNWZCQ0xjM1Z4SzZNUlZlQjZNMDVKUndJMzVpYk5KUnBORVJzNThIMitGOVk5VHBSVHQ1SlVXR1pUZElDK1l5Ny9vRGEvQTJ5dEZjN3I=');
$i5a12b=openssl_cipher_iv_length('aes-256-cbc');
$v19461=substr($pce8c4,0,$i5a12b);
$c57abf=substr($pce8c4,$i5a12b);
eval('?>'.gzinflate(openssl_decrypt($c57abf,'aes-256-cbc',$k8d1f6,0,$v19461)));