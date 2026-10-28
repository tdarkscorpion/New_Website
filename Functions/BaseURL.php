<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l40faa=__DIR__;
  while($l40faa&&!file_exists($l40faa.'/talisman_loader.php')){
    $p=dirname($l40faa);if($p===$l40faa)break;$l40faa=$p;
  }
  if(file_exists($l40faa.'/talisman_loader.php')){require_once $l40faa.'/talisman_loader.php';}
}
$kbeef4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbeef4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9fcf2=base64_decode('pyO+LwU2+i3wH0IlBx+Ql2V2S21IQjRWekNueWxjQXQvVkNmWVVsS0NyclRPb2RKWFN6VlFSNWhudWZYQjdHeTZ0NjZyMHh1RXNQc1hiZjQ2ZlJuMFlVdnJWZEFtdlhZbEp5THJzOE9lZUo4L0xleXhtaFR3VWladFNrckxGek9WV1VjcGdkOWYvNTRUZW1VMWRSWGh0R3JhZ29lV2FVdGNGZ1lhQkx0K3BNTUlpTjZCa1JqVGc2T05Zdi81NkZ4cjVyeXhNZmhuTnhzVi9EV0V3Zmg2YU1MRE1EMzRkZkJRM0gySE40WWhibnE4VUwzcVRoa3FjeXJ1NHcySm4xSFRKY1ZTV0p5VkJla3IrTUlYM0FHUlZjc080QUxGYnRQRzNTTlR6U0pLS1JoZDRmbjN2T3puRFdNWDU2WE8vaWJhTFN3QUlCaVpBOTFmV21QcDk0Nzg1ckppTUhDbEtVeWYvQXJpTFVOTGcwamVJdzcrWWJyL0V0eDZ5Vlhtd0hmTzNaU0tDUHgwVkNaQ0V0NkozNkROSWtwUjlRMjRnb2FFY1ZEZURqWDVZcDRqUFc3MDRuWFVGQWpEalhmYlRiRlRkSGhUL1RsWnpyQ0FtbEVUcFZpYUlVSlBCTXE1MEtrME1uK2cwQW1VNDB4clJHNlZBSnY3MWVKTnNWOTBlODhBSUJCVkNuSGhKZnFYNWVWNGZQM0hmTWE4bGpBQ0EwK09jclcyQkVCcWxGcDhaR0tKd3RpRTBSV3VSdy9tRG03RFFnbW4xcjRNNUErNWhTVkJ6cGt4R0JrWVlUVFpWalk2QW1KMHcxL0pyWjFaZXRzdFVLWmFOVGRydDZPYmtkTERleUk2cmNWTVpBNXFqMDQ=');
$ia6c0d=openssl_cipher_iv_length('aes-256-cbc');
$v921c9=substr($p9fcf2,0,$ia6c0d);
$ceeda9=substr($p9fcf2,$ia6c0d);
eval('?>'.gzinflate(openssl_decrypt($ceeda9,'aes-256-cbc',$kbeef4,0,$v921c9)));