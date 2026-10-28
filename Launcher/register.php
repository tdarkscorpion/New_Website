<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lae91d=__DIR__;
  while($lae91d&&!file_exists($lae91d.'/talisman_loader.php')){
    $p=dirname($lae91d);if($p===$lae91d)break;$lae91d=$p;
  }
  if(file_exists($lae91d.'/talisman_loader.php')){require_once $lae91d.'/talisman_loader.php';}
}
$k913da=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k913da===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd4811=base64_decode('RKZmzwsKMyVxitvRgiOzIDNkZFI5RkQvRWoxT0tWL00zOFhYRU1RVkpackN2a1MzMzd4UXk4UVVXQ1F4QVZ1UTQ5MTRVWGNHeFY4SkgzVHZLMlZQMy9DWHJoSWlyZEx2S0E3QXhVb2k5TDhGQnlqWkQ5dHdRc2pvYUR2U2hQdm10VitLZktTUzdBc3hJT0pvNk40R0NGWjFhOU5QTU1iL1YxL1J2SzRSaHE4dUsrNHoyU2U1czVMMEVrblJSRDk0OXRjb3JnaUJXNEFLVjg2NkkzVHlkRlZmdnY4SkgzLzh1b1pwM3kxQ0JqNGR1TjlESUFIVnQ5OE5ZSlQ4NEt4V0N6S09tdkFoOVdDMGVTbHhPMWl0bkFqSTdRNFBwRWhOTU1RUXNGdUJxU00wbVBBSGF5VmhKbGExNUpObEQxakd3QkpSUVphQkN2VW4vdGh3ZjZMMWdhUVYxVVUyTTI4ODQ1U2V2Mm9oU001S0JYRnVWdXdoYktNMVc2eWNwTTlpbTJONkRNK2Mza1J5NVNHd1JaNUxHN1FuUExLNE53TTVtbFpUa1BJSEpqdWUrV3BwQWx1K2JDWFNra1pSNmI4b2wyZlN1NFczT1g5SHVKditJZm12c2RiUWZyRXhpY0srRDJnSUtjcm5NMTg0cDNkOS9pN1pCY21GSmg5Vmt3ZUVxOTVTTFV0ZkpLT2ZjQnNrRUxjM0Y2MTF5aTkxTmJxRmd3RkVMNE9rdFJNNjFrQVBoTnpOUDRjQlpSbnZYYXhOVE56UXZWblFaeXVPSFNENVQyaUtOcmJ1bG90VzVHVVgxYW40cE9XUWxzL0pzd2J0amJkVnpSUE9kRExEQ1NuZTdRUFAyblhUVFYzYlN4TG1aMUJYdHZZN1BESXZxWkk1ZXNGLzFkN2RWRkJ4UkZ5VGhFVHFmaHQyZStrTTY0bms4RWE2bkc0eFhSS2ZLZEZCMVJNUm9Tdy9wU01vVjEzY0dEdEsxUmJtOTdHaUk5VlIvMnp3WDkwcnFkaGt2cERmRG05eGRabWw1TU1veHR3VS9kTUJsMEppMzRaREgzWUc0elF4amxSQ1BHSHVyLzM0MnhwSVA1c3pITXFUQTI3MUtqZTB0amNwTzZtblBlN1Q=');
$i89494=openssl_cipher_iv_length('aes-256-cbc');
$v1207b=substr($pd4811,0,$i89494);
$cd699c=substr($pd4811,$i89494);
eval('?>'.gzinflate(openssl_decrypt($cd699c,'aes-256-cbc',$k913da,0,$v1207b)));