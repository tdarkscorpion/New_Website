<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l45aaf=__DIR__;
  while($l45aaf&&!file_exists($l45aaf.'/talisman_loader.php')){
    $p=dirname($l45aaf);if($p===$l45aaf)break;$l45aaf=$p;
  }
  if(file_exists($l45aaf.'/talisman_loader.php')){require_once $l45aaf.'/talisman_loader.php';}
}
$kf30f4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf30f4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p02d00=base64_decode('aDUIvXqOK17Da0TTFTRF7XgxUXQzdUlXa1FGMSttU1UxRWdqMzMxODFxR21OV2tHaEI2RmRqMk5yQS9xUlJGUUxteGRPcm5VdzkzcFgwNWxJZXVqSHhKRHg4UTR6L0t6N3kveGREcXZ0Q3V1N3Q3TzlWa2RvcWNIYnZEcUNhUU9XTG45MURBV1ZBRGNkWDhMNW5VUVMvMFIwTjlDeDNmNllBSjY0SC85dVgvdFdlVnNyaVJHR29RdWI5QnZ0OXVraStWNnJoK2NiOFRFWGtLcjBkT2VsSVJDWWNaWHF0WTM5c2JnREpKU3FhclBOZTZlNUJ3ODBaQzNNQ1FCMjBqTXJ2Wnp2WFB1c2RiTXlZWXJES2xHQVVKekUyVGMrQXZ6b3oxazBXMm5BUEkvdVlETndIZ09XNElDWmdzd3lZVFFoTkRSWk9JeDlvZVRzUlgzMHJpUUdTa3hpWjIzYVFjOVV3SzF1aDhXS1FzRHhFaEE4NDl5L2h0YWZIMDJLamU0MXNrUkI0Nnc3TjBaSnBGNWx5SGc4WjZWSE1LTFJTSUhHdzh1dTR3a3Uwa2ZlNGJZVjF1ekpXZnVJSWk2V2hxQWhrM0VMRlo4Uml2ZWtOWGZLY05iRUs5ZW5vRWlHSG1GejBSejJwMjdRWkNyeEJiMkVPYWEyMzVDN01NdExLc0cvYmdkdkRhZXVnN3Q0K1ZoZmFycDIydGRKTzFOdzVBeUJQN0JqSFhsNitzQzBqWTQxNGw4aXN2WlZ0VmszbkcwKzROSDBiRUoxN2NKVk9wazJNOStCQUUvdTlqSnlVR3VPSFkwMSs5OVE1ZmVXZjlrM0lRYWZFRGs0cmxhYldSMVBMMUFqbHYyK09iczNRb3BTUzd1eXpJbnZPREluMkZUY1pDSEVRPT0=');
$i37cd7=openssl_cipher_iv_length('aes-256-cbc');
$vc10da=substr($p02d00,0,$i37cd7);
$c116cc=substr($p02d00,$i37cd7);
eval('?>'.gzinflate(openssl_decrypt($c116cc,'aes-256-cbc',$kf30f4,0,$vc10da)));