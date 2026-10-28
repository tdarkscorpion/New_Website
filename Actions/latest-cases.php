<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb4f4b=__DIR__;
  while($lb4f4b&&!file_exists($lb4f4b.'/talisman_loader.php')){
    $p=dirname($lb4f4b);if($p===$lb4f4b)break;$lb4f4b=$p;
  }
  if(file_exists($lb4f4b.'/talisman_loader.php')){require_once $lb4f4b.'/talisman_loader.php';}
}
$kc32dd=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc32dd===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf044a=base64_decode('jyMOPC0ZooygaSpEkysJZlU1N0ZuWnhtNkR4KzYwT3dUOCtianl5MUwzRDY3TFlsaFpZd3QxUFNnaXk3L1pkaEJsa2UzYTJUTU5XOHIvSEdMbVo2REMwcW1iNElxTXN4QTYvY20rQWJ1eExEL1lnYURBK0FCTXg4b3IyQUJHMjNnWkZIMGcrWU5GVVNXbnhQUkRkTHpkYjFXVno2RWJXVkF0ditmWnNPbmw1LzRlWmpwdlVuVVNRS2pKanhQRHJXQXd5K3ErNDY3dlZZanoxRUJDVTVzVFRrU0prVVRYRmhRaXFXV3dScG9LVWNKdG5GS0wwQVJybXk2Z28zOWZnc2YzRWZoQ21qMXRIN0pETVFrOWY4c200S29UbVZyNkUwcy9sZm04ckhTcFY5MzcveHVGajN2eXJmT0JpQm1BSi9XMGRmUW5lN3VZNVl3a2h6YVBXL3c4K01DUGNxUFpaK1c3MklrZXkwUkpmazJRN1diZEsvSTlxU3BsazVCUm1pWTkzV3VBWC9aNzlRUGVDVEFMeEVsTSt4d2VmSU1wNDVtL204cmdYVmpNSStHcmhIMTZKUUxQa1FjTnY3aWU4NDArRGtwaEtDTkpKYjcwU2NSSW51SjJ6TVVqalFlM2k0WUpYZEM0T1QwaUhLbWZqSS8xTEhSS2NTbVRXSDBnNlZ1WDNZVFRsZmNWeGdlQ2pjM0Y3LzI2ZWV1TUZTMnJRcVE3Rm9EWlYxV25HeE4zT1RYUWVlV1dnZS9FQVVJMlM1RkM4N0RoK3ZpV3R4WDZQbndObCtndnVUaHdsdXlNeThVSGgxRVVMZlVJZ3VrcUlBZ1JZSWRwcHdjem1KMVNpTkxtRHJLTmtOZVJpa29PUm5uVkthemRaUGJadkowTE5zQTBVSGNnPT0=');
$i956b1=openssl_cipher_iv_length('aes-256-cbc');
$va0012=substr($pf044a,0,$i956b1);
$c69dd8=substr($pf044a,$i956b1);
eval('?>'.gzinflate(openssl_decrypt($c69dd8,'aes-256-cbc',$kc32dd,0,$va0012)));