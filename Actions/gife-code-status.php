<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4fb9a=__DIR__;
  while($l4fb9a&&!file_exists($l4fb9a.'/talisman_loader.php')){
    $p=dirname($l4fb9a);if($p===$l4fb9a)break;$l4fb9a=$p;
  }
  if(file_exists($l4fb9a.'/talisman_loader.php')){require_once $l4fb9a.'/talisman_loader.php';}
}
$k6a0f2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6a0f2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4969d=base64_decode('Zroqp3gOhGNCpPq50ocpGXVPdWFxaHNnV3ZFL0ErZkdxUFk3Ni83MGxrOW5ycTE0L0lKTlBJUnZxUEVnNjh0c1ErSHJHa2Z3MUw4cUk5N0k4RW1Pa0tySXo4ZGxqTk10a2RlM0x3SHNvTTlMOGJDUit3VmVmcWxyUDhva2JoS2tNcC9ON1J5YUpqSmkzVlc1bjNZSlFUaWMwSzZ4UXFyUUM1NjRxZ2w2UzVMbzZUajluOGlKZ3BYcEdwZDgwc0J5YUZBU1FybDY0cWloU3dJT3pZcS91T3JlSVkvMVlGbHhobzhxc2dqb1ZOZzh1UWh3SEFxdWFZZ1d2RjlEWmJKSGJHRkpTQXFrNUt6VHlWdmVncndud1dDalhJMGtHa21qTVB5VmltaDZpYnN0SkNOeUFNcGl0QmJZS2FGYWRhUGUwWXNwcmJHUG4wMTJUYTAvQnQ1cGtSRllhbVBNbXFqeHErdjdFbDF6L3FXTXJIeFBEL2ZGdkQ4VTdXRTM5bGRacmUycVduN1IreGhHWHpEYWpucVFvWmtkMXZSeW0yZkRiNUNrYldBQ1FHekRPNS91TWFXNWtxYlUzU0ovOWhJaXlOcXVmZ2twMVhzTzB1U3Fhdk9CZjAvdDlDTTV6UEkvUUd1Sm90ZDBVdzk3S0k5VS96REpwMGhEK1lOc3VzVGJWWTJtV1puVk1YUDNxTVU5UXJYWDZQeWNkY3E3K0VXSmpsMDhUazhNR1JBNDZYTmZjYlNFck02c2FqZmFuUE1hN3VhMk92SktJV1dEZFJSb2hTV1R6SlJCYWY1bFBLcDNhd1VEZEpzYmsvZlh1S1dWUEEvRk1qbHJOQU9ucVVycHYwK3pPb0RZMVFnZFNRS1k=');
$i9ac82=openssl_cipher_iv_length('aes-256-cbc');
$vcc1d0=substr($p4969d,0,$i9ac82);
$c9fdd2=substr($p4969d,$i9ac82);
eval('?>'.gzinflate(openssl_decrypt($c9fdd2,'aes-256-cbc',$k6a0f2,0,$vcc1d0)));