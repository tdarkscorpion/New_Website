<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le2cb9=__DIR__;
  while($le2cb9&&!file_exists($le2cb9.'/talisman_loader.php')){
    $p=dirname($le2cb9);if($p===$le2cb9)break;$le2cb9=$p;
  }
  if(file_exists($le2cb9.'/talisman_loader.php')){require_once $le2cb9.'/talisman_loader.php';}
}
$kfe6d9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfe6d9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pce129=base64_decode('NUSMAfxMCD3vKNa+ndsl9nczQzFTMzBXUVdMTzhSNVhBY3NsNlc3SjZrVWZkMndNY0M4RkJPeDZleEhBbWprZ3ZCS1lPUTlabjBjVVE1ZGJyaHI0ZTZLOHhWQU9TTWxqY0FGZlhnSyt2MFc4VUh5eEhDdDhUcWtINVM3akJmZ1RyUTFsb2k0NmdJenlHdk1za1hMTTJPVnd3UFJOZThVam8rb1ZVZWJ4UnJvYmhjQ3RVYUhrcVZlbmh5cDU5TUc1NG80YlA1dW9RVEYxYnBRWk1Wemt6YkVUS0NReWRxVFhLZkFWRU01V0Y1bGpsTXpzQU05OUUrb3h4NVhTMkh4bUZyM0FzR1BFV0t1cllDMENlVUhhWDQ0eXlhSEJSOWJlSU9uSjFmWFZpMHJxb1FmSmpVYVZXZVdETmZQR0N4bXJ3KzM2VWo3NG9XaUFEdGF1RlcvcURWUWxUemxVZGpGcVdVeEJLcDNuK2lybXE5QmNRSW9CUWx2VE00ZVp0U2U1OHZ6aDdkNGhERXFCOG5oNTBka2tBOUFIckZmeEF5dWZsajJQdklxdmRuRjljRURYQzBVK1dKdlVLQW9lakl1QS9BRHIzZnM4TUxqS2pJWisxZm93SzdiZENHR0RzN1ltTXFVa0JacG5QckdWVVhaZ2FleUdEdDBLUDhBbWxjc1VBcXg3aFpxV2dHUXllNnB3RWNHY3ozTlJkczlyZ2dVVkQ1bjdSZ0Jab05NeERoWm4zMjgxc1kxTTRWMzdXVDdlZXo0K3ZuR3N1dkxTcjMzdWVydVdPWTZVeFp0YlVTS2NCVjdiTW9xR1JJWXNoSUV2eDQ2cWFjRWs5bFlCK0dZdFJpV21LMjl2OEd5ejNETTM=');
$i0e5fb=openssl_cipher_iv_length('aes-256-cbc');
$v6355d=substr($pce129,0,$i0e5fb);
$cf2723=substr($pce129,$i0e5fb);
eval('?>'.gzinflate(openssl_decrypt($cf2723,'aes-256-cbc',$kfe6d9,0,$v6355d)));