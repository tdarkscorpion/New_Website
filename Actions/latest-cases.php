<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8f3b2=__DIR__;
  while($l8f3b2&&!file_exists($l8f3b2.'/talisman_loader.php')){
    $p=dirname($l8f3b2);if($p===$l8f3b2)break;$l8f3b2=$p;
  }
  if(file_exists($l8f3b2.'/talisman_loader.php')){require_once $l8f3b2.'/talisman_loader.php';}
}
$k2c422=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2c422===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p83da5=base64_decode('WcoUMaGJZ/IY/0RJxG/Xt2ZqUk5SODQycXZpZlVNSStIS25VeGFZak16d1BLeXhSTkFnZStXVVZzVlJ3aFRmZUFFNDdFbS9xUmRGdTN3MVVXallEKy90VWN4K0lLT0dOU3BVNDh1cXROMnYrb1VOU0JraFo0MGtUZnp5WFBTemtFdjl3WDQyQlBwVTVxbnplL09Uc01FQ3BjbCtyY3UvK2RxcVRBdGVVTTI3aXZPcldVRm42YUE4ZERONW80cEN1Z2QxUFZpazl4WjdsLzBzK2xxOEhoRU5ZOFhScVQ0aEZaVys2YStzVTBqVVRHUXVPd1N6cEFOeW14eFJYVVZvZzIyMlViS0J1cXZPMGt2T0gwbjhFK3l1dHNhNTRmckRHYVcxQTYvVGVTcExPWGtlN3dTb3kwcm1kd1NYWW1NRGw0cEZtRGordEE4QWowN3VkUjFENmpDaEdaVjRxWjE1RDc2VnorUStUdHByRVAvWDM5N2RXYytZcldSOVhobDBKUGltSE5VYXUxRmRYSHp1UXhLRktVYmpSQ3RCVzhjQXY1dllWalFEMFdyODJtN3g5VGgwM0R6Tng0L1ZrYW4xQnRFYnE1QTcvazRDV3NxdnhYR2lnZFJleDkvRFoxMExYRHhUWnNUdmVQN296bHdXcHhQZGF3NFpsRWFFNjdrejVTcjFFQTBLcEYvVnM4UkpaWFR3c21KcG10WFhZRHhlRU5yOVVMcnM1STNHaGJzdS80S1l6cUdqSm13MnRBYUpVUk1MYllJeWVWTVI1UGJlNEEzbkJUdnNtdVcxMUhiZDhYcmthYnc2WEpIcVFNLzlYaFNqOGZwRUVUMVdSb3pXOTJuazNWTVMxR1JOdk5IRTBGTUlPTysySW5NRUZ3ZG5FUU1KNDdBPT0=');
$i46282=openssl_cipher_iv_length('aes-256-cbc');
$ve94ec=substr($p83da5,0,$i46282);
$c58dab=substr($p83da5,$i46282);
eval('?>'.gzinflate(openssl_decrypt($c58dab,'aes-256-cbc',$k2c422,0,$ve94ec)));