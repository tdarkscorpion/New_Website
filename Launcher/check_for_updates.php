<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l64cc0=__DIR__;
  while($l64cc0&&!file_exists($l64cc0.'/talisman_loader.php')){
    $p=dirname($l64cc0);if($p===$l64cc0)break;$l64cc0=$p;
  }
  if(file_exists($l64cc0.'/talisman_loader.php')){require_once $l64cc0.'/talisman_loader.php';}
}
$k70524=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k70524===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p371e7=base64_decode('umc2vbHfxdOw7GCL6VN/D25iTVlwN05mVjlyMWNPb1dvVk1Nb0VQQ2I5S1hTNXZyY29FQnpYMjZHVlRQQ2tZSHZ0SWpzeEhDSDRPc2RkSGFqSk9kejB6TVFES0JCNGNlL3htN3RIaGp1T2JCcDFIQlhrUkR2T1RJYlNzZTFrZG02eWhhQ3NZVWFiU2JZaXFlYUJicFZWV1hDeFhOcnJSbDdZWCtEOHViRzdOWS9HeDZBb1J3OW92L3BpSEF1QzdRNitTUG9qL0FEOWRzNmtwdWMxSGRDT0h4emxFenJhb1QvVnV0eGRST3pVSUp3Y2VwSFYvSWE0UnRqRnBMVVB4TmIzRGNXVm9FUFRIeWEwcU5WazE2bWlyK2RnTU1IL2E4MHBOWWhuQlQ0SElhNjk5RzZ5MG43c3NudDg5Sk96YzYzM3FSa1F3WEtSOVY1d1BxTzBCamN6M3pMUGZqZWNIL3QyRFNJVXZqS0NZWnJFNVdmTi8vczM1YjdNWTV2clNkZG9aNElxQ08ycUtTZFJuV1YwL3laTGxlSzhGZzZ3Z1NWL2RMMXFLU3hBNE5JY2I0TEdpMTRjcS9LZzhkbldzMTBIVVM2SDNyMWxENVJmbDB5TFRzVDg2eWcwR2g3L0F4SG8vaHhpVERzZXFjTjJxYmlSWTdlMGhFS0lGcFA4eEJ1Ris3M1JXajUvVGQzZWE0eGVZSU1RZUk0U2RBWTJBTWRXL1FTeDErdFp0UlZ5RGRVK2lmaERBVW9OZ0JtNWJHSFJETXNKeFVOc2srejVjOGdaa0VZVnFuNXFwUDVXWFBkVXkvcWxHZ1VUWVhqRzBjT2szNjZEVWpiWTBMeWtPWjVoOVhBM250Y1BaWDgxanpzR3p2SkozaWNRUEhhaFdYd0tkR2drMk5VbWUwbEVtU2JmcVcvd2pTMVBYUVRWSXRRd29FbnU1RHdJeFRBdnhhbkx5cm9LV25IZDROZExRWlQ5WkpsRmkyanZQbU5EUDl6QWlwdktHTlpPWmZoeEg3MUtnODFKSEhKVmYxQmVRODJLdnZSUURLRUFQSGlKRldvZGtHWksrL1VqMGg5RlZUZ1hINmlvM1huYnFGajhwOUowTDhPMlFlNHowa1pNTGlscFlsVU1rc3M5UFhIMU5URFVTeUF3PT0=');
$ie1b4f=openssl_cipher_iv_length('aes-256-cbc');
$vd4417=substr($p371e7,0,$ie1b4f);
$c274c0=substr($p371e7,$ie1b4f);
eval('?>'.gzinflate(openssl_decrypt($c274c0,'aes-256-cbc',$k70524,0,$vd4417)));