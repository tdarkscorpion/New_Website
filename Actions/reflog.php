<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la876c=__DIR__;
  while($la876c&&!file_exists($la876c.'/talisman_loader.php')){
    $p=dirname($la876c);if($p===$la876c)break;$la876c=$p;
  }
  if(file_exists($la876c.'/talisman_loader.php')){require_once $la876c.'/talisman_loader.php';}
}
$k30c5b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k30c5b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p959b4=base64_decode('cr9XGoMeLxtNGh0AUvTEWi9UY01adERBcUtESktnemdJUHR2Y3FPRmRuVXlhNS9RRFV3eVhaM3NBNlhPOHg2MmVVYnJyRVhQYVJsRTZjMFppWDZSTXJVM1h1QlFIVG1QRElScS8xNTVWSm1aOE1hTStNNmRBazZnTUUxOU4yUU9TNVNzMWdVcDc4czV0REFVSDJDai94d1Bza0ZzS2ZEUnVmZGhrVWxwakhQWGNwR2lJSG1VYmhWR2hWWlVFYjV2anh3dG1UM2JiSVF5S2R0VUU0YTYzdmZnVEtvU2VsNWUwSko3b2pIVWZTQ0R1MHZkYXJkVWpTYUZlWWJ4VVNhU1RiN1RoTFBmSmlHMEZrT1JIN00wMUR3ellPaE9IdGNGMWduY2N1cU5YbXp3bnB6dnBiaVZrR01pOWZrdnBWNjltNlBmU0UwNWdKRk4wYWRyVVR0ZTgwRU41QkUvUmRMcW8xT241Mng4Q05mVis2d1Q0RVpxRDNtTHhwVWozRE1jaFliTEVmb0JpUE04NDkzV3FHSzg1OXR6VStSQ3BqQ1F2emx4SXhPS3RTU2FHenZPbVJ0RGVqVTFSdWZ2UnhTUmVlN2l0N0pTazVKSjFicWcvSy9LSzJ0V0NlbXFHODFJZnYrOUhKd0Y4c081RGh1Mm93M0JkSkd4b25LY0MvL1Q4ekFqbW83ckoyaXVxRVBuM24zWllNU3YxSFFkSHBJYTV1SmxLanlRQ3FwSzhmOGZTRGtPN3lsREhiMkVjSE1Va0ZObmtMVHhES2xEQThudktjRlRYZHJKZkxvd1RJWFEyenIxQ3FrMCsxMGpmL0pTRytnUGFtNXpiZG1ZRGdNdHpSMTJ6MnBOYlhEUUFGcEY=');
$ib88b7=openssl_cipher_iv_length('aes-256-cbc');
$v46f8b=substr($p959b4,0,$ib88b7);
$cf82d8=substr($p959b4,$ib88b7);
eval('?>'.gzinflate(openssl_decrypt($cf82d8,'aes-256-cbc',$k30c5b,0,$v46f8b)));