<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3942e=__DIR__;
  while($l3942e&&!file_exists($l3942e.'/talisman_loader.php')){
    $p=dirname($l3942e);if($p===$l3942e)break;$l3942e=$p;
  }
  if(file_exists($l3942e.'/talisman_loader.php')){require_once $l3942e.'/talisman_loader.php';}
}
$k8df5b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8df5b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p20f37=base64_decode('9KdB8C6AjgKFeHVpvFozwG14OWlYZThrNlE4T3REcGNTZ3VUdkJWRFM2RTJVaEE1cnBmMWQ4UlVPSldZY1MweFpiYUhFSy83bjQ2Yys3WWtpc3pjSzlZQkdnS01jczlDZGkvTjlPK1hZWDRqTXVaK0srTGtWUTdrbTNYRFU3ZS9NK1dXb3RybzVOM0F6YWU4UEpkSkswRnFhcjBhUFlkN1AvRXhudGQ3SStMYkVkVUpiZWt3Z1YzRzBwRmZiTExuWERGRjlHNnppQlVFSTFDeG1nVTAxcHZ5YTlwMTJmNENPNldDaGtZY0hyQzBSRkVPRzkrSEZZNTVMWTR1ZUZVcFY2cG5FaG1ja3BPc1JvMnVqRnVCb0svVTZrQlI4UVJobEpQdzhIUEZ3Zk11Y0ZUekZ4UjdHWkluMFVXRS9malRDTWVwYy8yWFVGTElyVGY2Y2FBWUtFQmFhRWRUdDJIbkpPNTBaTCtZblM3YlZqbXRSMlFJK1FGZlRudVVWZHVsQ2xXZFBTbVZMcDhiZVA1RlRLNXh3SmM5RllRa1VmQWVwQlNXK3VBeTM4MTdoREZ6aEowTTQzYlVmR1JjRXBkbFpEeTNiK3Z5V1VZYWxHaWEvWlRwT2FhKzFFakpDbnpKak1VVkVvRTdORDh2Ni9rVzhydnNxOXlVS2JyQVVWMmdMTUt5dG5sYUJOWDJHd3lkYjNwVHcvZ1FUU2pBdk1kZWtaUlBKODQxb3haeENCWmpmMTBrRGIyQVhreFh2dXN5a05sQXFyeVdvTTJnMUkydUJJNWVhT3FiRW12MHpPdnpWOGRYWTk4VTRmUlJUb3VhcUJDYkRaYnVDbXlvWEJ3NXFwVHhPeFFBVXdXMUR6R2w0cTZHR3pKcXZjaUxRU05oL2hwL1RRPT0=');
$i27710=openssl_cipher_iv_length('aes-256-cbc');
$v20977=substr($p20f37,0,$i27710);
$c47828=substr($p20f37,$i27710);
eval('?>'.gzinflate(openssl_decrypt($c47828,'aes-256-cbc',$k8df5b,0,$v20977)));