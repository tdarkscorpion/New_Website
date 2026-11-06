<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4d09f=__DIR__;
  while($l4d09f&&!file_exists($l4d09f.'/talisman_loader.php')){
    $p=dirname($l4d09f);if($p===$l4d09f)break;$l4d09f=$p;
  }
  if(file_exists($l4d09f.'/talisman_loader.php')){require_once $l4d09f.'/talisman_loader.php';}
}
$k86ac2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k86ac2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p193be=base64_decode('D1xV+jwO77cgpdVgUqfLNFViK2w4dnU4OUlzOXQxekQ1eWhlbGFoTW53ejdwRE1JQnUrNmZ1OXIvdXdUUmNGZmZGQVREc2pyUitCUmVaSlhMY21ib0h5RnNHMklicmJ6eDduT0xlRHgzN1JQK1hLUzlHM2UzUXd0WGh2bmhMeDNNbk1rNnlFbHQ5Rm40dFVQQ3JVd1BReG1QK3BFUHppUXBVaHU2Ymc2cEhPRlNqbllnbkUzdG5aNnl1T0hveTZkZndnRkcxM3k3a1ZaR2tyRWd4RGN0L0VxVTNpaDVDVEQwWm11cHd2dEFlNXlUMDhIWHU0eE1Fa1JpeTVLT0tVZWtvNFZpVzgvRk9qNkcxdE4xOGRzc3h1bitxVVZQZVROK25WYmdlMjIzUGdtMmZZU0tUNUpaWHRmaUJYYkszaHpKQ1FtUDhtek9TeGNteC9Fc1ZZaDVmYnJEb2U1KzNDdytOaGhJY29Jd0xNYUsveWg3aHFOVFZCcVZGdlFQOXd0SkZ3bVFUTFlVZG9VenhUdS80ckEwWFZKTUtKMCs5YWNyVjlKZENJZjdrVGszVXNteUxUL040MStMM1hhWlAxVkYycCs5aHFxelQ1RDYzdmtSYXJKOEJJemZKU0JpNngvb1hiRjJrNU5pb1RZelJMRXpUc3lFMmtxMWRnVnZEUW8zYmdQRzN5eTM5elJoS0wxcVNQbkVVWjJWNEswcFZwYnZURGQ2d0MrWE96b1c1SGJQam4xa1BVQWpBVEdOM0hYdE96ZkF6NkMrQm5rTSswelhjOUhuV1J6Q2wzcDAwUG9jMXB0eVhKdTUra3VLRlpsTy96SW55S2ZGbk02a1BnZTRVU3hXNUg4SmNDMTZiMUgxVjB2OFdzRVdZY1FxUlhSSTVtcjVGL0tiS0JZdVhYeU1JQmJWTGJFMXRUUGMvckxwWEt5bklrOWxyZHdoTDBrQlZHSkovaW9QYmxaSDlmWTI1M3poRVFZL1JIb3FUMlVyejFGOXUyQm9RU2FvZEVqZHBPbUFTemZudVZPKzZXN2p5MU9oUWtBL0Z6NjdIQ2VtOE1uRGFKRnJtU3VKMDVONm5iamNTQnhUWlN6NEZTcnFIWGdFdmNCVXZHZHNoc1c=');
$i8aaca=openssl_cipher_iv_length('aes-256-cbc');
$vf969a=substr($p193be,0,$i8aaca);
$ca63f9=substr($p193be,$i8aaca);
eval('?>'.gzinflate(openssl_decrypt($ca63f9,'aes-256-cbc',$k86ac2,0,$vf969a)));