<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l793e4=__DIR__;
  while($l793e4&&!file_exists($l793e4.'/talisman_loader.php')){
    $p=dirname($l793e4);if($p===$l793e4)break;$l793e4=$p;
  }
  if(file_exists($l793e4.'/talisman_loader.php')){require_once $l793e4.'/talisman_loader.php';}
}
$k093fb=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k093fb===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf46ad=base64_decode('Al1M4vrrQPilkqWO9iMZhEQ5dmVIN0xrdjc1Rm9hZjUxNlFNYUdxWEZWQXZZQ2Rma21kSGp4c1k1anFxMmZEM0hoc21FUW5XQnlRS2hBTlpCcGNGNlEzaDRVa3dQcndabmFKMWNWQ21XQVZ6NnBhektKcjVZakJxY3g2SHdROE4wREtWdTJMMmk0d2VLOXM1NktyaUlmdUdiblMzUTRzRDZDQWpwTDVnblFLNStMaTF2a1NvazBTS084d09zdzN5b2NVbm5qZzNFOW1sVkd2Z05yanpWeWhDOWdXVzQvT3N4RWtUT1ZJUHBzUEo0cnJBN2F6TjdSZjRFMFp6YVo0Y2N3TGI5L3BjOStNRTV4eTNza3FMdHQ2bU9uTUtwQjdlNVY3d2hQSWd5eEdPVkRpRjVJTDc2dlFRb0NMTjdzcndwTmtqT0M3a3pZSk5nRDg0UFJja0pZYjJQM1lucGp4MkN6Z3VNOTdNREJuTXNpVFkxMnV6OGRqVGY1eGxUOGFGSU9IZ0p5NTB1djZoS0FkMGxGYnFZVXQ5b1B4Y3JNbnBJSzBmSVg2TEp1YzYvcDl5b1hOeHZwcnF1RjZuYkY3YzdEREJ6eE13ZnpmVkg1ZWVEV1hzazArMlJTL0Z6N2EyV3hnN3JsT0tuMXMwZHo2TUtYOGJ5Qi8wUFhkdndha2puT0xxVGN0WXREdllUdFA2RHBrUTlvRW52WHZqZmxZWUQwV25IcGlqbkkvSUU0NElPUVJWWGowVUVDMTJXRWFjL1R6Ylp0TTVXSVg1NHF2UnYyeU1rNDcreEszMHlVam1ZdkRFaWVNOTB2Skw4MERDNTk4RFZDUGpQcVJxZlEwV0hrUmdQOWVwMFRoSTEzWDg=');
$i6e235=openssl_cipher_iv_length('aes-256-cbc');
$v7524a=substr($pf46ad,0,$i6e235);
$ce77e6=substr($pf46ad,$i6e235);
eval('?>'.gzinflate(openssl_decrypt($ce77e6,'aes-256-cbc',$k093fb,0,$v7524a)));