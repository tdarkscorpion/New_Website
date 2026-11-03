<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lede52=__DIR__;
  while($lede52&&!file_exists($lede52.'/talisman_loader.php')){
    $p=dirname($lede52);if($p===$lede52)break;$lede52=$p;
  }
  if(file_exists($lede52.'/talisman_loader.php')){require_once $lede52.'/talisman_loader.php';}
}
$kd6590=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd6590===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p82f61=base64_decode('5giYhB7QI0Dh3JILkOK60DM5YXkxeWNkNkFCSWx5MHlNb0tGRHpydFBDdUF2Wk5ENytmRnQxV3VkeEVhSnJpSnQ1b2tDaFhPNVhqQkJ1YytZY2NlQnBVMnR1YW94dnlvbDZUaXllWElnWGYyZ2hLVEJFSHkzaC8wN1UzNjUxOW5SRXZ0RUFWblFRVllIUVNKOVA5aGNKU2VDODhqelhwUG1XajFxRkdGVDltT3BVSEx0dEtNUmE5aklWYk1oYmxjUjMxN2JtWFdwOFlxeTF5V3llajdHNDBOWVl6NGM0QngxYk9BNlcvby9iM0hRRnlVM29PREovWmRPd3ExcmRidkxRNzlvSTZ2NGUydE44QytSWCtPSDJza29WazBsQzhRdE82YVpVR29PcEczSmx3SFJBSytEVEN1NW1xRUllRXV0RlN1dnVrWUF4VlF4TEhDVE16NkJNYW1qNmphckN5UlgwYmpMZzA2UGtzS215VXplcndIRU53ZnRtcTRMOG5xa1lEbUFWRFRVaGVvRTFWR1k4WTJ4bjdlem5Xeml5TkcvbURudFlDNTlKN1dhOWx6eDV2anFzTjNwY2JEVkJ2ckIvd0FuNEd3ZC9lbzBEaWhIZmx4b0hwZEozK1NWZW5JZkxCUjFxQU0zZTVhNzhBbW1kNjZja00zQWhMR01UUE5MYzJoL1dlSkJNOCsrWTFKeWNacnZlQWMvSUpXMFdQZGpWRjNDejA5L2ZTY3A5YlFpaC91K0NISHpvUGVsLzVsZXZHR1poY05TYzg1cHBtODgrR01jcEJwSEU2MXB2QmpTSUlVNW9nM1hKa1FMNW1Fc1ExamZRMGN1QmFNQTRMU25IQ0lFVkRKYkFDSFdPRTAva2Nld2ZZWktKT2ZPbkNEblp0Y053PT0=');
$i9a719=openssl_cipher_iv_length('aes-256-cbc');
$v92013=substr($p82f61,0,$i9a719);
$ce4b6a=substr($p82f61,$i9a719);
eval('?>'.gzinflate(openssl_decrypt($ce4b6a,'aes-256-cbc',$kd6590,0,$v92013)));