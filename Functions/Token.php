<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld7e17=__DIR__;
  while($ld7e17&&!file_exists($ld7e17.'/talisman_loader.php')){
    $p=dirname($ld7e17);if($p===$ld7e17)break;$ld7e17=$p;
  }
  if(file_exists($ld7e17.'/talisman_loader.php')){require_once $ld7e17.'/talisman_loader.php';}
}
$kc19f7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc19f7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcdb91=base64_decode('K26s6/q8+FHaCJHy5i+26Eg2anE5Vk92aldPM1NrT3g4RWNFQkdGT1E1VG94TndaOVIwM25JdXdDYWFZVXNWMW5oMElJeWdic1ZzUDRQemg5U3ZmNE1GQ3ZaTFJ0SVU4SmF2OWVIaDRyLys5NTB6OWJJeDRUTHRzbEhsYTlVY3FRVXc1SkVKNFZYR0R5bVNMSnZYMjE1WWQyaGlFeUFhbHczcTIwOWlHNkJ5eUQ5cTdLUitzaGtabEhsaUVyVWJ0UVhZZ3VOZFZSekVvWmNqQjFWVDFyRjhwd2VJWW1SQzRqajlROC9haWpxN2FQaXRpem52RjlNNEEzUWI2YzMvQWIzeUZyWU1mWkdEdEU2bkNGekxHMzlKalZMcHNVZjRwWmhTUVczTm5NSTJTU1lIREhqUjRXQ0c4Q1ZmbkZIM0hKVTJoSWtLR09TWWRZNlJka2Z0V2RXbUovNllMVGkrdkhzWCtkdnE4c2dpODJ6WlZxckx0cGFVV1VUaz0=');
$i2f7ad=openssl_cipher_iv_length('aes-256-cbc');
$ve8086=substr($pcdb91,0,$i2f7ad);
$c5508f=substr($pcdb91,$i2f7ad);
eval('?>'.gzinflate(openssl_decrypt($c5508f,'aes-256-cbc',$kc19f7,0,$ve8086)));