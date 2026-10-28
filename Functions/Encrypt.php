<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $laa903=__DIR__;
  while($laa903&&!file_exists($laa903.'/talisman_loader.php')){
    $p=dirname($laa903);if($p===$laa903)break;$laa903=$p;
  }
  if(file_exists($laa903.'/talisman_loader.php')){require_once $laa903.'/talisman_loader.php';}
}
$k2a8a1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2a8a1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb3782=base64_decode('RCUDrkWL1+BXqbeAVojZ/FFsN1piSTVBeXhlUm8wWlRxR2tmVWFrclM1eGZDcGpJQ2xGQS9xNTJZMTAwbUhGUDJ0eWJuMWh0TStuOXIwczlOeDZ6YUdGU0FHWlVWL2x3aXhHdEJlMlI0dE9SU1Y4c2FNaHA5dy9RU0NidFF4SGp0QWxRb2wwK0d3VjlNWHN3RFV2d01EZ3ExT1ZheWovZXdLbGM2dEt0TVY3ZE8wM0krZ05BazJZQit5OU90bVZWY1dhc2RXSWI4U1kwbG85T2xySmx2RHA1NTR1QUV1bkxWc294Smo4UG4vSnBKeFVaaEVXZGNkNVJPT1RaNGpJNzBjNlBVblBqOEFia1BneElwekhvckFKOEhreGpUY2lBM0hYTUduc2ppYVpXM0hHNWlwSjFSYlRYR0JWU2dBbk82R3ZOWFVjS09IN0R4TEJ0MEoveW9WZk9YTDdTbjBJSVJLY3FTQVdhWnFkcEFKL2lZT2cwMkxQb1hUV1RaQ0RVaGZ2NmlCbjZBbmdLQ2wyaXlxMDhLbkRKSzNzOWVaUWl4ZTRRMFFyOVB4Nk5ONFVLU0ZadnlWeFRoSHBxS0lRRHJxY1E4ZWhXVXUydDFHOFg=');
$i40f2d=openssl_cipher_iv_length('aes-256-cbc');
$vf4a40=substr($pb3782,0,$i40f2d);
$c399cc=substr($pb3782,$i40f2d);
eval('?>'.gzinflate(openssl_decrypt($c399cc,'aes-256-cbc',$k2a8a1,0,$vf4a40)));