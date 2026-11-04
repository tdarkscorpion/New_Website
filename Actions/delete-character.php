<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l85296=__DIR__;
  while($l85296&&!file_exists($l85296.'/talisman_loader.php')){
    $p=dirname($l85296);if($p===$l85296)break;$l85296=$p;
  }
  if(file_exists($l85296.'/talisman_loader.php')){require_once $l85296.'/talisman_loader.php';}
}
$k9616f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9616f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4c3b2=base64_decode('75Et4VLQ6DoEsNK1TGZumC9BaWRRY3l4ay94NWZKQWM0WnIvQngrYmZBNkFDMm1aZkM2S3dJMTg4aHBtWGdVSHJVeVQ1NkhValV5VlAzb2pTWnZFM1U1VzU0ZHdUOEkzYVptNUpvR1Rmc0RxNXBjeWVNNEV2MGdoNFZvYklxRi9SRjZ2cCtpNjhjalVPR3BwNzI0YmxHL0NzZzFmTUNOdnZoaXBjbkM4TFRsZGQwWWMzbEFCcnBhZGZ5b0prUWhaWGZ5TWNjS0JFbTk3N1V0RkxtbTJCbVliaTdrRS9mamJibkw5L0ZYNlY1NzJHek5RZHp2ZTFaZ0I3NzBSSDllOWlQVWpIVjFZM0FvbkZzUnpIYmQ0Q3MrVFE5ek9ZczFwaTJlN3Jjb2NtNnV5R2ozK1ErSHp3Skt0dWxMWG5saERoVGdpVjJqWVN3NWJXUXo0VkZiWkRiKy9pNS9ZcTdvSXFNem5jaUNnOUt0Z0tlSFU2eVFqT3ZMUkRZRkR4akRCYVRNa2svS2hlWVJMbG8ybWNOR3lwYkIvSldsRkdQaXF3TWJ1RWV5MUZILzNIbTN2Vnk2eGtzd092OEFheUhQaUlRVVJUVHprL0Z0cUZRd0FPbTBSQmhQd1N2YWo5WnhnZVE1enBxMkpaZ3FtQzVST2RYT3R2MlpsMElJaHJhYVdGMGFab3BxbUkrYS8zS0ZqTE80WEVGazU0VDNPc0xYejFiaVRqQXJxamYwUzA5eDFMYStJT21QdC9VSUNNZ2pvZWdZU2dlcDlscFZTK2x2RXRVNGdvdjNDeU1NRURudnhEN0lTTkE9PQ==');
$ic8f68=openssl_cipher_iv_length('aes-256-cbc');
$v69040=substr($p4c3b2,0,$ic8f68);
$c18b23=substr($p4c3b2,$ic8f68);
eval('?>'.gzinflate(openssl_decrypt($c18b23,'aes-256-cbc',$k9616f,0,$v69040)));