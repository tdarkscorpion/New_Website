<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ldde61=__DIR__;
  while($ldde61&&!file_exists($ldde61.'/talisman_loader.php')){
    $p=dirname($ldde61);if($p===$ldde61)break;$ldde61=$p;
  }
  if(file_exists($ldde61.'/talisman_loader.php')){require_once $ldde61.'/talisman_loader.php';}
}
$ke84ff=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke84ff===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p37854=base64_decode('SNFpXrZZkZAmJ9GMx/AXkklXUDF5YVNOZE5pWXlsR3pIZVJMcnlvSjg5emNMY3pScHJKMXBGaU1CR1pRRzhidWRXWlovTmk0aUl2bjg0bjVaclFtaWZTNjlJVTMyR20zbzIvbDhoRW1jYjVMK2NJNnpNckZnQ2hPcDBkKzlEK2J1VWg2VWxLSzZORzZWd0NxbXpZanZwd2ZrVDVUWUhidFZORENwM0lWOStxaExuc3RYaGpGQUFxS09tR3BaTU1MS0J4T044a29NREdSUXM5NlNnNjErTmZwNkozYmxCQnR1cktpWGVscjVTYis0bW1yWk90c0RHYkh0eUttSUhWL3lKSTlFc0hrakI5TDRnMThlTm1KMWhxeTdwZWdmMDBidHNpRnZZTi8vUnpBOGt4RVFvSmdJcWF0czVmMmhaeThpTExEdzNTallaZG54Tmw2T0JMRDJPdTdZRTFRdjBRTmh6cUZheng1RHIzaDE5aEhRQUM2Slp4dHhFdFBaMi9Wdm8wRDZHbHNxbWRUMW5NNGpEWTluSXJqUmx4OFI5QjA2UkxBZC9lS2poT01IMEFQTURiZk9YSGoyN2g2b0JwT2ZCaUdqc3dwbVFraWVNS2hlWG1UUUw0ZUhLaDhBUStJdDFiSFJvQnpndFdTbUtyaURNVUJmSERDbStIVHpGK2h2dXV4ank4d0dVdFVoMWNBQ2xiWVh2S0VLUnRPcnNLRGFjSDBrNzZkL1pQUnlMRXJjL2czQTd3cEozcDFYOW83dkFack1yVEJNZ29qOTRQOGdnZzV3UkFmSzhmNXpqVmF3ZnQvdGUyMmEzV3FkbWtvMi82NE1KakxmR0oweUhwZTJ3Zk5nbWMzckpEMWVaKzdFWHVQSGU3VWxOWDE3WGQ4NUxkMDhKdmRqKzJBZG5jSjF2bEtIWlU1b2RMYXF1RzRCVExyNk1ZNWtZTnYvMk5lanBObHE1dnJyOXNpb0ZsRnVDK2JNVVVNL2xiRFBrVmxYUGJ3Y29WdlR3N09yVEZyU29FeVRIUWMyQkVFWVlXYXpTYUpmenkxWHVNWGdTT05nd0xXcGc9PQ==');
$i9ccb4=openssl_cipher_iv_length('aes-256-cbc');
$v8fad4=substr($p37854,0,$i9ccb4);
$c6a9ed=substr($p37854,$i9ccb4);
eval('?>'.gzinflate(openssl_decrypt($c6a9ed,'aes-256-cbc',$ke84ff,0,$v8fad4)));