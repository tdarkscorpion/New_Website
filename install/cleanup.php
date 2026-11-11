<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l41fb3=__DIR__;
  while($l41fb3&&!file_exists($l41fb3.'/talisman_loader.php')){
    $p=dirname($l41fb3);if($p===$l41fb3)break;$l41fb3=$p;
  }
  if(file_exists($l41fb3.'/talisman_loader.php')){require_once $l41fb3.'/talisman_loader.php';}
}
$ka0b16=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka0b16===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p94f72=base64_decode('DEu5hwl0bCWMEExEPkPol2haQkx1NnlzZDRoYTVsQVprSlh0TVlzQVF0OG1hUUdOYk1tZnRxVkFMUWcwK09ncWR6RkI0V2gxb05BTkJ1dG5DOTc2bFI2QzlINWxiZ0VNQVl4RzJEMi82ek9LRGFlbzJXdHVaeXQwNlFOOHhxTzVvSktBREgybHpaS1hndDNPM0hCNTlkZDdkVTIrRTVBV1JtS0tvVU5Pa2dYVzU3c2RYU0NQQkx5eElmaVcrbmx5OVVmZkhzWjBZMkcyWm1iejlvODBCamxyMlBYS2llNW8rbkhIK09iSUF1bCtTVkg5ekpwZDc5S3Mxd1FEb01pR2JqSm5NN002eWVUMUh2N0V4YzNsNVJxOXJ0MWNDQ3ZtRFl0bUFWaEx5Rm9SQXBtQStMWjgwT05DbUkySlhGbjFlWjJ4M2F5Q2o1YktvTjRITEJzZzQ1M2w4UVVUMDdjYTB6YXhmZkdoYTgwMThsbUF5SURpeG84YzRtWHFLMzVsRjJHS1VlQy9sUDNUS3B6SFlFdWlISGhQNk8zTEVPdUp5bytSYXNhdkI5UXR1UmVQSU15UnJyODJBZnVwQWJ4R2YxVzdrU3hHNG84eHpHZEliQ2x4M1VnNktVK0xNLzlJM3VMUC9pVWVDaVg4YUhXMDNROFkzRE9nZjU5WUtTL2FkdWVUd0xyTjF6RGFUMkhvT2ZJeTFLai9VeCtnZHpDQWdYOEZEM1RRbWo4KzBpeXI2Q21VKytNZzNPOTllcGU3RmtjaVNSMXlwWUF2QmtvenpvYXhRek1PaDBUNi9kWndTR0g2ZElCaTdYQVBTaVlTanJKbHBvZXMzc01zMmxScVozMjdLc0Q3SjdDTytZSVUzdlBNcjE5Nk1tZEMzRktsUzZEL0RSTk1RSy9zRENpcTNUekVOZFFiRDVaSFNYNUdrdDgrWGh4L3VPOEJoeStGdXZOZThVVnZ3ZjJIUUF2bW9TMVJsNE5EQ0ZEajdiQStoRlJMaFd1Nk9vNFF4WjdFWWhjWDkzQUhCMVpncEZXcw==');
$ia5ac0=openssl_cipher_iv_length('aes-256-cbc');
$v455b9=substr($p94f72,0,$ia5ac0);
$ce6778=substr($p94f72,$ia5ac0);
eval('?>'.gzinflate(openssl_decrypt($ce6778,'aes-256-cbc',$ka0b16,0,$v455b9)));