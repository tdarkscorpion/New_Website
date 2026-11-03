<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l13992=__DIR__;
  while($l13992&&!file_exists($l13992.'/talisman_loader.php')){
    $p=dirname($l13992);if($p===$l13992)break;$l13992=$p;
  }
  if(file_exists($l13992.'/talisman_loader.php')){require_once $l13992.'/talisman_loader.php';}
}
$kb4f5c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb4f5c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p85a31=base64_decode('qX3Nxet2sWRFNtRdvMtViE9tWTNmd0tyeWxMdzM5NjZkaFZYbnZsaWcwMHhHbkRGaVlQOWg1RnZ2UjR6RTI2UjkyTEFhSWFtS0NGRTJ6NHplQ1NpWXZCKzBFUzJkcEkydXhvcytQOUtJWFNnQjVuTlYxN21yOHNpYlBPUmZyYUdmbklYMW9pbHlJMy9FTW5LLzhJdmVuczV2QWI0UFlUZVRqdkFidEZpVEVScWo0dkNBRkFTZ1krSVFuS2htNlh3VWhjTUpxd0pENUdHVXVkbkpXd2FMKzBham5vcFBuTVJMUXpOOGxDSXhSYnVsekVXOWRhUjRxa1ZwNEJnTFpPUmhJU2ZZZFlFdGVjTURmclAzN3JZODQvVEF1blFyQlU3SGJZMUZUMENsNHJJbjZNUGRsRkQyUmdtNWREMCtQWFlNRWJWMkl1NFRpeVFYZzcvTjhXbkptM0Z5eW4ra1M4V1JoWmZrNkpGbi9lQmNrMFQya0FWekpFMGRPK0o1RXcwV1Q1RytSYk1KV3NBL29FZjRSNURXVzNIUE96UXgvempjMDZBTFZrcnlPaktvT1NSRFFzVEx3TEdpTWV3cWpRM2ZQN1czSy9xdFkwLzJPaHNGVmlkTXI5bDgraVNUbE83QjFma2VOUVEwZHhNZzQ2TFQvQjBjakliVmNlOVQyMWZYWkE4RDRlTEN3T05aSGgxYmN5Q0JTZXdldTg0L0F6WnIzM1ljRnlJdkhSREg4c01zWjZLSmJGaFN3MWxUM29WWXZDcjVoaEJVY2xiR3B5emwydDkyOEFPb1BiRHNWNWVBK1BINy90L2syTHJuZTN2REJNcWpaV1hDeE10djQ2aEdrTEtQNTl3V0lLemFDbVRiQU4xWnVYQ3REOUovVHRRNlIwVERaMlVIa1RJbUNwYVhDY2tvYlVzQzVPclBYTDlOVVM5eklSS3UvUDBuTnFGU0pDcGgwMzdiRUtEWnVuSkFKQjhuOHFlcEU2SzFtTWNiY0kreUlnbW0zbEJSdnpvYnB4a0NFRHFscHg0OXZsNA==');
$i08738=openssl_cipher_iv_length('aes-256-cbc');
$ve4fc6=substr($p85a31,0,$i08738);
$c96a62=substr($p85a31,$i08738);
eval('?>'.gzinflate(openssl_decrypt($c96a62,'aes-256-cbc',$kb4f5c,0,$ve4fc6)));