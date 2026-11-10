<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l28f9d=__DIR__;
  while($l28f9d&&!file_exists($l28f9d.'/talisman_loader.php')){
    $p=dirname($l28f9d);if($p===$l28f9d)break;$l28f9d=$p;
  }
  if(file_exists($l28f9d.'/talisman_loader.php')){require_once $l28f9d.'/talisman_loader.php';}
}
$k05418=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k05418===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4b062=base64_decode('fPWsDx+Oq5weTaItatnw/kxIM0RyS2YxSW14MkVnTGprUTFQSTYraVhLRW04QnBBamM5KzN5N2RKdDRzZFZLdk1ubHUvbUxCUVhkZGhOZkhMMUZPS2NPMythOEVjcU9QMU00cnZ6MUNlc0RIenBIVDNXcUZpQzczTmpDOTgvWCs2WVFkUHFKMlRiZU5xSytIY3RwVzZtOUhBVnZCTzFiUFRuUTI2Q0ZGYXdNeWE5ZzNDcnlDbjAwcUE3R3oydVNRckNEVUQxM0hqbGRtSmhRNTZ1MnBld1JwL205UXJXc3hzQjZDRFJxOU5MVG9PNDZtbndaalFjSlpLSUFUazA0cXpZcXFVa2FrdGhURW5aYzc2cXhlMVBXWEhOMDhsbWt6aUtRdzQ4NnhHellTaGdFQWpXWTZjSmhqdmEyQlRHZ3kwY01GTUw1NC9XMU1sN0VRTkVjMDdEL1ZJZFhvQW1oSGpmQ0NaRndVbjdFRkRwS2ZjOWpNd1ZGZ3Roa3ZseU9aUlRTZ1I3d0lZRFpkT0MxdkY1cFh3RXV2TmE2TFdSUXNmU2dNL0JOdUpuUkp1bWF3VGk0Z3ZhcGhSSXdQQnoyczY5VGhXUkU1cWRmWFVOR0RVbG9vWHd1UWxhM3RJZnFDV0N4b0U2M0RkTGFPYUpBZUFiVUZFaHBoKzd2aEFqdFE1UFI3WFJ3b1JtRnlQUzNG');
$i9bd45=openssl_cipher_iv_length('aes-256-cbc');
$v3419b=substr($p4b062,0,$i9bd45);
$c5d655=substr($p4b062,$i9bd45);
eval('?>'.gzinflate(openssl_decrypt($c5d655,'aes-256-cbc',$k05418,0,$v3419b)));