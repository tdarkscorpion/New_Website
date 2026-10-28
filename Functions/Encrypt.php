<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le89ba=__DIR__;
  while($le89ba&&!file_exists($le89ba.'/talisman_loader.php')){
    $p=dirname($le89ba);if($p===$le89ba)break;$le89ba=$p;
  }
  if(file_exists($le89ba.'/talisman_loader.php')){require_once $le89ba.'/talisman_loader.php';}
}
$k0b8a3=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0b8a3===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdd642=base64_decode('QKdld4hdi2plIbkaPerKzjErVzdOOGdKbnRNTWVLY3krTGRjaEVKcWJCcTlQTmRSb2lEYXo4SGlORWR2NVc3cjJUZ2FPbkVmdno2TXBPVE1ibmpRakxIZzFRMGdid1RkRzdhODk3Nmt5TnNIU1Q5ZGJvbFJlYUlQdGtleWtzQU0vSk9ZaWRtWDZRUmZlTkpabVplbWxUTVBKTzJtM1h5Q05DbFVSOVdXa1FEamJIbjU1cE5RMG93czNnTkl0bmpxcEhFOXg0SkVpN1lya3pUbHhsTXVDMnhENjU1Uk1oOEZSWWdrTXQ5UFlkWnBwVXVCWnZhVjU4TUZKQkpubzhFYW5ibkdDOHduejhQNTViYVNLRnY4bCtFSlJDUk9zQlcvR0dOamZkaWZmMmNydDZ0U243MHVUTGJweC9tU3RISm9ndW8wblVQR0NwWnVIRlM0WWJzU3N5bStyQWhDRHpObTVZS1lyeUQ3eDFiZFMyd2JsS0Z0dW5ZQ2lxa3p3Rno2cHZqbG56YXpNTFBKaG80Tmh5MEtGYUhBQzdQS2I2V3JTUmpRTVI0dFFRblc3a251SnVMUjNCTURnOWNDTHNPY1l5OEgwbnVKTkZHSVlvRU8=');
$id3919=openssl_cipher_iv_length('aes-256-cbc');
$v6e130=substr($pdd642,0,$id3919);
$c6bf33=substr($pdd642,$id3919);
eval('?>'.gzinflate(openssl_decrypt($c6bf33,'aes-256-cbc',$k0b8a3,0,$v6e130)));