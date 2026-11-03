<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8de32=__DIR__;
  while($l8de32&&!file_exists($l8de32.'/talisman_loader.php')){
    $p=dirname($l8de32);if($p===$l8de32)break;$l8de32=$p;
  }
  if(file_exists($l8de32.'/talisman_loader.php')){require_once $l8de32.'/talisman_loader.php';}
}
$ka9205=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka9205===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7696d=base64_decode('cn8Heu/OKzgTbhEpig4lP0p2LzE2Rk5BZDdwNWlUNkZCQTRnNWtzUXRiSXJWb21pSldBY3RGbFRHMmZ5ekJkdmZxcnJpclR6MXdRdkFKN0lCVzh0aE0vamdvcXROSHpBeVJ2b2wvenljQTdZNFlSQmhML1oySUJvNlBVR2JHdDNObGpxUzcyanZNeXpuc0xIcWJNZ1kydG93UHNmNnd4VjZ3dU1GUmkrdVlXczJKU2dvdDY3MjZtdDZqM2ltKzFxRjQxVFh4V1VuSGtmdk5VaXh3QkpaVEcwVllCOVZmNGlHNUJ1ZlBDMTBNcE9WZXp3c01JRDh6a1pqYmRVMW9FZjg4d3FRbjJhNjhKUEhBVGkxVktpSUJKUjRWSnBPNjBWOVdqcEJiYjJIVEJnMnJTWXgrZTgvNXNSM0pQSkpORHJ5N21WeDhVdEtONDY0UkZEc09RcXhYbXp0T21scUhnRHEyZkhOcFhDNWVXOHVGbVlvTlNnK1Zka2x4STQ1N011NkFEWXh4MlNnME5kVktYVnFrZGlMQUFCN0oxdlRCVmFaTzl2L0JHa1huQ04rMEVVdlo0cjVpUkJTWXhpM0dKQlRxMGI5ckdXdTR6TkVOWGJCQXJJZ2gzR2FIaTJDeHBBSWI4Zk0yd1VyTkoxYm1icGVWeFNGL1ZyL3hQMHpqTEN4dDlFTDQzL1gzZTJrb0tMV2FMTGo5bWJwYVJ1QXphVDB4dlBlbURoUmZmVTN6NEduS09ZNEsrUlAvcGVxVEJsa1JUYWc4dFc1cW8wOHNpRDRYUmtTd2oxN0FpZFhleWJBT1lVZnBHTnpDcjMzNlZiNmN6Y3cvOUFlODZFN3lwbUFrM0p4cVIvZXNldmhrMFk=');
$i4abfc=openssl_cipher_iv_length('aes-256-cbc');
$v24aee=substr($p7696d,0,$i4abfc);
$ce9cd4=substr($p7696d,$i4abfc);
eval('?>'.gzinflate(openssl_decrypt($ce9cd4,'aes-256-cbc',$ka9205,0,$v24aee)));