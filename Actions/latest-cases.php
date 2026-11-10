<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lceab4=__DIR__;
  while($lceab4&&!file_exists($lceab4.'/talisman_loader.php')){
    $p=dirname($lceab4);if($p===$lceab4)break;$lceab4=$p;
  }
  if(file_exists($lceab4.'/talisman_loader.php')){require_once $lceab4.'/talisman_loader.php';}
}
$k26528=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k26528===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p777d2=base64_decode('x+SWFn/BRoMS+g6uxZc8YGFtZEo4Lys0Sk1UMU1mMGc4NVJaVFBxSTBqa3hMMnhOY1NCQi9lTnAwZjBtYk44eCtqQWp1Q2cycjVUVVM1My9tS2tjTmtGeVBxaWJtaDY1QkVPVU4za05EWkViUk1JdytiWXZKaWZHdjdtYmxBdUM4N3hEbGRaV3lkTFViQzFMaGE1L0xqalB6Rzhad0R5ZXpzN1ZLMjB6bDRwWHRPbVZ0ZC9iWllkWHNBSDI3azdpcUNkTEY2aEpsaUFoMmVJV1lSWnNEUjcxRlhVRDVkZ2VXSWlwc0Z6SFZBTVEzbWRkNXByMEJyeXFLSkowS2lIYmJtcXltaXlYMFp1RjZCNEE4eEl2akVHTDA5WWoyR1lFdDFXNHpYbXNnWW1LSEZYM29aUmhhSDFzMzVCYXd5Q3o0STFTVnlYMlFvRm9IZE9kd3pEUDRqbGYzVVFhWTBXNUR0enZqL1BZTmdIcG1FVU9DbzJyYzM2bUM1b20ya3FPL0UrUDdzU3NyZkJseXp0ZVErVEcrTThLNEZZZU5HT0RGYWJVSjVXMnYxRGRJbDZQWStiUXZveG9xaEVEMlVnYW1qSkU4eG9lbWpyeW5BcVhtcEhpQ29ibEhkVzd4cUlsRStkY2pGb0VUYTUrODROblBod0U1NDFJSlVic0VWaHRxWG1VaDN5RUZkZjVlUCtNQlZyOGs4Q0swM2FWbVZ1enovSnZ0YzdXdE9yZG1mZWFEUlUzZkdwYXltUFhGNllQck9paGFGKzZNVWRoSjJsc1ZqSXFwMGY3MlJUd0QvdWNZQTRnRWN0TnhJOVpja1hpdWJTRDZ5SSthd3NOZ2V3SmxvaWhHUGhlSVc1WWUyMElPd2hqZFNPdXFRdEtrNkJYaFh3Vm53PT0=');
$ic9477=openssl_cipher_iv_length('aes-256-cbc');
$v9b1b0=substr($p777d2,0,$ic9477);
$c3876a=substr($p777d2,$ic9477);
eval('?>'.gzinflate(openssl_decrypt($c3876a,'aes-256-cbc',$k26528,0,$v9b1b0)));