<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2e7b0=__DIR__;
  while($l2e7b0&&!file_exists($l2e7b0.'/talisman_loader.php')){
    $p=dirname($l2e7b0);if($p===$l2e7b0)break;$l2e7b0=$p;
  }
  if(file_exists($l2e7b0.'/talisman_loader.php')){require_once $l2e7b0.'/talisman_loader.php';}
}
$k60ecf=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k60ecf===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6f760=base64_decode('Iv0ATpdNxFxgOXW30O6Ys0N0Z05sL1R1eVAwVGQ1Ky85WWVWS2NOWlhxMzBBOTluMkpHeFczczJKK3BSZHBELzY5UytmOVhtSmZCalZVSEZZKzc2NTFkZk1MZGt5ckUvR1J1eXRVNlM3UkpMVkhRd0lOR0pmUVBzVUVBRmRqdklmMzBacVVIYm15bFlhak52a29PejdzU0E0eUhrMXh0akhqdW9KQ2JmOC9ZZE9YYWlONjkrQnBHMU42dmtaMzY3Sk1xRWFHWldXMHJUWjhBdnJMNkhIeVNQMmN2amZONi9qR1l6VFUyNHRQUGZad3MvZStwaVp1ZkNjdS96c2VPY1Njc3hRYjJSMFg1R2drTyt0MGFSNjN5cVpjVVQ5a0lvcnhYeVF6YTJTM0MxSkRya21lQkc3VHZrVWcrWFBybWNyWDJaamRoWWFGOG4wMEVrZjhuU01BL3l5ME9KYjJ3SmVyY3JCWGl4cU1ITVB0TG5iNVZIc1ZkR2ZrZXFFVXFMWmd6Z1lCMXFCOXFBQUM1a3FDbkpLVHU3c0NJYVpla3EybjNkaTZkdGFENG9hRGN0QUlGdzRtWmJ2Q0ZBUEVFbHEwZGw1bVh3L29JTHFOVFJvSzJ4TTZBR01IcVRNZUNjb1ZuaVgySHhtMitIcmFFejh3MUZUaDVKUDdYN25MNFpZcWhzNWpZOVNZdUdWYTFyNE9LS2R3Z3k3VGl5MFZqNU1qYnhEQmVBSW4yQ1YzcUhpek9mOHpKc21yTXRFeTRhOFl6cEJuR0gvRzIwaTlEbXVMNTBYaUxDMXJFOUw0TWdVdVdVVG0yZkg5VDkvelFOb0Z0VHUxNjhRSjNPY3VyaXhvS1pFTjY3M1hOQURZL1g3NDlFVmJIR0RrZTB2NFBlU0tYS1oreDFQL0dNcU0zWncvSHdwQ1hpcHVTWGVIZ1QzZVY4OGNzMWNodmN1cktYbGhUK0dDeXFYSEdmNFRVSVdzMThzcHlOcGNEYkZHeDBpdTBsWFJGWlk5UT0=');
$ie315f=openssl_cipher_iv_length('aes-256-cbc');
$v0fd01=substr($p6f760,0,$ie315f);
$c70a5c=substr($p6f760,$ie315f);
eval('?>'.gzinflate(openssl_decrypt($c70a5c,'aes-256-cbc',$k60ecf,0,$v0fd01)));