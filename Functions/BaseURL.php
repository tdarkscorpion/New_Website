<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l730c7=__DIR__;
  while($l730c7&&!file_exists($l730c7.'/talisman_loader.php')){
    $p=dirname($l730c7);if($p===$l730c7)break;$l730c7=$p;
  }
  if(file_exists($l730c7.'/talisman_loader.php')){require_once $l730c7.'/talisman_loader.php';}
}
$kfbe13=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfbe13===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9da92=base64_decode('YQyE+aTb8dzSp5lXtZ4uOHBBYlkvNks0RFl2QTJzT0F2MlRKY2VSUG1xT2haL2hTMHBSMTJZdjg4V2VmU1pXNDM1Q0xBVEt1UUhZbEJEWUJ0MjAzSVpxc0NkUXVsc0tvK3I0cmVTZEcvK1BodGJSazdhcGpaTzloN1diRFhOcjVEenZHUjdNdFMwc0NpZmgwTzlhbmJxUGl0bFpiRkxleDliNHJhd2lQNThDdzltb1pHcVdTd2syNm43Vnk1NG9hcmZRN2tydFZqZ0t4YTBFWHE3akJ2ZytjdzlUUlovSUdXMEZhQm40ei85R1paK2huZVJDUG8vZ3VSV3cyK0lwUUZNOHVXdEU2ZUpJZjR2dUJ0elhrcDQ3NURpVW9hMnpPM0xnM1pFcm4zUjVQdGZQeHB4SWVjcVJ6Y0w3MlBwRU5SYUlORU9XYVUvblpacWdmUlVTaUpHbnJ4OGpSZ0Nmc3hVVDNUeStOY1o3L2F6cTZIK01PU3F2NldnVjFibnZ3N3hUQWFJdWZKbkdJZk9BV212WnRtR0NZVnpBV0VJdWEvTTF3a3gwaUpxczJ3Unl4eFRPaTVpQnhZVTBOdCtiUndwc1oxOEpmY2ZvRmdKcm9iZkdOK2VrdFBnNXlGSksrcjdSSy81VVRGOTNLcENQWVdidUZCbTBUMFRkZjgwMWhkajc5bTN5WVZhYmpQaFpKWnRwY2xRSVFGandteHpkQW1BYW9ZVlNKbGVsejFYbzZQOWFlMkV6TUgwODRLRWZtc3M4YzQvZ3pRTEhDdmV0bmFXR3dNMmkrODJXUkhJdHNBRVNyMlZWRjRMbkJkZVFFMXowSlZUVWdMYTZkQkROVzhzWFRXeWJCTGlmZjhrUG0=');
$ic4931=openssl_cipher_iv_length('aes-256-cbc');
$v6a794=substr($p9da92,0,$ic4931);
$cffb15=substr($p9da92,$ic4931);
eval('?>'.gzinflate(openssl_decrypt($cffb15,'aes-256-cbc',$kfbe13,0,$v6a794)));