<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l613cd=__DIR__;
  while($l613cd&&!file_exists($l613cd.'/talisman_loader.php')){
    $p=dirname($l613cd);if($p===$l613cd)break;$l613cd=$p;
  }
  if(file_exists($l613cd.'/talisman_loader.php')){require_once $l613cd.'/talisman_loader.php';}
}
$k0c923=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0c923===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdcdec=base64_decode('RMrGL6oT/UhluKnI8wD2gGR4VUJ5WFByejM5ZitLYlJzOVdpWWxwakFPSVFmcVZ6S3lvb1A4N1BQOGFjME9vakMyMjV5SjdVdTVLTElRblhXSGRZaW5DWkErZTcxYnc4T0VlOXFmU3cyaWlOdmRKdVN3dEVkejBBZG1vSXgwaFdnK1dBUVFDcGh4OE1KaDc3dHoxdjh1YUI5NjI2bHhFdVVlN1VYRVRuNVc3T01FbnpzTnc1dGZQTW1zZVFxemkvcmhnb2Z3ck10eHh2aXJkeTFRTTZqcVFqdzA1M1NBRXp1SDA0b3dFZ3pNQzlPdjlOalgyL21neVg2K3BKenRhamdJdFJ4aXNTb05LYU1tQUF3T01PYno3ellRS3M3ZzZxdFQ2TDZLTktWaGVyeTUwdXdTazdnSlExTXpxTHVaQ2dmdEdlcEl6VDNPeWJvbnBzSVlFb3FHWW5BWTY2YmVUcGJteFlJT1NTZkdUQ3FxM1VxTlpRaE5HS2h0dlFzY1RKY2xZR01RYUp1UEVBNFMzNFp2QXZWVG45ZVpQell3SHNjZFlIUWlUTlFzTEJGNU9MWE5Kb2FTYlBLbEVqNndGVWVyTHJQZittNUdUOTRSNEJXSzEwSmxTczF2RjJvWm4yR1Jackp3LzNpL1VsVTlpTG42c1Z4eFo1Qm1qL2pibzZVTEdveWcwWlpGWVJTekdZc3o1NWkwY2tlTExwNURzWXZzejJaT1hDRk9abmhoNjNzLy83QXY5UEMxblJPSVo5Q2pFOXB6L3hPZVRZUVlmSlA1NlRxVFVZc3BocUZ1QTZBbXI4UTE2eWh5SlVnOHQ3ZWhSSVN2WVJaeGhPUW8vbFpsNU83cC9XZEJxaStsVzc=');
$i5eba5=openssl_cipher_iv_length('aes-256-cbc');
$va3908=substr($pdcdec,0,$i5eba5);
$c2f386=substr($pdcdec,$i5eba5);
eval('?>'.gzinflate(openssl_decrypt($c2f386,'aes-256-cbc',$k0c923,0,$va3908)));