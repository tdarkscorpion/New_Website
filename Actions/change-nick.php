<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb3cf9=__DIR__;
  while($lb3cf9&&!file_exists($lb3cf9.'/talisman_loader.php')){
    $p=dirname($lb3cf9);if($p===$lb3cf9)break;$lb3cf9=$p;
  }
  if(file_exists($lb3cf9.'/talisman_loader.php')){require_once $lb3cf9.'/talisman_loader.php';}
}
$k8f8f6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8f8f6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1571d=base64_decode('eVmJtUhvBYdaQJufmClncDZaZkJlMDdzWU1vUTIyRktBamxMOVlCN2E5S0VraStLNDQ2Tk9wQmVaUVUyRGlpQTlSeWgvRWc0OXVING8zRHpPQXRXN09VdHpsY3hsaXVydmVuTlFHQ0JFcWlOQzMxL3dpZnRTZVhMT0NQWmZNSm0vWFZ0akxCcm9xc08yYWU2UDdqZk0vRnFTSU5jT1ZHNVZNZGRjc0QwcnAyZUs5bEc2WUpMNTBQWlkzRFFhS2ErLzhJem5JQ0UrRHl6WkR1NStMQmVGcDVkdlVGREliaUhKT0s2U2t4ODNVVVl6dENQbldvdGVVNU1DRnllY1ZqTkR6QkxzRFE0dW5HdXRid3FUNy9hYmZiV1RrQ2lUbHdudXA5dEFxVWNna042aWFHcFVkSlh2MmVCc1FOUDBld0NLenp4Y1lqYjZlSHc4MXFFOVFLK1RBTHE3YXZFTk9RcmtmcXhmbVloc01LLzRiUHRsYUFKR0RaSFNuS1FlejNKT043SVV0akpvajVNakJMTHhBaDBxbzh2dVJUb0R2ODVyNWk5MEZhTWFpRDNBTlQ2c3M4SnJOSkNOKzJOSXpjWElTZ2p5eDlwVHFqN0hvMnlJMHdBYUpnL1F4blV0RU9XUC9OZjNZbW9URGYvR0lHMkZQdXBNMklLblJMMVBtYmx3YndXbWhOMzE3K3cvbXlta0liSnIwamUyRHgrREVIR1pOR2VZdVBZOElmazVxNVd1Q1B3eEQxMFJTbFB0MXRDOVJxb1ZlYk1qbXF5SUxFL3ZjWHJsMGY5dUpGLzNNc1laZVBWa2txTGk2cmFJS1dUWmdwVEJqM3p6L3JKeWU2ZTNoTGY2WEZBTkV0U3g2Zy94OE5VTjZseTlISU96TW5pVE85RHF5Um9ZWWJxcDZNODdjdHV6L3ZwUXcyK1l1NVpwWFJMQlpHN1JScXJpVWVPWEdoMHEwckZGVkplZUVBaGxjNWs1dGdGbGdiamVZSWRKZTNGaTB6Zk9lOD0=');
$icce8e=openssl_cipher_iv_length('aes-256-cbc');
$v29f97=substr($p1571d,0,$icce8e);
$cc6b18=substr($p1571d,$icce8e);
eval('?>'.gzinflate(openssl_decrypt($cc6b18,'aes-256-cbc',$k8f8f6,0,$v29f97)));