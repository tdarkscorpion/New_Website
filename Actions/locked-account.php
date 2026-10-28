<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0dc82=__DIR__;
  while($l0dc82&&!file_exists($l0dc82.'/talisman_loader.php')){
    $p=dirname($l0dc82);if($p===$l0dc82)break;$l0dc82=$p;
  }
  if(file_exists($l0dc82.'/talisman_loader.php')){require_once $l0dc82.'/talisman_loader.php';}
}
$k20000=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k20000===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8b724=base64_decode('NHcdOFGtR/pY4tufJG/VEXdsa2pYRncvU1VsZGVqUmUrVEFYTWdwNXZNY04wLy81MXdUTWdWakRiV2JKTW1CcGg2Wmorc2g0RVVrOUp2dHRVL00xSjVOOS9pZkFpZDU3WWVTMHhxRE0xNS9rSmhnaWdPVlZGcmh1Nm5zR0dmT0xYMmFlYndYcmJpVXFHajlYTWNqK0g3Z3duOFJ5SDNXSWdaQmlvdWZHOVpvQmlVZmJnVjJKMExiNzkzYmtmT2h2V1VqaWVBMTJ0VFBzMXR5WTgrU2xWenFRZGthNHhyelM3aXF5RXNYZGJnVUJxWXhySmtSSzFZcG5EN0VUQmpGQ3JCWXVmZjVkQkg5RHh1eXVGcXZaYWdBR3ZWb0MxblFqb2l3alVoRi9wMHBZc0crNHNhQ2FGRWQ1TE5DWkdScm5hcmRBSG1nQWZqdEoyMERNY0hVRDdoNmpDMFRzR1Y3bDVqclNZYklYY3pkRU1MVkJ6OTRmQm9BaW1wWDZXdXBGaG1KeG1vSnRhTmtDQlhCaTN1WjVkQXFab1BudWllMTBFU2thRVhRZ0dWQXR5eDVHOHptLzl3YldlYkVxOHBlK1ZPbDhmc05IUzJnVEVKNE85TGgzc0RBMkVYQ3dLeDR3Mk9WMTJyN25hTUcxQ1lDbjEveXRFSFlKbTJyUTdPc3ZsU1VTNVp6WkpGNG1iWTI0ZlkwVXJYNEFJbEpraEpkdVo5bUNKa0NHQU9KQjlPSzhWcUc0RTN6ZVJOZUNGY1B5Y043UzAzRkNyY3lCRW1RMGY5QWQyamE3NE1Ca0RaL1JGRU1mLzVFTmVkVkgwWVl3MXhlQ2d0RzBuTXNmNGRWZkw1NW1zWlh2b1BHZ2pGTDl6cVpXdWNCU2JGcEJxTGJHRE1hK0oxZ1l6VmUwSjRLT1BuUWZTV1RlaHRMWjBacnRyL2dONTQweElId2lmQzF6R0hrSUpuQU42QW1aNEp6WUtWb1dTcjNxemV4SmtQbUJxM0NCWFNpaXJBVT0=');
$i41266=openssl_cipher_iv_length('aes-256-cbc');
$v9232f=substr($p8b724,0,$i41266);
$c0f420=substr($p8b724,$i41266);
eval('?>'.gzinflate(openssl_decrypt($c0f420,'aes-256-cbc',$k20000,0,$v9232f)));