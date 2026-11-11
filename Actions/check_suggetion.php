<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbc690=__DIR__;
  while($lbc690&&!file_exists($lbc690.'/talisman_loader.php')){
    $p=dirname($lbc690);if($p===$lbc690)break;$lbc690=$p;
  }
  if(file_exists($lbc690.'/talisman_loader.php')){require_once $lbc690.'/talisman_loader.php';}
}
$ka6780=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka6780===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p654c7=base64_decode('rMwP2k9AUrUsq+ppvqJhcmtjbWNBUzB3dGhsUGhkZFZMSHZIRlltTmVYbmtINnh2bFo2WG56ekdDR3kzMmQvNlFyMTk4ME9USjA4eUkrMnAwVWhDc25xVzEzaUFpYkVFNEtBbUp5T3lOUHVxWS9CL01pTVU5SWlMSDZJNmtSTW5sRWQvbzd3aEpxYzlHYmZVNVNyS3lnZXErNkRNbnA3eHdBNmNoQllCN3NrY3htbWNSa3VTbGxUc1BnTXRNaEZQNmNyMjFJaU5EaXk0Z2tKaUg1V2c4aGI1czVtVlo4Y2t0SGtaSVFMRnRlMWJPSzd0czNxYmRvc1RNNHdRR3NDTXdiWUlLTFVXd2xkM2FaaFNPK3RLc0JPZE5oV1ZYb2k2c3NJRG5ybUZ6YXRnOXNmcVUzOXgrR0JMbm5FeWRFYmpMT3RqTmwya245NHEyL3lMdkFJTm50MkhoZWl0ODAwMUFqSnB6UE5UWGxENFNCZExPVFN6RjJXYnhiT2htVmhSTld1NjBrWTFSLzVDdWZhZi9zNTJZUjk3NHFNL2lTMXNta3BhTEJGS1VhRzN0d1VzRkVZUU1icXhObGhjUFFSMFovV1M0SUQzYWRBOXduTE1RWnZEY0VPc1kvdmVQcGIvZ0xZUG5meWpzMFVFK01aME1qbmZEUXdpVkcxZUJtMDhKam9aQnN4OWY2UEhQM1BWTDJGRk8vZkRwSE9XNHZ6RDdVcEVUakJ0ZXFFTXYyRnpBb0MzRHp3SVJpZTlaLy8vTGNMcUxCSEpEbmJ0NUZ1Qk9hZFlaajh2LzVPSll0Ulp1NmV3VlF6Sjc1aWExc1kzY2lDSzRsb3ZGY1dqUVZ2SmNEcEQ1dlN3V2R0dFE2dXM=');
$i70de3=openssl_cipher_iv_length('aes-256-cbc');
$v6e33d=substr($p654c7,0,$i70de3);
$c0c5b4=substr($p654c7,$i70de3);
eval('?>'.gzinflate(openssl_decrypt($c0c5b4,'aes-256-cbc',$ka6780,0,$v6e33d)));