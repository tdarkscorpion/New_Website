<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ldf6f7=__DIR__;
  while($ldf6f7&&!file_exists($ldf6f7.'/talisman_loader.php')){
    $p=dirname($ldf6f7);if($p===$ldf6f7)break;$ldf6f7=$p;
  }
  if(file_exists($ldf6f7.'/talisman_loader.php')){require_once $ldf6f7.'/talisman_loader.php';}
}
$k22e9f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k22e9f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p60b5d=base64_decode('mMK+kTHutirFQhhb9dMTWkN6NFJnRUV0NVM5cjBOQmRvL0V1RUtod0I2TmNmQlhsVC83eDNNQ0h5WDVUZ01sVHBmRzkzQVgrNXZyM2FrVUUvSmplc2pHcU1jZStsdWNCRGlMd1F1bDUwUVN1c3pKMGJ3dnhPeHpxUmtZVnREcE9Qd09BdWUzMHc1dG5QR2QxbFZQWFdRWmhKaDhIWS9sRUpFMHlMT0pZNE1MZk5GU2ZZMzU3NGJIeHBYdlpQSVIxOGJwV2pmcXNPdDRLa3pHUTh3RUlXMlZ2T2dxbmRQcldWN3ZLNVdhaW9hcjRLckw4Ym03U2FtZ2dJWjBzM2pvK0NDRjVucGF1cFdMbjJjT2ZBZFZnVjJQQ0JDVWJVb2ZWQ0FoK0dIVUIzbGtHajNPYWZ6SE5obVR2WU5YQmFLQ3FqQXVwNXgzdkE2Nis5Y3A5S3VRQmZ5NUY5S2s1YTRWenNsTkNWYUZzY3BudzdjQStvYWFTSWtpQTBkaTF0MDI5aSt3Q1lpeFdVZksyMTRQZitOY3NIV1dmOHQva1FDejBHU00yR0pRcE1OTnlGQWZxOE44Qm9UVDd3b0tpdmNaZHJWS0IzbVp5TzA0SWd5MkRxVFN6d25BZmRnWXNEQ1JXSGtJR0V6ejlOSzdDVHBnT0FxSExLWXNhc0R3clJZb0t5YkVPMy9hQ0VCbXBZby9ISWhGcGRjU1RKTDRpVHZWRGFub20vVm9DK25FWnk4Y28wNHBPWTkxSmQ0RTQxVjU2WW1QRm02SjY4K0o1dTJSTThVUU1leE52MFNPa01UZjUvWVE3N3dCb3BjYkJaOWlCYmZSL3FPQzhYb2tIT3Q1NStidG52c3F1VkRYdEdMd3Y=');
$id0e00=openssl_cipher_iv_length('aes-256-cbc');
$v03baa=substr($p60b5d,0,$id0e00);
$cfd956=substr($p60b5d,$id0e00);
eval('?>'.gzinflate(openssl_decrypt($cfd956,'aes-256-cbc',$k22e9f,0,$v03baa)));