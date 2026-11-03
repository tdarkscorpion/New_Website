<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ledd02=__DIR__;
  while($ledd02&&!file_exists($ledd02.'/talisman_loader.php')){
    $p=dirname($ledd02);if($p===$ledd02)break;$ledd02=$p;
  }
  if(file_exists($ledd02.'/talisman_loader.php')){require_once $ledd02.'/talisman_loader.php';}
}
$k0cdfa=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0cdfa===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4a324=base64_decode('wlk0jkDlAvXMun3UEKe0Tk9jTndWVWQ2R085ZUtZbDNoRFVyYjJvK0JBYXdHUzR3Ulp5ekp2cDA4bHFYUFRDMExRcERwR0lkYU0xQ0JaY3hIVVRsZzRvcDZlMEJUYkNzdndPeVVXV09kaGh0VGRwZUpuRDBCNy9yaVYxMVF3NTZXSmVkWWVTZGhraWc3dEp6Ykt4U1V0Rk9tQ0p0RFFSSjJmOTJoR3ArenE3cEpQeExOS3lrODBhY29Kb3o2MUtvclFkYlRDcGl0OGlYWWpURVNwNGRadTh4d0NnNmdjSFVOcG9sMTJOT1lNVTJRY29Ic3BpQWRzSjRnRkdjekRDejBsaTBhUTlyRkVpUWZaUkZjUlRLTkRPaU4rU3pJNzdscUo3VFNNSHNPeWdpcklZS0k3RjBhd3l6OXZzcEFTbTlDWmVvQTEyLzB4YWRMQUFZOTdJZlFDQVpYekszVHVPbnZTWmJrcmNjb0Q4TkRQMnh4bDV3L01kUFRtZWFwNDRJZGo1QXg3Vkx1L2RFYUJvdXhuMkxHRW9vU1dib2VxTWJJSllQWEFTTklLdC8zZkRWYzJpbFZoblZHNXdFWnFsaXpLeU1FdW5LaFcwQlhNV2hwRk9SR0t2OTYycUJmSTV6MmlMWitpWDNWZXVNTCtpNm0wVUxFbjl1L1BmbDZQRFVnZ0R0TW5kSEpSb1dReSsySXE5eXp5SzNLcGVBcnNHNjJ4aWQzekZuNmUvc01zNldiTUpFb1djbDRGa1k3d1Q1RmhDN0ZFRWxWVExkZjBpZTR4dUFQWTRsZ0tFRXF1SXNQcDArU1lGY1FqYUVvOENDN0VlR3pjalhOQVVIWkdGRnhSdnhheE1uUkc3V203eE1PSHhZZTB2WEdnVmowckxDNnhOU1g0NzBvdkNiM0ZOOUI5anpkM3BRTHdGZVRHMTdJSjJqa1QweUV2V3FVdGNNc3J3cEtYTnRIRnQwVTd0M3VwRWU5M3dhNzNjU2pCNkxEQ0wrdVZGdnpEbz0=');
$if5285=openssl_cipher_iv_length('aes-256-cbc');
$v54413=substr($p4a324,0,$if5285);
$c1567b=substr($p4a324,$if5285);
eval('?>'.gzinflate(openssl_decrypt($c1567b,'aes-256-cbc',$k0cdfa,0,$v54413)));