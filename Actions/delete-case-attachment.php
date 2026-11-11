<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfbb28=__DIR__;
  while($lfbb28&&!file_exists($lfbb28.'/talisman_loader.php')){
    $p=dirname($lfbb28);if($p===$lfbb28)break;$lfbb28=$p;
  }
  if(file_exists($lfbb28.'/talisman_loader.php')){require_once $lfbb28.'/talisman_loader.php';}
}
$k1739c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1739c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa95d7=base64_decode('e5A1JAIFolP37w0nlLxZi0FwZ2h1RktOSGIxalJQMVFYcFk0bmNIWkhQc3gyWHdiN2hmT3FtajVtSDR1SGpkWmFpVjZheUlSQmhKSWpnUVBpVlVBK0xTL0JPdVI5a25vK1l5Q3NWYUZwbnZvQ3o5YTQ1OVUrd1IySDQyZTRGOUVVLy9lOWxMbDFwam1YbXJCNDVZcVp2eGFoVzkwUFpzSWZBWjNQL1N2enFnMlloa0JDRkpVQWQ0MjE5cGptdmlENVVNMVQxdlVudFJyV2k3N09rRUIzNDRGVW0vZHZneUEyRVh6U29sbFlMSkovSE9wSnFFT0k0Tk5oQTBTN0M3UCtoMmVNRlhhUW9tVFpKa2lNQ1NTb3cxenVOQVQ0cld1TVo1ZUJlbWlrQzNzZTYzbWpPeEdIaDFXWjVuNEFFVEwzZFhLaUhOM0taTDd4WFha');
$i76edc=openssl_cipher_iv_length('aes-256-cbc');
$v976bc=substr($pa95d7,0,$i76edc);
$c0cfe7=substr($pa95d7,$i76edc);
eval('?>'.gzinflate(openssl_decrypt($c0cfe7,'aes-256-cbc',$k1739c,0,$v976bc)));