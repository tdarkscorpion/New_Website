<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la9215=__DIR__;
  while($la9215&&!file_exists($la9215.'/talisman_loader.php')){
    $p=dirname($la9215);if($p===$la9215)break;$la9215=$p;
  }
  if(file_exists($la9215.'/talisman_loader.php')){require_once $la9215.'/talisman_loader.php';}
}
$k94c90=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k94c90===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$paffe1=base64_decode('/1CXskQ7xEZVlXZDuCeyh2ZrVjBVNmFxR3JQUWRqSGtDS2x4aXUxZVNmbllZRm1NZXJRanpjazdqMERud0VXbW9lWjVnVndnc1VjL0grN20ycWxhQTJTd0FIWUQvM2hNaVIzVXBRV0d3L0FEd1U4cmNsYmZMM3hONlhuV05aeXo0Y1Erc2tTNzJ2Um9ycUNwZFdRc3ZjNVl4VHdYNnIyUjRHcGEwVFBYTUtwTjEyV1Y0NXk5ZW13MU5GSzF2N0RkU0MwVzRVeUxWMHFXMlJIbUljT3F1cm1HYlMzeDlBR0lRYzBZT1VTY0lLekRvakhHb1BDQVpjai9hM2o0VUVqUitsN0poWXU3SGRKTUdMeU9pZXZEb0d2M2NTZ0ZqTW5oSkVnVUlLa3FEMGJ4QWlGdlJMeDV4ajlvUUNKSk5GcWpSajgzWmIyVVloSXVMT2s5WFZyZGRoK05SdTQyakFEMVhtWTR5dm9PV0FGekFXMG9UZXg2MWlOWXBUUnUxRzhGd29SejQrRzRheG10ZU0zdGtWQi9IQ2QxK29uSHJLUXM3KzdXZElKUm5LdDV4c01lTVA4WUZOR2VwdG1SREJZUDlxZnpyYlliRmtsOTFYWGdqL09Qbzl4ZThUSG1abWFkVDNtZ0RCSW1aNEhwbGFRVVk5dDNBQUc5VHY2WWI4WW1tQk5SU2tPUEFDbDV0UmtnS1N1SDlBemFHTGRYdFBlNksvTEdpR2UvZWpQcU9TNWIxWFZhLzNrSmdGenQwejFjbFptM0YvcHZ3RjdFNm9NRkdnbGhtSkYrUVhjTjRmbHBuN1RpRjRhc1NzaHZKN3ZRSVlSSFBpZlc1Q2EwZDU5MTVRanFVak5pVExhWnNNZEg=');
$i4a511=openssl_cipher_iv_length('aes-256-cbc');
$va6557=substr($paffe1,0,$i4a511);
$cd5cc0=substr($paffe1,$i4a511);
eval('?>'.gzinflate(openssl_decrypt($cd5cc0,'aes-256-cbc',$k94c90,0,$va6557)));