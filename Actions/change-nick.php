<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7cb5c=__DIR__;
  while($l7cb5c&&!file_exists($l7cb5c.'/talisman_loader.php')){
    $p=dirname($l7cb5c);if($p===$l7cb5c)break;$l7cb5c=$p;
  }
  if(file_exists($l7cb5c.'/talisman_loader.php')){require_once $l7cb5c.'/talisman_loader.php';}
}
$k753ca=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k753ca===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p88d57=base64_decode('E2diOmhgRQTIXT+tF3KTpkpaUnYva0swZ2RkTVJFaVZRc2t3bmc5Qm5kWFc4VlVrN3VMeFlSaUp1ZVJQb0YzRzZvVkcvVjlCLzlUME9OaHpUZnBjRFAyenQwNzQ1Y0daVHBsRk9yN0t4d3RPQVpsVUo2Wll4TGlaaS9VTFd5cko4UElCU3kyK0FZQmlJOXVHMEU1ZDZGMEkwVndyaTd6SkQ0Q01ydVBsd29OYU1pTlVhOWtHMW9xcE5TaytFSnhHVHNRR1RWMlJrQTZaTVpkYllZRGV2bnlXWlBTWEFWdTF6alpSeFRPSmVTc2JPcCs5bktEYUcvd2J5bndZSnRsNEg2bXE2aUZMRVJVMno5dkdkbER1b29MZUtVS1I2VWo5R2tpamJIZU84SjZkK25uUGlueDc4bnRVaXlWV1I1L3lsT0pNUVp2YTdyQ29ncklMQUNoWFRZeE80VkdqOXorTUdOaldmZlg0eTVEa0RqRjFMQ0FQSjhkVmlWT3NNRSs5V25kSXRWcUVZUXJKOW5Ra0tEZ3JqUXp3SWFMMWVxbzNYT1MrTUozL01hNFVwNTVBM2RrVit4OFJWSDd4MlRIL21Kek1TcWZSYnJPdGpaMnQ0ZjlSUkRQVWZkaG5XNCt3RXBsWlY5OTZ3bzlndFhWL0FOZS9pVWllbHZnYzh2emRlS0YwaHFNcXR3MG0xdUtlWkRtWGQyYUNPbVpia05ZRnczU2tzMWxqZjZlaG8yaG1Uck8zeG96RUtROHdiL043U2RZejlGa2FscE8xajJIUGF6YnhwbG9xYURRTEw4bWR4TTNGVmlOQzlFMG1IL0N3MXhTQ0dJaDEyWVZEdEl3NTBmeEtETXM1aEIzZkZsMjIxdGNyNkR6dnhLdy9qNHZPRTA1MEtwSGwvNVNkbyt0Q2pWZXYrNkdDOUZJWThNbzUxNk11TmcxaVQ4bGFrOE5kdTZDT3lsSzRqTGhBMkY5dDFoS1VLV0RVTml6WStwbGJwQjVjbjBncTBWTT0=');
$i0e4a3=openssl_cipher_iv_length('aes-256-cbc');
$vbca6d=substr($p88d57,0,$i0e4a3);
$c77c04=substr($p88d57,$i0e4a3);
eval('?>'.gzinflate(openssl_decrypt($c77c04,'aes-256-cbc',$k753ca,0,$vbca6d)));