<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l13595=__DIR__;
  while($l13595&&!file_exists($l13595.'/talisman_loader.php')){
    $p=dirname($l13595);if($p===$l13595)break;$l13595=$p;
  }
  if(file_exists($l13595.'/talisman_loader.php')){require_once $l13595.'/talisman_loader.php';}
}
$kb5fc9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb5fc9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p212d7=base64_decode('wc9YE5E6i601qS1y3C3pqEtkSGxNSUo0SGtvdGk2YjdYZUh0YSsyc3JwTksySlVMT1ZQOUtLR3RCK2JNNUo5eERZY01FVlNmek1PSXQ3WURyRVRlcHBQUWJ4eEd1QmMzNTllVGxGb3RoaGJZNUpNVFY0Vk1LWnRCL2dnYmtRSjk5UndmaHgxczFMM2lwN2xKbXBYNGxKajczekZRMFo0RSsrWDVFemVFdzd1TktMS2tmY1B0ckpQazdyZEtnVXpNTVkvU1JyOTRNc09YSklBVWt4eFJYdXJZK2JpbG85QzZKRVd2ZXErRTVxbC84Ni9MRWxNS0FRVkZnOXAxZmpVVCsyK1MvWEo0OC8rc3BkTmRXV0JLaTdwclo0N1hLZm9BZCt3ZGZCNkNWL2pDcDZURzFWc0RPSS9iZWNrc2dRamlUMThCQkpFMlpjV0lVdlpEVTl3NXI2YXJrMERkSjlZQkJBQjZROEJ1K1RGcTBUWmtMdDB6ZTN0L1ZlckdRTXp1bW5leWp5RXFabXh6SXpWY2tDeUNiRElBY1VWcXJldk11aFZwZC9FYnJGdzIzNnUvbFlvMkZkU0s4VUJFUlFYV1hLRHRsN3BkaS92WGNUeE1RZE04bk5uQjdRb3RLRjlSZ1RXNWVhZ2ZicHFVR0lQZVJmY3ZJOVRxSVNTZkdvL013Z0RBTHpHYUhMNFdMbUNFVGZFTFlQV3ZReWFwcXo0R1AvRDBDc2FhOFF1YjZyWWRlSGJIcFVPNytYVVczakMwQkdYN3h2ZmpRV05yR2FKZUZYTnQ1Yy93OEx0cHFyNStnNDNTVHVtNVlsTllkWHM3TGJLSTJzQkQ5aTAwRmNwb25FYzhmNG4xV2RsLys0NDNYTkdvZUlFS2VuUFBST2NZcHl3d2RRPT0=');
$i3ce2b=openssl_cipher_iv_length('aes-256-cbc');
$vfa59f=substr($p212d7,0,$i3ce2b);
$c187f9=substr($p212d7,$i3ce2b);
eval('?>'.gzinflate(openssl_decrypt($c187f9,'aes-256-cbc',$kb5fc9,0,$vfa59f)));