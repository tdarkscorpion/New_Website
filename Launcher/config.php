<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc803f=__DIR__;
  while($lc803f&&!file_exists($lc803f.'/talisman_loader.php')){
    $p=dirname($lc803f);if($p===$lc803f)break;$lc803f=$p;
  }
  if(file_exists($lc803f.'/talisman_loader.php')){require_once $lc803f.'/talisman_loader.php';}
}
$k08cec=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k08cec===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p393f1=base64_decode('ObLz0Nn07fiAfKr4VWw7NjlpSk9VL1hpSTE0bHh5aGducHBHMjdrUVJ4Q0svcXBLMWNDbDFWT1NZbzUvNFJySFZzYjBna3ZPTU12dzFOWWxmMURBYWwveTVMdU56QUhsaTNOYzRWSi9ZYitGZU9wUmhNRlVHdTVKa0VqdzByUmF2alZrTUVCOTA2VDY2NEUwUlZHOG90Mm4yZ0o4NUszVVZ1OEZEdUpJdkFteEpGVkdPTmFETU5TNW5mcUFvcmF2aGVTVHJOVXdVYXJYdmR2Mmo1WUM3TzgwYk42eHFkQ082RWE4Sk1KdzVYUVdhT3MwMjJidVpib0pYdmdIeDArRERzWW0xMGMwOVdCMXZjcm90dGJTWVdEblkyNzNMYzZtbmJzZ01ydzZuUmk0ODNIZ3BidElubmtoNkc0PQ==');
$i4c8af=openssl_cipher_iv_length('aes-256-cbc');
$vfaf11=substr($p393f1,0,$i4c8af);
$ca0d52=substr($p393f1,$i4c8af);
eval('?>'.gzinflate(openssl_decrypt($ca0d52,'aes-256-cbc',$k08cec,0,$vfaf11)));