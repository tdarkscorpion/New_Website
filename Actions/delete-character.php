<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l11978=__DIR__;
  while($l11978&&!file_exists($l11978.'/talisman_loader.php')){
    $p=dirname($l11978);if($p===$l11978)break;$l11978=$p;
  }
  if(file_exists($l11978.'/talisman_loader.php')){require_once $l11978.'/talisman_loader.php';}
}
$k4e357=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4e357===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pef211=base64_decode('2jYjs50zQoZcNtVALmFgfVp3NzBpbWt3Z2RzYmZPTmtzNVAwS1RMRmNHamhFVkpESllTeE14T3o0cGRobUk4YS9yblQ3R3d1VjRuTVF5c0FhNEkxaEx0bGpTVll0L1VLdDhyd0ZRRDVYclM4a0dPRndzWmY1eEw4SWt4bFVFU2x6bEQxcCtNeUlLdUdvaUJGa2JvZVRGekhHMGVxZU1SeVV0WDMrRWFidHQzSXRGOTJxdlN0ak5meEFqWHhFc3lFbExzYmJuUzczQnArUmpFWVhkcTRXTzVKNi85ZzV1a0Z5cm1kWnQzSGthZEZwOVJTRGdSVnkvMDFWVTBSUTE3MFNkN0pjOVZRakoxb08rYzJ4VUpmM2NGKzUvVDRncUdKUy9rdm8wdzEzcmdKSmVadnB1UldUbURqcnR3TWlaSUhZbW4rV25sNC9Vckd6NDdPdG4yYjFVanp5SzlhdHVmdWdpTkNSdE5tYjFlOUJ2VFpjYmQwc2RzUFJmcWFwazdJeGw5dWNTblBFekZCUHNIU1NIZUd2SU5NaE5neTgxTEN6c1RDUldDTGdqeHFGVnlsZFV6eExsSm83MFliaE4vak1MMTIzZGJ0cVVrVzM5cjFxVkNvS1Njb3BNMTFuYjlXTVhXaTgzQ0Q4b3AzSkdJWXpHY0RTOUZKU1d3enoyY3d0dUd6OHh3SFNzMDF4NG1vdHhxYTdhYU5ReFJvZHVXSWVPRnE3WHEzOXYvRkJPbE9uZzdFbEFhMmdBQm41QnQ4aXI5cGRlTU1Oa2tjS2hiZzJ4MHRnZmFzNzNaVWpnVEtacktCV1E9PQ==');
$i0386f=openssl_cipher_iv_length('aes-256-cbc');
$v4b9cc=substr($pef211,0,$i0386f);
$c35072=substr($pef211,$i0386f);
eval('?>'.gzinflate(openssl_decrypt($c35072,'aes-256-cbc',$k4e357,0,$v4b9cc)));