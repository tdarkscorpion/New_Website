<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf16e4=__DIR__;
  while($lf16e4&&!file_exists($lf16e4.'/talisman_loader.php')){
    $p=dirname($lf16e4);if($p===$lf16e4)break;$lf16e4=$p;
  }
  if(file_exists($lf16e4.'/talisman_loader.php')){require_once $lf16e4.'/talisman_loader.php';}
}
$kde9ad=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kde9ad===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbd56a=base64_decode('J2ZHEc/QD10bg+48naFCBjk0dHhYdFoxWXBTOC9QMGRYQUVRTHhaUFBDTFRSc0t2c0pQdEM0S1oyNDBESTdORG82azBpODQvRjNrYmZUbWwrd1RZV1MxWWlVMDkxWTRXQXN5RHJSRSt3T0lYbGlTL2lTSnV2S3lQcmNDWVhZNllVdGNlTEwxcHlLeUV0ek1LUkh4VHV3Vy9YSThBNVEvYkU5NGsvZm44MFZTbzRoall2NWR1THZWc3pTZVNHTytaMzEwenFoNEY2UTFLUFJ2cDYzK3FDektacnpOalhsaFdabTl6NmF4eVhUTUdtemVOdFJnbW5LbDkwbGRUYkVlV09HYmlFUENXUzYrMEIxU3FIOTZBaXZrZDlpZkU2UWxlcFZWVkxHTFBOVGNyREVLYWwvSWcybHl6VFVMWXExYktlbUNTK0ZVeGRYbHJ2RnRHRXNqaEcxUm4rY3N6eStEQk4rdDBPeFFpTVNheXhKZHRXUVNiVUl0My9VS0dubVNSVU41NzRjbEg3YnUvQUhVR0RRcGdIWXJWamJWRWFKU1dUNExncGJxQ0cvS2gvb0RaSllWTmtsWjhvNXF0OWVSSTN2MzI5eDQ3WHF2UEszeVlpM3BTU3FWM041UklXNjhxVzFqZEttek9VOXordjN3bUd1WGcrc1hGeGxraVI1N2dXVzVvS3cvV0NlWEFsTXpp');
$i5e81a=openssl_cipher_iv_length('aes-256-cbc');
$vf9d73=substr($pbd56a,0,$i5e81a);
$ce760a=substr($pbd56a,$i5e81a);
eval('?>'.gzinflate(openssl_decrypt($ce760a,'aes-256-cbc',$kde9ad,0,$vf9d73)));