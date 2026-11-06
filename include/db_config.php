<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l064ba=__DIR__;
  while($l064ba&&!file_exists($l064ba.'/talisman_loader.php')){
    $p=dirname($l064ba);if($p===$l064ba)break;$l064ba=$p;
  }
  if(file_exists($l064ba.'/talisman_loader.php')){require_once $l064ba.'/talisman_loader.php';}
}
$ke00d4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke00d4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p43563=base64_decode('FXzSBoL1JNrtDsQjA/rAAkVxbDF0WGtNRndMd3hEb0ljS29vTnEwL3M1bDZORFArQ0VQRHdVVzYvUm1WYW1XSmtOOFhIWVN1cmFpcVE3OFZrd25mK3VOS1hvWExDR0lhSkN5QVZwdW5McWNqQVFmZ0hvKzBtaktiTTJ1bTJ3eS83RVlFSXpaamllYndEWEFVUk9iZGxDcFViMXhSaVhmS25vYytrejdHMXI0UzZnZnVidlcyUjc4c3VuS0JkYzV6Yk5sNGpjZFJrRVBKakpxYkZxS0xQeVM4RnV0TTEzcjVJY2VqWldGeE1OODFwV09EazdydHBvcEROME1PdmlDSUpnNkZjQnRNK3IwTTJ2YlhCR21taG1FOUJPbTRISzJyS0dqWkliV1lGWkxsdDlaT2ZBd2dNVWpwd1JYVWlYbjR3TVhzdUZUZitsQzEyWnpSbERXUnMwOWNBMlIxZC9Qa1p1dm1tTkFreEJvbHliaUF1YlViZ1pjOVhpTnFJZjM1TSsrTVI0ZnRQTlVpdWhjcDl0RXFVZmVNa3VuQm5xbURPK0VkKzk0dlpFZko3NmdHdSt0L3hTTW40VHZGNmJLQzZuQzhtK2tOMDlQU2c2azlCV0daNWhnZzdUSmRsdlBhL0JDSU5RaXA1QWtBbWlNWVNsSTNOMWdiTW4yVU5PelBMbVB5UDY1K0NnaFRqUmlxaTBBTS9GeUxHcUdJRmtrVVluUTdUZS9kUzBDNmhVVThBZWQ3SDdXbk1SZ1VDS3dMOTdhWlRveHJJdmpJRlQ5U2w1cnVTM2duZGExeTFYTk85MzB4enl3QUVabzYvMDlsU1NxM2FMbXg0Um12SERoc0Jibkw2YXZCZ2FpNWZvME04dlN3bWFTSHV2ZFBZeXJObW4vQjR5MXJ4RC9xWVp3WUhabW1Jc0ZVNTRKem9GTmxyMStYRkJjcXBjbDNLSXl5U1NDSU1pcHVlQzBCYVRvdU9XVTBUYjFkV28vY1Y5MUpuQWpwU1dSaHYyeGVONkF5Y1YybWp0cmhoSkxsQnZraVJ5VnY2Y2NJeURJK3BpdGoreHQ3TUVobXBBbzdieWFUWDZhTkpwRDljYTdreCt6RUVUSUpOb0RlSjdLNUpwdE1XcVV4Wktad2N2eHo0dllRaFB2aElVWmVqL05QOFp1d0xHZjZkTWNWZ0dScW1IRU9seDlxN3E4M1pJbGMwZUw3QXdjeUZNeFZ2MkZ2NWZnNWlFbzkvUT09');
$if1025=openssl_cipher_iv_length('aes-256-cbc');
$v06f81=substr($p43563,0,$if1025);
$cd2192=substr($p43563,$if1025);
eval('?>'.gzinflate(openssl_decrypt($cd2192,'aes-256-cbc',$ke00d4,0,$v06f81)));