<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l30d74=__DIR__;
  while($l30d74&&!file_exists($l30d74.'/talisman_loader.php')){
    $p=dirname($l30d74);if($p===$l30d74)break;$l30d74=$p;
  }
  if(file_exists($l30d74.'/talisman_loader.php')){require_once $l30d74.'/talisman_loader.php';}
}
$k62576=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k62576===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p238f3=base64_decode('vkCN0ZPzIjyyi8pF9qvuTWpsRko1NlVLbWVpRFhKcXdEbG9EMjdiUGJTZkkrM2NrVmtIWlJjQVZuSUk4NFMza3llT3FSQXJ1b0NJREU0RVRNdzRocVYyclhHeG55YS8zNC9wZnJmd1Y1L1B2WUMwdjEydFRINTJxTkljckNlbGErbWk1UXJFUTI2ck1BNjBoVk41WjQweE96VVFFNkIyZlFZMk9kSGxNL2dQb090b2NFeDdneU1admVBMUQxdWVkaGV1MFA5RUJ6bUd5L1A4TVdrQm42Ykh2Q21NTGM4cXpLNytxN2ppdlE0ZWVES0tLZXVVR3Q0Zmp0TE9qeXYxaWpWZ09rOXlxajJVc0RucXFQVzRlY3RqRytwMzg4YlZqRzllVUpmdzJoNkl1RU5uWTBySzJSMjM1ZXNObS9pK1dteDVtQ21nSklzMlJ0aVJZSExja1JUWEdSOGw2UWdzTExXYkxSMU1Ed1JyQm1LQ2Q1OTFOYlVXV3lvZm11cmhVMUk0Y2dNbnhGVnNIa3RlSFZjQkJFZG41TXhxbGtmOEJ5SDhnZDNhanpmR05nbGZMUVNzUmkyeC9yWTd3Tk5HVktrSHY5ZHFPYjhSSW9zNFRCd1RSWXkyRWl6Q1FtTGFUOGtORGh6R0UwODRmWHk2NHdubk5aUERydGRWZTRxbmd6M0FwMjZVVnpoQU9SdjROZWlGdU5CN0RVRmIyYkJKUWtLZGMzL1hzL1orRXJ5VUxOV2prMVF1dDNuNW1ubmYvSGtyRDNXZCtSa1MxWnBHK3RpZUU2QXh0dGV0M1FnZHVIOWovUml6NDNKN1hLOElONlRCR05XQzBBREdJSWlBWGUwNEpIRHQvQWI2dWZGRlU=');
$i8063c=openssl_cipher_iv_length('aes-256-cbc');
$v59f70=substr($p238f3,0,$i8063c);
$ccee3e=substr($p238f3,$i8063c);
eval('?>'.gzinflate(openssl_decrypt($ccee3e,'aes-256-cbc',$k62576,0,$v59f70)));