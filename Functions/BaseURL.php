<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l68598=__DIR__;
  while($l68598&&!file_exists($l68598.'/talisman_loader.php')){
    $p=dirname($l68598);if($p===$l68598)break;$l68598=$p;
  }
  if(file_exists($l68598.'/talisman_loader.php')){require_once $l68598.'/talisman_loader.php';}
}
$ke4f07=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke4f07===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3f0c8=base64_decode('efTVKm975Dtzr7LQauXh6itNbllmU2NCSEVIVTJReW9XYzJxakY5V3JPQ1A2WVd6dUx5Z3ZxamRQcWV1d3l2a2piZUVZblJQS0xraGM0bHpRcy9vV2JnZzZBZXZqcDlVWmlKUVFjQ0hTbEc0TzJtZ0FyZmRoMGwyNjRuYzRWQUZ2eVVsOENoR015bDFjcGo1ODRtQ0g1M0NTb0d6bnFjazZQS3dLVVVKai9hdmpiSm5ZVVQ4cnVoN3Q5Qk9Ed1A0elhqRlptWHViTXJiNllnMzFKV2pUWE9vZ3RxVUxzN1lYZlVPMjlmMGdxOUdCNUFjcHFpQ2ZJMFREdFByQXU3eUNScG9ScmRXQkg3Yi92VS9NQm5iSm1QNVhqTjZYeGwyRXk5QmpCWi9KbnFrTVFESmt3K0pNMGRScUo0TDNtRWVPVXBqcUtMbCswU1JxUURqT05hNnZSUFUyQlVQZjZtZGxoWFJaVk1DZ3lmZkxyRTAxRUFYQ0tVQVFXVjFFL3JxNGxjSUhIZStxYktLL2RGbDFsNkx0ckRIUEs4VkRLaHROUXB3WUJEeU01TGFtTGUvZHZNV0ZUY2orKzFSZlVFcGhYemRLemFiZEdseVFUckk2b0tob3hCanZIWGY4ZVQ5R1lxNDVFNzVHSWkyRUJ0cktIem1NUGgzYkdpS0JJeitaa1hkdDFQMkdPRzRJWEVCRnMyNHUrRnB1MkY2SXZVYlM5NkxXdExJamlETmFxaVdqUHJFdlpjeC9TMWZLTXVhZHZ0Zm9jMzJqWXBzcVcxVkEwdnNrdkRFM0dLOVpXV0Ewdklqa25DV3ZJckRhQWxiYXdJbkJRZmRZVTV1VWZsbmNtWTl4VXh2WjM3ZXhDeXQ=');
$i17ec0=openssl_cipher_iv_length('aes-256-cbc');
$v2aa9f=substr($p3f0c8,0,$i17ec0);
$c7fef6=substr($p3f0c8,$i17ec0);
eval('?>'.gzinflate(openssl_decrypt($c7fef6,'aes-256-cbc',$ke4f07,0,$v2aa9f)));