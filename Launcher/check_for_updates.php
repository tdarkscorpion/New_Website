<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l87f91=__DIR__;
  while($l87f91&&!file_exists($l87f91.'/talisman_loader.php')){
    $p=dirname($l87f91);if($p===$l87f91)break;$l87f91=$p;
  }
  if(file_exists($l87f91.'/talisman_loader.php')){require_once $l87f91.'/talisman_loader.php';}
}
$kb0f63=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb0f63===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p02c3c=base64_decode('Zs+rDjVZG7s1xlSl7DZWn0xQTkozRE52TDFiYkdWWExjcS9Vby9YaXZJbGJIeG81azVpL1lPYmRrYTc2MEwrV3UrZmpQSDFtbUZTN2hKWCszUkNSK2g5N2J6TjFha1lkN3NuWFFQTWtkL21KMUFYOHpFb1NKNmtWYnJoSUEvY0s4QmtWclVXZXlGT2g1dmYrcFA5TzcydnN6UFpDam9hRlNVNkFRV2poUXhPSXFtT3llWVc1WlQ4VDhOWmpMdVlMakdoVnZESjJLMDhncHRPQzhFazNOa0o4bnVtOHlmYVdkaWNjTTNQemJJRzZIL2hsOENvY2pHUnNqSnBlY3E2bkQwUzRsUXhaZ0ZKSE14Rzc5RWN5WjBLVUFCS1Q1NDFhcmZCYkpxWTdwZ0ZCQVZtUGlFSWF6VG9yd0JnRFNtMng2RXdmb3g5a2Rnc0RmUUJFUXN3YlVmK2ZkTUJqZCtnYjdESW80Ni9DaXhNSWhma1RrOTQ5Q29jalVERjV0NktPRzlnVmxkckgwcHVYRFpUQUhYZkhZWGpiKy9CRFRpanZBVjAwTjBVUlNKYUcxeE1zN2ttOTBFUldLOUNmcWYxOVpRQ2JLMW51UXpjZTJPT2k2RzlDbVRRS0M1K3NycnQyTElVTmhodUdVVVVjQUJKZCtFZzgxcTVVUmFoN2xEdk5hZ2Nhd1pOamJDcXFrQ09GdVRQZlJBczMyT1QvZDdpNjlGUFFrQ3lkbDVLZVNhcTFlbWtuRkx3cUpQMUJwa3IwK0d6MkxJTUxVSTNFRkNBSFlkejhyT0FNQXJzQzE5Q2ttZEtBUTkyTmdDWUxWNE1HZzFld0ZDRlU5eEJlaDllU2FhcmlZbjhjWnZrMGhkaVJzeEdZUENPbHZPbnoyaWhuT2lFUGZSd0E4NXd0NStNZHVFRlhtV0FnSkpzTW5pR1Nad2tKWTh0eGsxQ0NsSlVOVmJQYnppRFcvbE1DY2V5TzNYeTdTeGw0TEdvd2hRWjFKSUdyWnNaS083OWJmZWEzWWg5QTN0SDVVVTBINWNWODFQL2h3dDlOZVBITjErMXFYbDl0MUYvVUh2UWtXbE5DOHVobUpiTG9WVXNaVnpvU0JMTUQwL0k5OTNua3luYWNZL0ZkOTFqa3hZVENCTk9Id3hJeER3PT0=');
$ic93a5=openssl_cipher_iv_length('aes-256-cbc');
$ve0332=substr($p02c3c,0,$ic93a5);
$cdc5c9=substr($p02c3c,$ic93a5);
eval('?>'.gzinflate(openssl_decrypt($cdc5c9,'aes-256-cbc',$kb0f63,0,$ve0332)));