<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbd85e=__DIR__;
  while($lbd85e&&!file_exists($lbd85e.'/talisman_loader.php')){
    $p=dirname($lbd85e);if($p===$lbd85e)break;$lbd85e=$p;
  }
  if(file_exists($lbd85e.'/talisman_loader.php')){require_once $lbd85e.'/talisman_loader.php';}
}
$k53f2d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k53f2d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5b831=base64_decode('0bYq/PEc7hjloqeWLdgn23h1ZGY2eDRMZ1BPTjNhQ2xOV0s5K2RWaFBNNXR0T0NZTTVoUUVjblJQcmpKRkU4NmVER1BVU25NK21WTlRUcEkvdmVHRHdBQUlyeVoxTUNtVnl6a1BxVlF6K3J5R2k0bGlxSVBRKy93ZitaaS9jK1BaZU1JQUNCZzRZN2dYU05QOW01UzQyTG9qRk9mcmkzZmdBZS9ZOHI5M2NOQU1JK1ZNbmVzbkR5dWRMeDFCc2RLYXBMMFk5U1c1UmJxMTBOaGR0aUFiaEtSbGdPRlRJWGk4UkNQbWZDa3dVQXNqUnpjR1FyalpBSENLdmdUTHVuSHFDc05mbmZENVVMcHlnMzNUVFRTZFdiaFZpeTNadTIrbHNkaitDWkNMcDRoRmdHcWtIN05ETDNSVHlJMDNKQytlRHBkc3VwWjZlbk5raUdzS1NEeFVTNnhIZmVnWDZRTjBrM2xER3F0RkR6aUNFNTF4cjN1M3E3U2FFYkVYVmhDTTlFeGV2cUJhUmRlcUxkbFNXd3dSTjNtS3hZUWc1TlQ5bTVjZUk2TXFINHhXTnJJZW5jVlVySzZ1Yjd5QlBINjh1akhiTmFyNDZjNGFZS3RlSXJzMEhrYko4ay9iZ3cxNDhhblNGUklDNWdubVlIbkxvbW1lOG1NWHhTWm1VRXhzWTl4U3JmbzlrS2lTbEsySDIza0ZlR3JUQ0w1aGI4b2daWUFWd1laYUZFYjMxaXpJMnJNdm9kME9SV1dwSkJtb01RQkt2RFFGd1hoOHdrZEdQNHZHNVlKRTVYMXphaXZVS3l6dldRVVJlajRMTUVnT0hTTUhQSWVzSlVrb2Z0Mk5EWm01MDFLckxqTGt3V095TkZXcVRyT0xGVnNDZDhTN3ZpMUtYVWYyanRXelV1R3VURUVHUGV6aHM5dGZoWmhPUFJXM3RPSVljdElHTVljeTdvK2h0QmU3M2pTdXJzd25YWnBENUFxckJNSklFMk5ZS2ZqTWF4TGxzcnhoUFhjeEQ0WVorNVBnUTM0MVF2KzNzTWp0elllZmRnTHpKaW9pR25YTHc9PQ==');
$i08d95=openssl_cipher_iv_length('aes-256-cbc');
$vf282f=substr($p5b831,0,$i08d95);
$c9bddc=substr($p5b831,$i08d95);
eval('?>'.gzinflate(openssl_decrypt($c9bddc,'aes-256-cbc',$k53f2d,0,$vf282f)));