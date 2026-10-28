<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l718eb=__DIR__;
  while($l718eb&&!file_exists($l718eb.'/talisman_loader.php')){
    $p=dirname($l718eb);if($p===$l718eb)break;$l718eb=$p;
  }
  if(file_exists($l718eb.'/talisman_loader.php')){require_once $l718eb.'/talisman_loader.php';}
}
$k548bc=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k548bc===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd41db=base64_decode('gtOSgs2RWohZoETIwaGexVFJRUFRamhTc3MvRFJBL1NlZng4QUNGR3M5cXNXeUVCM2hwdTdnMXdaLzVEdlN0L0NYbXpDQyt2NnB4SlIwMUVaMDZocDRFZlhwTlhndlNMbi8yaVpFZjVuS0ZMSkRzNFNUcnI2T1JvdkFBVHJ2RTg2RkZISzRZamoveVp4TmhXaHM3V3lZMm1oWlBlNHZrU1pqQVR5Mmp1a1Q3NWVqTWhWTGhvL0lFRmp3eEhPUFNDeWphVFlpdHdkRDZnNEFueEd2SXFMSWZqSXhpUEg4aUUrV251d29nTzBieDlsR1BMYmlncG5jYm92M2luKzFCMlBWdXhRSDFKVklHTW43eklWTTFFdWpwd05BL2FENUt3a2k5VjlMSkJDRTRxbHRJZFowbVE4Zy9Hc2hrbCtWS3k1RzEvaGFPVnNJWTV0RWxIMzlyV1FseWtlblVmN3NkTHNkMjVuTUNBL2RuYkN6MW9vSU5TcGQ3YzdXcC9RbllxTVBDUWJCTncybFk1bFRTWkJKaDlOQUVtWWgwNlAxZHdKODNWRGY0SEJvckIvZVhUbGhvWUJxNWd3Vkk5V0NuSEtWRzczRC9menI4ZHBOU2pOc3J3NHJaWGR1Z1lEcGFzWktjVEJrcVZJUzdZalBNYkNVaDZHQVdOZFVLVFZmb3ZXTlY5U0lGQk5VQzRkRjJtSEUvTStWUXZ3ZW5YWmNmL2xXcW1yVy9nTjZKM3EzV3N0OE9FM3ZCT29rcmRoNTZTT2pSNitqcTdXMytzT0k5Q0RiUHBQY2R1REJ2TW83VVpPUTYzTEIwRnMrN1FoRUdNbjlWMnphTytoN2E5eXhYaUliRUJVcFErVTNSK2IrVFk=');
$ie8443=openssl_cipher_iv_length('aes-256-cbc');
$v8135b=substr($pd41db,0,$ie8443);
$c71e63=substr($pd41db,$ie8443);
eval('?>'.gzinflate(openssl_decrypt($c71e63,'aes-256-cbc',$k548bc,0,$v8135b)));