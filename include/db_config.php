<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3fee3=__DIR__;
  while($l3fee3&&!file_exists($l3fee3.'/talisman_loader.php')){
    $p=dirname($l3fee3);if($p===$l3fee3)break;$l3fee3=$p;
  }
  if(file_exists($l3fee3.'/talisman_loader.php')){require_once $l3fee3.'/talisman_loader.php';}
}
$kb553e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb553e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4fc9b=base64_decode('s7kIxBSfWdilcmBYXZbx2lNwREVNblN1Qm0xN0RpMkYybzIrWDdPK0tJTGFkN0w2bUFPVU9jeXR1Y21iMFlOU3Y5aHJpK0xPa09PdDR5NW10SHRLSUR5RFNjblRVQ3dzRlpJY1lYQ21XV0xoRmkxLzdjaUxlK2tFd1FrSllSWmJrYWE4enpJeUhCZE5TNzdUbVhUMHJTWVhZdlJVNStJRjJabGtuUGQwRHlHSStTVWs1c0RtTjAvVmdUZWtGcE9tWmkrY0R4ZjJWUEhrK2FTbTdhelRVeGFsZUU2d0x4djdudGppckNna0NWMTVWanVveVNSYUJkK1o5cXNLU1ZCVlh0ZDdhb3pBVG4xN1hSYWYzY1pEdXpzVUNVUTNjN0l2SzEyMDVVc1FqRmh1dzFORFZ5VnpnMjRrYU9BdkVmUnpCQThPTUxVNzR0Vk85QTJJMmFhOGtYakNZTTd6eHRDazMwc01wK2pHeTduTUxjQUJnd3ArS2FRRXByc0FzWmV1dXIvTDR1UEQrNmdIRHJmUE5OeFVGR2F5STZoRkxhaDlKOUQzMDM4cmNlZ2ExOG9JNCttVlFQODFWemlWZldMUG51bkR3RU95d0tqV2hzTHJmeWV4cVNzS01MdThZSllUY0dSdG5MVks1Wm8yaXZ5NHN4ZWJlNHJoRE9zOS8xOTR2aUJvTkQ1NXpETHlJaEIxYk52ZUVWOVBPL0t4RWJDSGlVU3ZvYkFHMGo3Rm8yR0FCK05jMVRsdWRUMDlYRHVNYVZaZVVGV0M5c2w4YS9YRzFJMzJBUjhnbDM4QlU1TDNQNHRNUWV4M000a1ZPWTNtL1kzcGFOenlacjZReDhwaUJGa2I1MlpiTTlOMmlya3BtcGlrcDF6VWtMTDYwajdGeHRUMFFOUGs1WWxtWW1zQXVDZENNeFhaVW5DOFFmOHJvTkR1Wm9YWWhrWkZrb2hYVzQwYkxLSmZtRU1relFjVGtvUmc3TUc4NkpZU0tUR3NyeEhmb3I0bS91bFVIVStrc25QRjlvSEdxVmVGR3d5NzV5Skc0a2ljWUpvRUd6Tzg2QlNnWHpjVy82MnVJWUlkaWJMaG1oS2szdjBxZ3Jac3JKMHBTOFdEWDBFcER2MmhrdEdLRjBXNVM5amF5MzJKbzZlNFdWUFpEWHBkRmRBUHl1TUh2TDlGeHlsVTcxTDhJY0VTZW1nWXNqVzRqMUgwNFBzVXl5NUowRlZCZTQ4L21hVlZpZz09');
$i4a69c=openssl_cipher_iv_length('aes-256-cbc');
$v5c7c9=substr($p4fc9b,0,$i4a69c);
$c98025=substr($p4fc9b,$i4a69c);
eval('?>'.gzinflate(openssl_decrypt($c98025,'aes-256-cbc',$kb553e,0,$v5c7c9)));