<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfa362=__DIR__;
  while($lfa362&&!file_exists($lfa362.'/talisman_loader.php')){
    $p=dirname($lfa362);if($p===$lfa362)break;$lfa362=$p;
  }
  if(file_exists($lfa362.'/talisman_loader.php')){require_once $lfa362.'/talisman_loader.php';}
}
$ke4b83=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke4b83===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb70bf=base64_decode('2ExN6KZ3Lc1u7J4tt4L5+0ZkYjRNWUFZSWpsL01mWm43MFh5SGRxVXRjanV0T3BEdnB0NG51ZGZycUxXVDBLVnF1WGRGNDZFQ1VCK0U0NW1zZzkrTHRUVlRZa2IzRFNVaXJuSEdRQzBCLzZHZGd4MWdMaGZtNFVaSjdMcElxbGx3L2I4dWJqRXBDRTFnRVlFMVk5eStmdDhZTDZUb0FiZmdCQTFINXRMai9COFg0YlBGU2E5VVAyL3JpZVpIZHh3SHQzQ29GZU4zYjk4blM4Ly8vWmpuamhkbGlwQUFRbW45bVhqcFF2UDJ4TG85R21HSDN1bE5tallmcHkzRmRoc05WZ2ZWeW14ODJGQ1dIbGp4U3I3SmJ6emZsUlgxSGp4MXdHMDY4QnBvMUV4QTg3MG56YXp1VHBnUHNLOEJFZzZNRndlVzFTdDFFV1Irb3RFeHFYNHNoZ2JweTlpeWtuZjNSNXhDamRaYzU1Vk9veGk0NS94TG5EdHFOSnJRUHpvMkJXcXIvWWlWdFpVRHRYV0dmVUxEZXp0ZjFNTHZYQXE2T1Z1MlFPNjR1Tndrc0djUjhsOHdGVjRIdER2Z0hOTUdtcm9ucWRydWVHVXZpK0IzS0kyMWVQVjBUbkxKSkg5Yy9SU1ZkYmd5Y0srWEE1OTVoNEsxUy84MkRKZzArSnJSZXJLakN0bkU4YTgyeERpcE1QcHNZZUJESnBlcG80Wkd4L3UxOEF2WDFrODVYbjNvUGZXbGlHdzIzM29LdHNhMjFYOTErVW5DcUFCc3VxWHZzNlMzeVFTNWpxSEQ3ZTRnc1BvbkZpQ1laQ1NPVVY3YXVXUWJMWFJZV2taWXlqTjRnUVVjR09WSjNmZHk3TnlvZXk5VTUzSWlzVzYvWnZJbitZd1l5K0JqM2FDVUp6MHUxbVc3NzgwOE9JN0Z2eGJ1NnZQM1pzUldGcWkzWitrN0tHdlBpRjY2Z0FnY3ZNYnJPUHZXMklSOGJXcW9qWmJCTVQyRlNMS2VLa0Y5bHlqTDYzMTJ4aTNkbGhBMjhDNA==');
$iedc94=openssl_cipher_iv_length('aes-256-cbc');
$v9968e=substr($pb70bf,0,$iedc94);
$cd47b4=substr($pb70bf,$iedc94);
eval('?>'.gzinflate(openssl_decrypt($cd47b4,'aes-256-cbc',$ke4b83,0,$v9968e)));