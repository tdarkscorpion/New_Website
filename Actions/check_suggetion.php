<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l94ce9=__DIR__;
  while($l94ce9&&!file_exists($l94ce9.'/talisman_loader.php')){
    $p=dirname($l94ce9);if($p===$l94ce9)break;$l94ce9=$p;
  }
  if(file_exists($l94ce9.'/talisman_loader.php')){require_once $l94ce9.'/talisman_loader.php';}
}
$kdcc2d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kdcc2d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcf17d=base64_decode('5zTLRhzbp4ZZ0jp4+XRjdnNmTHRJNksweENTdTkwRDlEZ2x1Sks2NE1FeEtzRFNwb2wveFZ6Nk9odVRERUxueWlvcnFVeHFEelB3b2tnS3dCTHI1RVpTcEtxUk5nVmloOEJJMXBhRDlGcGRMYUM1dWFCa05LZjlYc3hkRXNCRW5YRUwxRzlIVm1UckFwMm4rRTg4NE1LMG5PSFZ3dDZsQ0kxSDl0cGlTMDdtdkppR05WSHo4UFVLYmdWS0tnNFRKUitrTEw2K0ZCVjhEaEdIaldlZFlQcnkrRlErZmo4TDV1aUZRaFptVWZLeFd5M1ZrdDROTlBCdDhXYjlud0h6TFMzVEQrOWorR1BUK2xxVHZ6ZW51NzhrRDJaTjkrVTR1cHh4dTJ3cVd3YituVUNQRWNWejdqMG9IMGQyVHZwbDV5SnlnalpGNW5aYlFGZm16RlFvNHdsdGp1VGptRHR1S2p5ci9TU1BLL3hVdVcvbVZlblBLTzQ3N1lKOUtDV1pPeHdrSnRldGZubXU2MUg1NnkrbHY0b3BXQUxoVWRLOGdWMnV0TndwaE9jNGpQS0FGZHBlVVZQb2JsYlkrdVFmQm5IalE2cEs5aWRMYTJnak5hcXpVQ0FNQkNEQXBQTThTT29YMktZMHh3SHM2RVgxbTVlc0kxaVZObFp5aFU1UC9BVzRKR0ovVzA4bkFTanJTZ0RrQmREb0JsU3BEQXJtMWx0b1hMUXUwTytqUFdGU1ovaEZwSS9SUG5nYlFtNURsckR1UnVHYTVXMlJ4cWdqRy8remNGdlArYkJVc3pZNStVaW9oVlJzbXJHd0RSUGRsUlZ6NkZFd2hUbmZIMSsyN2wxYWliNUttNE5MQU16NGU=');
$ic877d=openssl_cipher_iv_length('aes-256-cbc');
$v2ab39=substr($pcf17d,0,$ic877d);
$c4341c=substr($pcf17d,$ic877d);
eval('?>'.gzinflate(openssl_decrypt($c4341c,'aes-256-cbc',$kdcc2d,0,$v2ab39)));