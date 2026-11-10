<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $leadd1=__DIR__;
  while($leadd1&&!file_exists($leadd1.'/talisman_loader.php')){
    $p=dirname($leadd1);if($p===$leadd1)break;$leadd1=$p;
  }
  if(file_exists($leadd1.'/talisman_loader.php')){require_once $leadd1.'/talisman_loader.php';}
}
$kd50bd=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd50bd===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbcc50=base64_decode('rno6vOQKSqQZfjikOmg7zmtFRTJkM2tzL05kbmRscHhvWXJQKzREa3pJakJmN1o2aTFGaHFmZGRGVHpCbEx0M2ZuREw5RW9RV2x5ZFNQTm5HMS9TdFJlczRZTXZOU0dLQSt0Q0h2bUNtMjVraGRSTkE4WmRoYWRIaERtZ3B5TjRZVGRnaDRReDY3SzlIWFFGQXJDaWRKa0txOTZkcWhVRnVWQndnU082UXlwQVhjS1BUSWdZTDk3clBObURDcE91ZllpVEFyMllTM01wYlFGaWxrNFpCeWFYNEVjQlZPcWdHYWFFdlEwWGR2WTIrcFlvS2tJZ2FSMUZQTnozZlZyejlhZUhSYTdncHZyUFZhSk1tRjBIZnYxTVhRWWVCNVIvVXBGVGJHNDBLUVk3dVozUFhCOUV4UTljR0o3emM5SWpqVmlVdk1aRE9TNFBQTC8ydGtNeXRaYU9TcnNmZFh6TEJya0FyU1NkK1ltejhrelgyQm1SSFZrVjBkUGNreUg3TDRZZTFCMlExMWpPRnQ1Qm5TQVpodEpmV0RlR2o0L1l6R2xFUWFrbTU4UWFFbW16ZThWVTFWZk5VVEpnWDlKdS95UHdlVGFjZXhsZ3JPZG0=');
$ied256=openssl_cipher_iv_length('aes-256-cbc');
$va5c33=substr($pbcc50,0,$ied256);
$ca2f66=substr($pbcc50,$ied256);
eval('?>'.gzinflate(openssl_decrypt($ca2f66,'aes-256-cbc',$kd50bd,0,$va5c33)));