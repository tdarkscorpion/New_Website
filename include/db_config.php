<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0a956=__DIR__;
  while($l0a956&&!file_exists($l0a956.'/talisman_loader.php')){
    $p=dirname($l0a956);if($p===$l0a956)break;$l0a956=$p;
  }
  if(file_exists($l0a956.'/talisman_loader.php')){require_once $l0a956.'/talisman_loader.php';}
}
$kb3451=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb3451===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb5ad3=base64_decode('Ge2gB3DUZ9CufLWAGCiw9XhLSWRWbFRZbmNvWTBtbnZncGExSk0xYlVIbmpPVGpkM3BBOTZpd29jbFM5WWtoMnhZT2t3VHZkWnBnUDFKYkF5OVF1YitXbUZWYUp4M0ZKUVQ5eHRvL3ZHc2doSk9jYmdnSDVpZXBDL0plTm1BNnlXdGtNZU9kMzMzWkFUYVBZQS9JSTJrL0VYanIxNTdhOHV6TmhXcXVjbmlGcTFtMFVIc3o2YnIrY0d2UFYrQ1I3b1Vkc21oMDhXcEpvNlJjUzZjcUlCN3NNeGQyOW8zZDIrYkVPQndzQjQ0SDBGOHU4MjhFcCsyV0dkYVBsYUVwS09pSWpOek5aOHRDMmlWeUR3dWNyZDBua2w1eXM0SnZNN1FERnBsbTBidGNoMXF3dnA1ZER0bWFLazRveHRXYkViekRtckViZHd0bEh0QVp6N1F4VnJHN3pqdklrSWM0U0JnMFZmdVRBTTV3akkrUlJBZFBPZ1Zhd2VpRVJUUEdicnBpWDlPcEpIWXlqSUJNVld6L2FlNnNiZTRRTkF6UHgwbjBwdjFCaDdhUXFrWVRVeVliVjVZQjF3TjNMTXkxWDJEUnpoOTBmU1pwV21FTmdyZ3BCOFFrK0Y5U3U1YzljS0NQNzB3dmpaQ3o2dHFRalRCTXlZSi9vcTZZaFBDY3FiT3dOdWxNYzlHcHpaVHZkMmc4dzZsa2VxcnpNcWZTeU9LNXoyVEFJb2Zablg1aHBHZGh2aFFhUUpHWjFzQXpzT0V0dlgrZ2FoY0kra2loR3JpNGg1M1djL1lDSGNKT1pwTUlVb3M2NDVNbGw4T0o3MHQwLzNranJmaFk4ZXhVRzBaNEZjS3VjbTM0MW8xSFEyRUVzL01xZGlUNEhlZTRyd0RDcVZUQjY0N0tMVTJLMU5mSnU2TlVUMzVPRmh4aEczd0QxRDRob3JjcFlRZzE2QmlSTjE1ZWpwckdoenJaYldkeWsrUVdQbm9qTWEyOHM5UVFYWHp3Q3VEcGh4ZkV5SmRDZWlpOGxwMTd2TzJ5WU1NenRIQXlKTUVQS1VOV0hCSXZqbkxjY2ZtdTFQT25semlUaU13ek9HQUc2Rld6TWhOYmNrV1VWa05vcWpXbW9RM1M0ajZMR2duWWRHcE9sTWdQR0FWOEg5a2trOEw2QmhaRDJwL2tBbnhVbFVvS2dRYWVoeit2cGE1MDNDeC9uM1pqZUh4bnBaNm1KdnpBeS94YmFvZz09');
$i13f55=openssl_cipher_iv_length('aes-256-cbc');
$va2bc2=substr($pb5ad3,0,$i13f55);
$ca4405=substr($pb5ad3,$i13f55);
eval('?>'.gzinflate(openssl_decrypt($ca4405,'aes-256-cbc',$kb3451,0,$va2bc2)));