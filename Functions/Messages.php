<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $leaeac=__DIR__;
  while($leaeac&&!file_exists($leaeac.'/talisman_loader.php')){
    $p=dirname($leaeac);if($p===$leaeac)break;$leaeac=$p;
  }
  if(file_exists($leaeac.'/talisman_loader.php')){require_once $leaeac.'/talisman_loader.php';}
}
$k60d13=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k60d13===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb5c6a=base64_decode('CLMv9jnVNCaY+A/mQG65SkxXMGx2eHpjbEZ0Y05FbGVpM2N4UUg2dUNlOVlHWUZVREdaVjI4VVpDaXg1dStpZkJQQ2FGZnFmTGpCUXpacUk5OVpSREdEUGJyVzdnajU2UkhSV0hudGNaS2NBMzRNTGlwbWl3RWlScm52L0M2aDBRL1BGdkZBQ2JqN05Fc28rbVVTUEtQQXJnWWx6SUQwb0dlSm9Id25vRjhEREo3OEQ0U0JpQ0c0OTdSVWlVZllwOXBkb3U2VEVJa1kzT1JlUzQ3aVZxUWZCYjd6TTE3S2VqdjVHSiszRzdhZ1FJR3NqMW9FM0M5WHVuWWF6eFBjYzF0NEswTzJIcUJ5K1hIVUVXN3MrSnVwcXJCcFJ6SGxCZHZHWURLb3hqZWV0RFdsdklQMHRjNlRqOXhZPQ==');
$ibcda3=openssl_cipher_iv_length('aes-256-cbc');
$vade88=substr($pb5c6a,0,$ibcda3);
$c7a42c=substr($pb5c6a,$ibcda3);
eval('?>'.gzinflate(openssl_decrypt($c7a42c,'aes-256-cbc',$k60d13,0,$vade88)));