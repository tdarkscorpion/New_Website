<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l15b65=__DIR__;
  while($l15b65&&!file_exists($l15b65.'/talisman_loader.php')){
    $p=dirname($l15b65);if($p===$l15b65)break;$l15b65=$p;
  }
  if(file_exists($l15b65.'/talisman_loader.php')){require_once $l15b65.'/talisman_loader.php';}
}
$k8a795=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8a795===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc0047=base64_decode('pYxyM44AhfzLTHQYf5r/M2w2Z1FRYUVUTEhMS0g0NXFlZEJ1RXUxaW9oc0VWYXBsc3l0UEhBMXRSbmxkS2NlTmRFQVkvVzVVemVHMVdCakVSQ0c2Y0F5Q09KN1pqQkoyZWU2bWhjRDhFVlZwWUtLVVpWSnBqck9VS0ZrNHMzb01tRkpuMXgxN1dRdmxjcEFoRmJRSzZHVi9nME8vTWhWY3pxbCtPd0dzT05LZzhROFVkdmhocmg0RitUUFV5bTUvclM3VGJqcDg2MjcyRUtRcE5DRWRyVSsrR3dLSnhGTHZ1d0M5RjFMU24rbkdzWGYreExWV3UzeFNRTHMyVVNPVlRub3BmY3ZLRDc0M1RxUkZIbEVnUUVUVWJtUEZjTENCR0lTZ2lLWXNkaVFIam1VN3Vyb1ExY3hPNGs5a1F4V1BGQ29qSjF2VkhCdzBZTFhvaW5UaWJWV1NXZXBHNG9ELzMxaWM3MEE1NTJ1QnM2aUdtVjg1MFJEeVlaZCtCT1M3MkVxcEx4U1NXWVVxY2todlNyYU5aRzUwSDc1NEt1MmtoQ1N0WUVWWUQzK29zbWkvcituOTE4c2kzZFpGUVFxSG1KS0NxNDJWTTdsQ1dodm4xZU1KdWxTRVNLZ3Q2ZjUvY3lFaUY3Ry9SelNtR25xNUx4bXdKaE41eFdMS3hIMXpHdG04OTFNeWlIdWpiK3drbHVsUXJTR0Zab2F6aVVDKzB2S0NLUUFBSnljaVFmeUVpYTBwYlpqTHZvcEpVTGJqdFFRekhYcW1IckJBa20zdGRFaDN6QkZ5d3R3L3QrQjNUSGxRRXd2NWwxWXI4R1oxUTR5dE12eHVNWWNvNlR5cDV1cEMwR1ljaUlhbStNa1oyTm9pY3IzbEJ2dFlWWjJYb2UwN2lRPT0=');
$i551f5=openssl_cipher_iv_length('aes-256-cbc');
$v87664=substr($pc0047,0,$i551f5);
$c67348=substr($pc0047,$i551f5);
eval('?>'.gzinflate(openssl_decrypt($c67348,'aes-256-cbc',$k8a795,0,$v87664)));