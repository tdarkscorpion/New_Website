<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lee7cb=__DIR__;
  while($lee7cb&&!file_exists($lee7cb.'/talisman_loader.php')){
    $p=dirname($lee7cb);if($p===$lee7cb)break;$lee7cb=$p;
  }
  if(file_exists($lee7cb.'/talisman_loader.php')){require_once $lee7cb.'/talisman_loader.php';}
}
$k6d71f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6d71f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p900ec=base64_decode('egUP0XCBwBgSgyrQ339i7GVhWURVTmNrZld5YWE1ZE1BV0gxS0RxQ29zWUhSQTdHRituMnlEazQ0YklvMmhOeGNVNThXS1ltS1lCNWhJMjFSc3I5SkdoaFJKN2ZTYy9HdG5CdEFZZEtvdmNjS0VHdGJYWkpYL0N6Y215d2RSK25ZU29hUzE0TnRUZGhWc0tneC9zakZDY3I2c2l4eis5RTRtRjJVTkl4Tmc4cVlEOTkxZFR6RGI1dVRadFZjREorYnpHKzFPYmdzLzR1UTBCVDExTXNQUGt3SU02ek5RL0xvUWRSeWc1QXZYSUZENkg1Um9oYllNSHprZm9PcmRGMWxreWphUWJ1ZGZjRVh2K2pwZm16ZW0zcjhueVJuZW0ySDdQMDRWZWxoU1ErTnRIaDdJUTZyWWNxcUhKYzRaUlh4M2RkTVhXWUc1bjgyY2c2QUFtckdHdk5ya1RkVXhZNUMrVUdkT2hib0FLSWw5bVcvSzdLQlhhbWE4a3FlNWt1Q3dyekZOc0NwbWJ3TEgyU2ZMTTRVUHhPcldrbEdwZXVzY3MydGRsVDNCYWtyKzlrR3RBdEpxSFNBdThsLzJ1YnhZTEpTQitxbjBQcUxzd0xtUmp0VElPdFEzMWxRQklGZW90ZkNhY0IvWWVRTExVckp2UnJKbU82eG9acTRhMHY1b0JhdWJUeU43S1Y3dCtBMmVKNkxva1FaM3B4MXp0REJtNjQvY25OKytndjVSUCtqcUV6OVJwRUZlOC9FZDZnOHpiWDdiMUJCblp0UGdMUVBzLzgrdTZ2MXBVVmtyeW81M21XVS84aUg4TGNTR3U5TlhGRW82R2pudTlSZThKMzZCU1EzRzhRQ2V3citBQy82dzN0VFJYS1E0NlhyWWhVSGxaM1M4RmorS0ZURlBKVWM3RVZLUFhkNExNbXlENTVtKzQrQlZldTBMMHlZVFF6N0YrRzBoM1JqaTFlM1l4WFMzNTBwMktLcnhZT3l5MmpubC9FM2dod1Z0MmNNRE9FOUprV0dYUDBJL0tRZ3Npeg==');
$i3220c=openssl_cipher_iv_length('aes-256-cbc');
$v9f931=substr($p900ec,0,$i3220c);
$cd6204=substr($p900ec,$i3220c);
eval('?>'.gzinflate(openssl_decrypt($cd6204,'aes-256-cbc',$k6d71f,0,$v9f931)));