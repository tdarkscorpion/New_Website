<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l070f7=__DIR__;
  while($l070f7&&!file_exists($l070f7.'/talisman_loader.php')){
    $p=dirname($l070f7);if($p===$l070f7)break;$l070f7=$p;
  }
  if(file_exists($l070f7.'/talisman_loader.php')){require_once $l070f7.'/talisman_loader.php';}
}
$k6ebec=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6ebec===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb8867=base64_decode('iCP9ILF73JjYZj4RnUpkZCs3OVpSY25kbnBhdVo4c0piZlNRWmRvNHZOS2xBYjdNa1c5NHdYWWlOV3dNcG9JUUZ3RWVoUVptNUhVd213YnQ2V0RrdUhHU3JzMGFCMWhWcmc4bitqbHFYQ0RtMkhIMVV0Y3ZlQWxmTjlWMG1YUXlWRUxFU0xqL1ozS09TVUVHeHQ3VktpU3dLUmZxZmtSbHErNjhzenRLTVFNYnl5WnBuM21PM0J0YWFrdy9wenplT3NvOHUrSTRCRS9tZGJJUVlTM1Jya0xsMGpDL2w4eHhnV2Vhc1NhYmlRQ1NMVThsK3RScFVJbXR0dXdsTHovZGMzZmZoakpOV242am9tb3AzSmQxaElmd0d0VytSOU1aNGZQQVpkZHFOVkQ0MjdXQmN6QXlyZDdXQ1dnRWFuOWlmRCtVQ0ZrU1NhTHFXaEVXVnU1TzZCdThqeFc3aityY0tUUUdXNHMvSWJ0K2l5Q0tBVzMrcGxSL0MwajFCTUNlcExKOHQvcWQzdXlodlZDVGtodjViSG45bEVkU3JoUHBqZW92Z2ZFeUxoVS96YkpUUmxPQlRPeEhyQlhmSGhvWkFqREg4UGZvK0l6Z2RRZEJsbUR3VVByTmxTSlk1NkcyN3VibWpmdCsxcUYvV05RS3hSTi82QVFldjZvOTA5Z3R1Z2RXeXZuS0c5WFViWGF5aEdyN011R3NRZDNyQXFVYkpWekIxbDFtd2xGWUo4WlExOEF6Q1gyTUk0VVNNYWpOQ2ZoWURCMVhBZjBXQWdSbDZpWTBNOFR4cHdsQzZVN1pxR29SN2xReWRXZ3Y4Si84UDRhYVRHYkpTL2VoQ1pFV2MzNmdzQmdJVktBa1ppQVlYRENRdEpxVjM0QjZ6dWpqajhmVlU0RHp4N1k5MW15d0hUalNWWktPcmJONDBtVUNQV2l3azB1VkY2MjlLZnFJZFdDemYrOE1UampoVjJTWG04RytET2s4djFRWWo4d2tFdHlMOUpZcmdrQT0=');
$i72261=openssl_cipher_iv_length('aes-256-cbc');
$v3e54d=substr($pb8867,0,$i72261);
$c2bbf1=substr($pb8867,$i72261);
eval('?>'.gzinflate(openssl_decrypt($c2bbf1,'aes-256-cbc',$k6ebec,0,$v3e54d)));