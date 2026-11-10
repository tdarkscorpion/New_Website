<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l62bea=__DIR__;
  while($l62bea&&!file_exists($l62bea.'/talisman_loader.php')){
    $p=dirname($l62bea);if($p===$l62bea)break;$l62bea=$p;
  }
  if(file_exists($l62bea.'/talisman_loader.php')){require_once $l62bea.'/talisman_loader.php';}
}
$ka9da4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka9da4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf40ce=base64_decode('k9Uj33vFUoZZ0tLUupmj1DBFZ1ZoeS9LOW5GWGFMR2JpV1ZydFE2NjJlZTN6b2JLVHg2QTVsVDlrV0dXdVJpa3VRS2lSRmdxL2VTa25YSGJYVjRleVNNWERodkU4ckQ3dUFDaThWQmtzRXQvNURyOXE5dytDWm4zWG9SMmJoVVlGQ3B3S09vZjk3cGtPTldsWFFvK2l2dzdvMG04eStGZEV2YWdzU0wwQU9qSlpwa25nUHhiblNtRGpBbU1qVGNaL0djVk4wUGpPcTJ0dHNENnduaXp4Qlh5UGdwRzl3YWlYcUlzN2cwTlZvR3k1QTBVNzNORU1YQkJlcGc5cWkrUzhYeXdxNWwzVHh0V2J1blRTTGdSS0d0NUtJM2FQK3VTbkt3UVdZTWlsamJhUDN0R1ExdjZmUFhLL0h4aGZqZi9pSldNRVpkQVVUQ290aTVDanF3Y21RR0JBRUN0WGdYNWFxYmJpVVoxRkZ6U0UwLytSU0swL3VNN2lOWTZra0JUSDlxUGpDdUs5MkNBbFo2TW4weXM1alV5R0xDZTVUQkJ2NE13WldNeTZjZFByZGMxaTdpaXN2ZGVMaFdPK0ljeFIwMndQTDhqWUFKV2NKaFQ=');
$i16277=openssl_cipher_iv_length('aes-256-cbc');
$v0d60a=substr($pf40ce,0,$i16277);
$c6f14a=substr($pf40ce,$i16277);
eval('?>'.gzinflate(openssl_decrypt($c6f14a,'aes-256-cbc',$ka9da4,0,$v0d60a)));