<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8a57b=__DIR__;
  while($l8a57b&&!file_exists($l8a57b.'/talisman_loader.php')){
    $p=dirname($l8a57b);if($p===$l8a57b)break;$l8a57b=$p;
  }
  if(file_exists($l8a57b.'/talisman_loader.php')){require_once $l8a57b.'/talisman_loader.php';}
}
$k5672c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5672c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa0abb=base64_decode('rl++b9+5PQk3kUXQD/bmk2RIeGFrM3VFTmdDc1RXL0c3K2xZVzZodGN3WERINkZnZnY3czBJZFk1UzJnYUxYeUtSd3NhNnFEN0YvT3laS2tGbmpOUzBzOVJVQVc4L2FrZXdpUUNUVXZnelpPQ2FFR3lJbkpRR1h1Skk1VlI0ZVE3UU0xcEhzNUxIYVRDUGRYc0tIVWNoMWlPOW85WUIyWFBacm9aR09TM083S0JtM2FEWDdUWTV2Z01JWEJGcmJwRi8rZ00yU1o2MlRwS29LRWpFSmE5RTZqRk15eU1TanZ3NVJTbzU4d0lGeVpVSHRhQmU5a0tZa2t4ZXRhUFMwbDN5TlFkNWV5d09QdHhJajBGcWVpbyt6dW8zNHRKd3pVSklEbzdabCs0cUJTeTdSMTVtSDZBNDl2eDQzQXFQUWJhQXYrVDVsUy85UUFLYjM1cURncGg1MmVxb05QZWtkYjZ3UEMvcmJHRGs3YzFYNGdaMEdXVndqODIwL1JITzFGOUhYNmdEaDdJUjhXWHNMdm9UKzFkdUFobTZEV1I3MFc0blJRNkVRM3V6UjltTEJWMzVrN1RkYzVzOXFNZ3h0MWYzcHBiTTVVbWNqT2RMWWVmeXVjSmZUcHlMeEsyeDFBblVHWDdGcGtiU1JxUUZlR1hUNHhhWlhaZmhwZDY4bXNLaWZWM1R3bGhWOVkvclJKUXNFVkNTV1FGWWMyWG5YdnJwWUFKS2lPdEFtTnNub0hGVUFBSUtFQ1E4Vk1vc0JqaHQvSW1TTSs1cE1GakxJbXFtd2Q0cFE5UmlzZ0dqTjhFTG5DbUFXQnA0THgzNFdxQ1VUM25qSVp0ZS9FUFAzZXpCUy96c1RCMXdWdGxieTJjeXhvekNSN2Y2R0kzd2txSkUwVVFwdFgwaDBoTXdEQXRGMk1hWjBuSko5WmhaVGpRWFpYMUlBZHRic25hQVBnbjVrbHBLcmJZaDlxeUdZaC80UjcwZzdpSEhqQ1ZVV1oxNkJnZjhWV0k5dUlFK2Z3bTlZVlJocW9pcG53NWRWZmFsYksrWDFrRnI4U3Q1V1pXVEI5MmxNc0ZSRjBpRml3K1YwcVRRODdtWk8xSjVXVld4U21GQllQWTlVamd1cTE=');
$id5792=openssl_cipher_iv_length('aes-256-cbc');
$ve4311=substr($pa0abb,0,$id5792);
$cf467c=substr($pa0abb,$id5792);
eval('?>'.gzinflate(openssl_decrypt($cf467c,'aes-256-cbc',$k5672c,0,$ve4311)));