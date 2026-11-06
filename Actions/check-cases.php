<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l87139=__DIR__;
  while($l87139&&!file_exists($l87139.'/talisman_loader.php')){
    $p=dirname($l87139);if($p===$l87139)break;$l87139=$p;
  }
  if(file_exists($l87139.'/talisman_loader.php')){require_once $l87139.'/talisman_loader.php';}
}
$kda6dc=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kda6dc===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcf397=base64_decode('DeV9/2M9OCSrhYhULoD3LlcwL0RUZllPUFMrc3NzMkkreGdVeForcnpkaWV5N3kxZmlDdlVZTEJwZ3M3bExZOGlSWVU2RjJucFlBMUd5bU15akR0V2hnQ1Fiem1ORFBTNDgxbUE4K1BMQ29WR2dkUXNOYzNwUVJjMXcvMUhIUUQxNTE2RVMxcTdBR2k2RWZlZGYxN0g5QjVwdlBjWG04ZWduVUpxcGJZQmZhYzdoWmZqekFzbUJDVGtLUUdDZlc5azBPcE4rL0t6bnFsdk02eDJBbWF0QjZCSDhJd0tLVEV2bFRsS0N1ZWcrUDBId2txaVhORSt2elBFMmloYjVGVE55SGVOYzRJNjI5dmRQZ3lMVWF2azFYR1hySEZrd1VXZUJqcjhuQmJaUXE0TWdRVWwweTJmMXhrOHBJSHNEMGdxZkMybitqMnJ4UUdsMXVTWkM2Ynp6Tzc5ZzRROEIreGJVSU5teVNJb01yR1FZSHZJeTd0STVhd21BN3hwbC95YXhzbUF4dnBuQ0p6Z1p5eXRNUHFKb1JaZjU3MDhTR3VPaUd4b2VoOVhZVVlQVi9OeVArL3ZkbnM4Q3hrQ3llcWJad3FVenBQM2VYY0ZmM09PbjNlRWQxdUZoQ0FFTmdRVWc4Rnhmekw3RnArQlIrWnphSzcyaXZCTU5CWFJtNWFrYkovUVFLdzB2YmYyZHM3SkR1WDVYMThLWGkyK2N6bnM1QnpXdll5Z054WTJ4K0F6a0pEUTg0M3NNbyt0OGZrdzhodXNLTXJwM1YreG1TS2pidGcrWDZhb3BSclN3R0RzMGRrWkNucCtyVjR2YTl6c1lFelNNbFg2SUZqclZoaTJma1l2eHI1Sm41K3g4bUs=');
$i39921=openssl_cipher_iv_length('aes-256-cbc');
$v4b5ef=substr($pcf397,0,$i39921);
$cb69da=substr($pcf397,$i39921);
eval('?>'.gzinflate(openssl_decrypt($cb69da,'aes-256-cbc',$kda6dc,0,$v4b5ef)));