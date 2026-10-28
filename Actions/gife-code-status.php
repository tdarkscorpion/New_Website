<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld3085=__DIR__;
  while($ld3085&&!file_exists($ld3085.'/talisman_loader.php')){
    $p=dirname($ld3085);if($p===$ld3085)break;$ld3085=$p;
  }
  if(file_exists($ld3085.'/talisman_loader.php')){require_once $ld3085.'/talisman_loader.php';}
}
$k1eabe=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1eabe===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p16c43=base64_decode('R6fbi3TvouYLfCupbCh9ACs2VEdkM3gyZCtObnpobHJ2NmZtYTM1RXoxYkkvMEpNczlZaEdZVW1LT0lPcjEvbEgxUTk0ZmgyT0c0WlZwbW9rbURvWmwwYVF5Y05ueWdBTUlWbEZ5M1QxRW9iRHJhRTE1REZMWVg3blp2UWtQWFZhS2VZRFQ0YUEvVnovUUlLbWNSZDREM0cxWmUxWEt5cE9nYU1QdmZXWWFyWk9JTWZLcmZNd2k3NUwwN3BXWFBmK3p6aUVvd0lmUGJiN0hCd3RZM3M3TGswZmhKWWtRVEVGVmVCL2VDOWphNG04TlN2Z1lKeWZBRVZYak5zdy9naURNakxqUW8zSkY4VEUrS2xPOWp5SXk4M2FGQWhoVmVOa1BVQmV6K1BJd2JDNXJzSTIxbVhVVkMxa2x4ZGJPM1krVXVvcHpISTZNOXBQMktNenRnNFFwVnpwZUlVN25xL0dGejFzVGp6R3hGUm9sMi9XeUVBdlRPZVdWVU5UaFpQbTc1OWRxYnpEU2wxS3BESHpuNTdhN2xCUFBkc0NBOUZ5cWRhazRTaDRTYTdhVStHY2ZLZ2I2RTRtQ3kwZnJyeFp0d3Q3cisvcUFVNVZIb2swUlpLZFVFS2piL01reTVlc3hXNGdJbHUyT2xKeU9QR0grMG5rNC91QjB4SHBtZExlclN3ZVRZSHVWRStpTHkvR09HRlFsZFBEbXAydzA3ZGlIR1gxVjFjeDFIRTBwbTBDOHZmNEpqSkxhOTZ2d2hweUV3TzBLdkJIT1NiRUNFY0JMVU5vNGgyRDJFMWZWSnlxM0lWQ1pOQVdXOWJSQlJYb1JzNFY2blRWeWtSNHlheUxTMFRUVjN3NkNHVHB0Q2U=');
$i7d521=openssl_cipher_iv_length('aes-256-cbc');
$v5da3a=substr($p16c43,0,$i7d521);
$c57bf2=substr($p16c43,$i7d521);
eval('?>'.gzinflate(openssl_decrypt($c57bf2,'aes-256-cbc',$k1eabe,0,$v5da3a)));