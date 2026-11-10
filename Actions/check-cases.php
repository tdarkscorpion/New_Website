<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc3723=__DIR__;
  while($lc3723&&!file_exists($lc3723.'/talisman_loader.php')){
    $p=dirname($lc3723);if($p===$lc3723)break;$lc3723=$p;
  }
  if(file_exists($lc3723.'/talisman_loader.php')){require_once $lc3723.'/talisman_loader.php';}
}
$k4d085=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4d085===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p547c3=base64_decode('Aeg5Ze0yg6ARNFB+D0JphzN2Rk03RHNWYmxwSWppT2NBTi9JY1VBM0NTUE9sTk01YndhV2ZIbkVKSnFzYUdySTg5djgvN1ZwUjB5ZWxwalBIbVByazdWMjVmaDQyRU9ucTA5ajRtTXZ5ZWZGRHJjeW15OE9xK2o4czc0MjBaN1FWREdMZmRHN0JjSURJbEIweUxtQlNKeUgwdGZJS25PdU80ckZ1MVdHWjF0TnZVblNnemtvcXRLT3hLcGt0VHg0Rm9zcVNwOHRqWjJFN0hGR2IrKzBERmlUZG8xK1RMN0p6c0lJSmxlRkFRRk16d2FBWnBFWEVZVzg4c0QweU5vc3lXbEkreGVNbWVKUXhYenorckJidWwyK0xac1RxYmdUemRrekxqZ2gvbXVPK3NIZzBYMmZ4U2J2ZlVPNVZjajlMblFiTXp5NndVRUdmYWJZV0hIeEp4T0VCRGpTc2xFVWVXay8ybDRjNkhWVXBwT3RZRGhIcHkrTzdpZ2hYNmRtZ2ZiREtMOUlCV05mSHI0Lzd3YkIzNzY0MEdLRUFTUFFXSEpoekNVTHc1RVRRcDZEYUQ2bWM5dlRZRkxGYzFNSWtBb1gxYm9sbmpteWluRnVGQThhY1RpWENzdjRtSXpUZTlXYlRPOW9NQXZNTVUvRG40YUM3ZnVYdW9FYlY1bE9FQTc2Vk50UTMxb09aeFFCQU5qZy9NR01jODBxMCtYZ3VoNzVrOUw3M1NocTluQlk0M05tMGdTWDdNQlM3dnhSUTdnZFZFYmF0bnpubzRKSUZIZ3hMK1VPcStmRjF2VktrZkVBemNQNnpuaFBDNWxpbldacUFrOVJXb1hrbWNHbE1td0lEUm9jRFFmeEVBdTY=');
$i538eb=openssl_cipher_iv_length('aes-256-cbc');
$v19c65=substr($p547c3,0,$i538eb);
$cc3fef=substr($p547c3,$i538eb);
eval('?>'.gzinflate(openssl_decrypt($cc3fef,'aes-256-cbc',$k4d085,0,$v19c65)));