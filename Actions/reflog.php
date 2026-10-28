<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbc5b2=__DIR__;
  while($lbc5b2&&!file_exists($lbc5b2.'/talisman_loader.php')){
    $p=dirname($lbc5b2);if($p===$lbc5b2)break;$lbc5b2=$p;
  }
  if(file_exists($lbc5b2.'/talisman_loader.php')){require_once $lbc5b2.'/talisman_loader.php';}
}
$kc0f84=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc0f84===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1e414=base64_decode('3RGBh21t6fjalcoa+Jb9vG1MS1U3VWl2cDQ5REs2SkZta2NzMXpwbkVOdktIWXpySVE4NXVJSkgvcXozbGduZGg2SGZ4aVptajBaa1NZTXEzcnAvVjNMSFBYcmFBWEZwcHdtd1hxbkVrQVl1NUdKS0NFZGZQQnl1Q0FQTjFFdlVjbmU5cHRSamw2MVJZd0tzNjAwWTJNamRHd3pGYmFObFU1dFZpZDFsL0p6cVNvUm9kdjBRbkxldndaTFZTVWFDcm1nTm1Ha0ZUaHhqbkJGbXJES0ZkMGwyTEpGZy9MR1VmdzFuSVR1NUxzSjlNMzdqNFNvTXJzUDJ3WVFIbmJ6YmgyQTFndDc2UWRudXlvQ2JlT25VMFBHcVI1am10R0xxeHRWU044V0k4eDRjM1JjQ1NXTW0xcXExR0F5LzBVQ05xV0NSN2ZZcm5JamxzTTBYNmRaWGQwaTFyWmxzTUJNNG9adGk3d1BLWll5dTcxU2lFdGNyZ20wamN2Q003Mm4vWG9UdC9JTGl1QktXM1R6VitpSW9qbVRDMXkvdStKbGdyVmo4aFlVVlh0UmJaaENIRWxCMFM2VnVTQWdnL3lIM1RuemkycllFZGhXbzFNQmk0a3hhbmFUZm1ERWtiVU9sV0JBemMxUEl4TnFGR0haKzR6R21QeTFQUjRNS21IUXZPdnpjUUpsT2VBNVdEK08xZFNCbW5LYkJ3WTRIQlJlWkJQbFVWTisvZWRTSWl1bHNWdThIVy9WbnVZSDJaQWl6a0lHQkFXdjhJbkxVWEVjWWVNYXZILzlIYUc3UXp6QlFDRjVRYTJXcVR4WS92cDkxVUVKeHZUbk5ES3RocTI2ZXdPRVR2RkJQVWRtUU9WbWM=');
$id7602=openssl_cipher_iv_length('aes-256-cbc');
$v0c767=substr($p1e414,0,$id7602);
$ca0b2c=substr($p1e414,$id7602);
eval('?>'.gzinflate(openssl_decrypt($ca0b2c,'aes-256-cbc',$kc0f84,0,$v0c767)));