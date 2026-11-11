<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l49844=__DIR__;
  while($l49844&&!file_exists($l49844.'/talisman_loader.php')){
    $p=dirname($l49844);if($p===$l49844)break;$l49844=$p;
  }
  if(file_exists($l49844.'/talisman_loader.php')){require_once $l49844.'/talisman_loader.php';}
}
$k5445c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5445c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p110b6=base64_decode('QpBrGov4kN981eNxBhwk33RkeHBBNEFSejhPaGNpOUR4UFZSMmhxYWV4VVBDUzdrakhHcFl0eVkxMmlvc3p0OC9VRmpselZXdHF3WWFkdDQ3NCtpbk5BQUs4WkZFYjB6K0drNjJQa25KYjJsT0x2c2FMK0U3T2g1ZmF6OUc3Qi9TSHRKbEM3d0RzTEsva2I5L2pIelUrZXpYR2xpTmdjekdFRGhtbWdVRlo1YnQwM2x3a1dRWWdCNit1cnV1YUhLT1UvNkw4K04zazg3UzJPbUdRSWZUTmxWMmk2TEswUDEvZEl4OVlIS0pGR3cwQ3hzM0lLT0xIdTIyV0V2aFpRQzRlV2Y4eUNTZ0FIOHhWUkxBTUxpNDV3eTluZGIvSW1nVEFGZGRHaDd4Tjg5eVR3UlVhMjhqeHNLdkZxRGl2akRMTUEwYTBMclNFWWk2c3Z1TUtJemFaTmxOQkFoQXE2anFBdW51bDFJclRYcnMvdFZXbDlBZFg2MGIzMEMrdUJWdENNQ2cxK0FtbDlVYlVUTjQ3UmZXN1czbTcvYWt3eEJaYlZ1TnhGODJlNHZCTjQ5QnBoVEtjSUhuazh1clR0a01hTEEwWEg2c3FkZEhnSHlITFE3STF0b2ZVMGFodlN1bEdpbHd2Uld2aHBxR0NGbWtnd2pJU1AyNDhyV05XWDRwTmdvZW5rYVBPcVBwY3ZVNkVYSDg2WDUrbllIMURsTU5qRyt3U29keE1Ec0hRWCtFUExGVHFiczNoejh4aXlpaFd3YlJ5TjdIWUs0dzdvVi9ORnM2WlBnd01FVFQyUmlwL3JCMW5IV0hWMWhLbEk3NWVzQm5vSklEcFhyTXB3ZlVtL3VlSzVQZENDZDB5VmI1dno1cVNqeG11aXNvOUkwcHBFdzEzN25mVGhTeGprUjhCZ0FER01LZTNiSUIxa21GcGlIY1JVQVVOamlsQ2NLSjllZWFSd3VsZU8wUHFoRUhwVEpoUzNGVUxZQnRwOUVaak9jZk4vUFdUYzBiOGVtM01IQmNVbVd0QzZOTUQyOFFTOFB0SGwwa1Y4RXdJamMxcVpYZ0x4S2Y5R1F1NXJheWVoSjhKQkh6STBDOHFucDVUSkxaYVducnVKaVczalNTMTdNcFJ1ZU5iV0I2UGtReXNOWEhKdXozS3RqaEZQbTNLc0JXN2xMelpHMmxnYmR0MlBIVVVOTVJjaGlxYnBnRFhCUkdsNFpyd0E3eFJwVmV1akZQZz09');
$i01e11=openssl_cipher_iv_length('aes-256-cbc');
$v0ae59=substr($p110b6,0,$i01e11);
$c98f3b=substr($p110b6,$i01e11);
eval('?>'.gzinflate(openssl_decrypt($c98f3b,'aes-256-cbc',$k5445c,0,$v0ae59)));