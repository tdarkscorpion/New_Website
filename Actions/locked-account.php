<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l54b5c=__DIR__;
  while($l54b5c&&!file_exists($l54b5c.'/talisman_loader.php')){
    $p=dirname($l54b5c);if($p===$l54b5c)break;$l54b5c=$p;
  }
  if(file_exists($l54b5c.'/talisman_loader.php')){require_once $l54b5c.'/talisman_loader.php';}
}
$k93e27=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k93e27===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa4c21=base64_decode('K9Z1sTUAPW6Zoio4zpA41UgxQTAzaE1QbjJRMExOVWt0WUozM25lcElKM3NZOEZHelN3cDRlMXhlY1M0SURJQlpiVzVoeWpJclp2SGJDZllrUzVFVFhCRzNQQUJyZzh4NUdhSDJRSFRyUThSNEpFTGN0M1ZJUEhXTmt5S0pzVTF3MFZGUXkxNmNuVXVKWDl2U0JZTU5XZE41V0JyS1d0cEN1bXhMMkJjVk51RGIzejZMS2h5aEJybGVPYzh6RVRjeHNyQ1lhaWd2QjV3NE10WmNOb0N4TXBzM01Xd1JsT3dDdkJmYU5sUERKdmtkNWxneUpTM0dqNVJXaTdXNFBnOTIvVmQrUmRIYXh3N1g4TDBkT3RUN3NaZVBRbmNvc3BVVDIwL2R3Q3hLVTZVN21wZFljc1U5MVRWV2NhcmU1Z29HbHRhV29WWGg2TFFjalZsUURVU2g4c0x1NnNoV0FwMXIrL2FsSVc5MFdPejNJYTZwQmcyVEkzekU2a1dWQ283YVEwN2JoZm1xcFE5eG1BVjRpbGhuRHY1WitCb3FQdUhmZnRxeWZhR1lURmg2L0VzbExVRGw2RTFLTjBDaG5kWjVUZmViUSt6Q1Zvd3ltMHF5UVBaSE0rV3BaV2NxRFVrRXFHamZlMTI4d1F5NCtlTlhsY3pONU1nV0hmbkVQcmdIMWRaTlpMdWRRRk5CKzJGYzY5dTFGSkJFKzVWdVREM2tPVndxT0hhTGpmOWZkVmdJTVFFcGhLakphanhyNDdHaThBbGZ3eTFEYXlMT1dacTBIenVXYzFZRnBJUnQyZGpLVEVCMk5nZHQrQTB3UnRLUlpZWU0yK0FLS0V4cXpYcjNqY3JUQ3hhVUowV0hPMjVQSGVaZmRKNDZQWW1vdnhSWVJkSlZHNElOd1M4eWY2SDdKV2liRHhrelRWMTRTU29wZXVSR2FqaEhLUjJVNU9NTnRIRUYxM0pzUHVKSDJlcENyekVUeWErb2cvdzlsRGtPSmdNcThnREdhdz0=');
$i94719=openssl_cipher_iv_length('aes-256-cbc');
$vac3d0=substr($pa4c21,0,$i94719);
$c34b66=substr($pa4c21,$i94719);
eval('?>'.gzinflate(openssl_decrypt($c34b66,'aes-256-cbc',$k93e27,0,$vac3d0)));