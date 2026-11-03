<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5de3b=__DIR__;
  while($l5de3b&&!file_exists($l5de3b.'/talisman_loader.php')){
    $p=dirname($l5de3b);if($p===$l5de3b)break;$l5de3b=$p;
  }
  if(file_exists($l5de3b.'/talisman_loader.php')){require_once $l5de3b.'/talisman_loader.php';}
}
$kb803c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb803c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p53f1c=base64_decode('I6ahQLoP7Yx3akarZC27WlFKTlR2NWRaR2Z1VG96Q1lFRkprNU9XRGpkRXMzdHAxY3pTSmsrcjg0WWZYQjdEOFBaVEIvV3Npb25iSzM3RXhzcDJSZlVqY051WGFlb3NWOGw2ZU5sQWdidnZacjRUWVFhc3VOMmlXUlc0Y3dXYTJnWWxnY251OTJDajBUekp5eE5xOUgzN25jcmE5QzBXVFVGR0JhM2dhWmpUdkRhRWJvcFU1SFA4dVh0ZldDczY2U25GTjhOL2tpRW1iZXMrU2JUT3VkSlMzK05HUDZBNzg2T2tQUTRlZ29FeVUvZURYa2dlS3o4d2s2eGtNV3puZkpLd1B5N0NKVWU2TUt2RmtiYmNRWFQyQXlVTHRXcDA5ZEFTdWdTZ09qRE9PazNQdldLSlFQWmxrTzEva09sVEZjaEFjREVoRXMvYnUxeTZXQ2NNV0d5T1h6anFYVEtLdlRiZ242NjE3M0lIQzNES0tHcFNZbHNZaWUya2ZKUEZ4dGduUjZCY1ZDekJ1UDk1Vks5NUVsK2RDdFZzdmlYRlllZ0d6L21SR0lMQy9HSkMrd1V0c1pLaVRMNGpUN2JjRzMwMm1ob2xOdmNSNWJETzVHUythenc2Rlpjd1ZhUFAvZk5yQmpBdldqaDB5Qk1hL0FGK3gxakdkOFFKTXZnRi8wT25yQ0NBL3N3M21hUUVaYnRwYXdjTkh1UGMvNG13VG5ZUkhmKzhjMjBKUUs5TWVrc2FIWFJZbWNFVzYwZ2p5ajhJVUlGYjdKTWl0eW15MkhHdWpkQ1pKWmtXTDRXdGoydXhlYVE9PQ==');
$i55e2f=openssl_cipher_iv_length('aes-256-cbc');
$v9b6d1=substr($p53f1c,0,$i55e2f);
$c702b9=substr($p53f1c,$i55e2f);
eval('?>'.gzinflate(openssl_decrypt($c702b9,'aes-256-cbc',$kb803c,0,$v9b6d1)));