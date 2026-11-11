<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0b704=__DIR__;
  while($l0b704&&!file_exists($l0b704.'/talisman_loader.php')){
    $p=dirname($l0b704);if($p===$l0b704)break;$l0b704=$p;
  }
  if(file_exists($l0b704.'/talisman_loader.php')){require_once $l0b704.'/talisman_loader.php';}
}
$k155d3=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k155d3===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9c7da=base64_decode('AhQ+aCcJxZROIK2MJWyRXHpySk14M1dCeDBhanJkY2x4UkFHM25jK0RKY0t2Q3VtWndUSDBDRWowK1g4MkJjeW9rOC9zSWV1ZUxZTDBuc1RtQ2xwMDFjMkYrSXpJSVJ3RjRoSE11M2FTNmJGMUNjNTdVVTRUOXBDM0NwRzduT3JteVVhM1g4d3NSdHp6YmNDYVRGa3dXT0tLWU5oOXEvSkxVWXpuTkZDc3JGT05xc1M2YzdUa09EWmUyVWRkWjRrcFkyekhRWjA4ZmRQS2RCMXJKalNlRkRjY0hHS3JUUnFycDNvWFpyUlBBSTkyODhYcEp4cllKTkhpNndmVkoxOWprc2FvVlFHcWJaSTExbzlDS3I2dkZjbnhFS0ZHMi9RaFF2bXJwWE03aVZCb1BjSk0yQ25XMDVEZ3MrT2dUdVplU3VtMXJLQ0JEek9CU2dLTVoxcFRZQXI3emZvaFhzYkE4YTF6QUNtbWl2amdQQVJVVVRyZ3YzUCsvST0=');
$i19250=openssl_cipher_iv_length('aes-256-cbc');
$v0c67e=substr($p9c7da,0,$i19250);
$c792ec=substr($p9c7da,$i19250);
eval('?>'.gzinflate(openssl_decrypt($c792ec,'aes-256-cbc',$k155d3,0,$v0c67e)));