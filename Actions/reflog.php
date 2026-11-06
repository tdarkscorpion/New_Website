<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ldfdb2=__DIR__;
  while($ldfdb2&&!file_exists($ldfdb2.'/talisman_loader.php')){
    $p=dirname($ldfdb2);if($p===$ldfdb2)break;$ldfdb2=$p;
  }
  if(file_exists($ldfdb2.'/talisman_loader.php')){require_once $ldfdb2.'/talisman_loader.php';}
}
$kc876e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc876e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p79fc4=base64_decode('UqbCXjv6UT2qCADPLwhgiTRsSDBzNUk0U3FXNDAwVHBldDZObzB6dk5pVkVUYjFCbGpaOG1TZ3NHcTZuNm0xb2pDa2VhK1dhdjVqY2RjMXB2SGJXTnBRbU51ZlYySFpONGhvNEJPWGN2V3V6cUd4TEpoc3NrZmZqYmpvOHYxTERNVXF5TFhMUGNkY1JKR0xHeGVSMVg2eFZiOHRhbm5jbkdIN2VScDNLNlJCZkxVWUV6RkgweHllZHU4NWxZSUErd0Q2T2VROHJmUnB6OFdURFhLMnpFUUZQcmgzV0ZJYW1KQkxQcERPQXcvSU0zUmZMUmVUeTYzUnpuUkUwQmxiZUl5NTVVOXIxMkYyTXBLSVB5Z3pvbVArbzhBWXNYeWhNREdiMkMzV2lOZXd5dU56MC9nUmRZY0lQd2tFVXRWaHhtWE1KeGo1R3lpL3NFdDlmVkRJSkdiQVJ5YUlqa0JPc0NDTE9NcVoxNmpIREpTcUZsVzRwdmVRTHc1blZWM0JLc3l3aEZrc0ZVaGEzS0R4bGw4aytNNmhVdWdRWnozbStER0xudFZFK1JGbU9qOE9Ib3N3cmw1WmlZWkk0R21YditXaU1ZVTJlUmg2cWFtRVJqMTlUa3d6YW44OFp0ajRPNlM0aVdEUEU2RWdlbG9yUSs2QTgwRHVkbURjSjlXYkh1MjRPTXV1RGU3TDh2NzNuak1xWDYwUkpFM293b1laM296UExwRXZnQlQwcUZYZ3hGNFJBdGxqT1FMYUZUa2JKSVc2aFFFQ0ltVHliRXNvZ0IzQUNXWkV4VzVraUg4S2NYMHBua3dDRDZvaEIyUS9TcXROaGE2cUE2dWNZRm9CYUk2VHNIMWtrVEtRQmI5ZUc=');
$i1a05d=openssl_cipher_iv_length('aes-256-cbc');
$v3a23c=substr($p79fc4,0,$i1a05d);
$ccafc9=substr($p79fc4,$i1a05d);
eval('?>'.gzinflate(openssl_decrypt($ccafc9,'aes-256-cbc',$kc876e,0,$v3a23c)));