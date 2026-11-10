<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc7798=__DIR__;
  while($lc7798&&!file_exists($lc7798.'/talisman_loader.php')){
    $p=dirname($lc7798);if($p===$lc7798)break;$lc7798=$p;
  }
  if(file_exists($lc7798.'/talisman_loader.php')){require_once $lc7798.'/talisman_loader.php';}
}
$keefed=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($keefed===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7b591=base64_decode('HmfOzve5HgYXEAL0sz4fZFAvM1RTZTJSbzFxaXlSRW55SXl4SmlkRXNVd0ROckVoZFFDM2cwekI5ME9IL0ZUaTYrSHlFYW1GREVuMDFBdkZHdFBkdGRheFJNTnVjNWpBdnFPQkxjWkQ4bHl1TTEzbFhjS0VjZzNTV1M0Mm1OMnRYZEZGME1yUloyamZiTWs3NXdPVnhCSTVvR210YUNCOExpTW1iK01EVWViTGR5eU84clN0NjBlZTZMODQrVlU0UWc5ZGhCcEU3UVNaWUxndkhPdHJpc3RFTnErN1lPeldlRlVZNW5wMXlUREVVODkrOHlBQkJZK2dNK0c2dFVUTkVTZjRwcXJxNGltQVFhMTV3WFBsZ0JjTTFqZWlBaTRzbVhudkxIdmsxVWg2WUF1SktraDVTU25taU56V1hYODlrMWs4eThqUFdzdGUzaFJad1VJdXZWWjcrc1R6ZGhqTjVWZkxMTVVoRWxlc0RRS0puVzNHTUpLSUdlckZpN0xnYmlpSzAwdUhKUFNHQUpJblhzaDNQMjBIMU4vNTduZk9jS1Y5YTB5TjYvNU1HdE5ScEkvbHRGM3ZuYnVUeTZSS3Z4RDQvVUpmOTZjU3hrdndIdzZFN1R4ZjdtWm9WSVk2MHRqMkVyVXhtNS9EeC9jNkNVYjVHSFVYUyt6RFhwaGhvU2d5ZFhvSkFvK0xPQzNjb0RaZ3ZpUHFXVnM3WjUzRXRiQWU1OCtsNEZNdHVvdTZMT2puTFhUdWhNT3cvWXllNEprRVR0MEpFREVXaitrcEoxaituWHY4cE9HbHc2QnNENkVHcGloY0x3cVIxS0lKQTVPT0RWMkEvV2RpclV3YktyVTFiMjE2dXNPM1FDdGs=');
$i135cf=openssl_cipher_iv_length('aes-256-cbc');
$v835e1=substr($p7b591,0,$i135cf);
$c5cf5d=substr($p7b591,$i135cf);
eval('?>'.gzinflate(openssl_decrypt($c5cf5d,'aes-256-cbc',$keefed,0,$v835e1)));