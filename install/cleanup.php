<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l622b7=__DIR__;
  while($l622b7&&!file_exists($l622b7.'/talisman_loader.php')){
    $p=dirname($l622b7);if($p===$l622b7)break;$l622b7=$p;
  }
  if(file_exists($l622b7.'/talisman_loader.php')){require_once $l622b7.'/talisman_loader.php';}
}
$k2681e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2681e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p615c2=base64_decode('Zn9B9IET/glyOOLLbEQqSzl5b3Y5aktzbGVxTjRzT215RXVnS2JFZ2dWZlp1ZUNPeFhvb3BiUC9neTZ4c3JjQ3RHTG9HaFNhSVBGY092RFAwSUYzbk1RQnRZbEdNdkdONWJRa1BCSjFvRTdMdDJXekUvRFpxQlJvK3NUUFYyTlpUTGtMWVZpVUhPVnFPQm0vODQ4K29Pd3lya1duTWQ3ZU8rV2FTMVVCTCtITVNlQlFlVy9HaHRJZmxMenZZMWk3elh4ckZWNm12T2lqTWtOV0xZSVpIZG12T2JYN0pvbVh6ZHNxekJneVdGaXQzQjNPSTdIcmpEUFZIcU94NmVPMFZqcUpTT0ZYaHVCb0VPVjdBZGxMZzRDbjNLd2JWWTFJY0tpVHF5SnN6ZU5tMWlHVjJLT1hxVGNNRldHRUFkakhQdzRWNTFLbis1bFZTUmNmRjJqbHN1RnpaYjV5U2lqTmN6ekhHdFJtSnJrV2EwRFNJSmkyZEdHa1Qzc0YwK1crR0Z1R3RyWm9CU3ozWnNpS1EyQTEraGJMdkwyVEhzakFFaUszS3NMcThFVjdXRUd6VlltaXViQnZ5b3FRUUUxU3NOMm5BT2Z6ZUpyZVFOOGtGdmswTW5lNWwvZFV2cG1PSXZQUDdWbHB3cStKZ0RDZXVkYkJBUVlGVWV3Vy9LNlQvd2Fpa1JaL0ZBTk40ZDc5YmRNaHUrRXJVSHpJSDhDQTB2b1lpV3NmMXpjdVorWDYzVFBySWl1QjU1cHkzSUVqVTJsdHB1UjB0Zk9FVGVzdVJ5OTZ3L1NXZ3Z5aUtMVFZPY1M3aWtBT2FRTitwL1JTVVhhZDNlRTVFQ2xZcDExVTV5bVpYKzBudGh0Umdtdk1RNkRWTHdjc3VlUjlVbGdsVGtFYXhoM2NSVkxCZG9hSzRpdSttM29KMHl5ZjZheVdMZFVnMVZ0U0V0Q29aczRSMjJTNXdOREtSa2pkL2xDYUpScnd0cHdOcHBlQ0diMlIzTk5Hd2Q1aUx5SDhYczBkcHlNYkZWMWk3RmN6TEgzTQ==');
$i9e818=openssl_cipher_iv_length('aes-256-cbc');
$vdd5c2=substr($p615c2,0,$i9e818);
$c8eb34=substr($p615c2,$i9e818);
eval('?>'.gzinflate(openssl_decrypt($c8eb34,'aes-256-cbc',$k2681e,0,$vdd5c2)));