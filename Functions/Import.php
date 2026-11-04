<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l739c3=__DIR__;
  while($l739c3&&!file_exists($l739c3.'/talisman_loader.php')){
    $p=dirname($l739c3);if($p===$l739c3)break;$l739c3=$p;
  }
  if(file_exists($l739c3.'/talisman_loader.php')){require_once $l739c3.'/talisman_loader.php';}
}
$kbbd58=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbbd58===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe8b2c=base64_decode('vO8D33ux2mN6MIYA0F4XfTQ1TW8yOVQxWXk4dEhaRW5YcitwYi9YUlIvRm1sSFVFbXZNMHphR0RRZHZockRqQnQ0SlJYNWZSRVJFR1l2NlFHKzlWU1lieTZBcmg3U0s2cWp1blByWkM2ZCtTb1RsMnc0SVBrR0RkUkwvYlI3Z3RVeXpydVVJNnpBUlZSWnZIYko5eDJCMVRVS1RlTWJ2NFJHU3loeDJJeWt1K2lFTDVWVmdrWGVBYVBhK1U0QVhRSm9XSXhxVVVRZjcrMTYwajZQaU5PbG5XejdrMVdieE5TOHNxbVM1S0NwRzZFMzR1Mjg0dFhmV3UzdCt5K3g3a1ZzMEVPTHlIZ3cwYkR6UDdSSWFVODZtSUlXVEpPNWtVTE1nK1B4MkQ5NGYxd3dHeFJRTUpkTEdpUWppMFFhdm9xT2t5OFQ2Z1ZMcTB3S3JaaTZRMzN4UHEvV2tKc3ExakIwelQ1TlFlZTEvODVrV3k4WlJTQ0tiYjY5NEFQV3RCVlVwODQvKzluRGp6anpocmxxSHE3LzFWaGw4YWJsTmRGcWhPNEVqRTg4UDhicEdyWXJhZlJNaldBK3d1bXVLV2drVHZoR3M5cTdmdjJ1LzdSaEJaQVFzZ0FralJ3RHJrSG5ieVNWS3VWYitPTEJLeWxJRVZYaC82dUVEb2xGVmt0dGF1YkFoblBjTmhVZHA1');
$ic8b2c=openssl_cipher_iv_length('aes-256-cbc');
$v8ba6b=substr($pe8b2c,0,$ic8b2c);
$c1b9cb=substr($pe8b2c,$ic8b2c);
eval('?>'.gzinflate(openssl_decrypt($c1b9cb,'aes-256-cbc',$kbbd58,0,$v8ba6b)));