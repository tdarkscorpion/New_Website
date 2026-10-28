<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1e465=__DIR__;
  while($l1e465&&!file_exists($l1e465.'/talisman_loader.php')){
    $p=dirname($l1e465);if($p===$l1e465)break;$l1e465=$p;
  }
  if(file_exists($l1e465.'/talisman_loader.php')){require_once $l1e465.'/talisman_loader.php';}
}
$kb7098=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb7098===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9b22f=base64_decode('a8F3o7FEXmLh9/iqxRhi1GVzZG1qa01FVnRzcmRFK0c4Vlh0a0xJOTFRSWRVYmF4T2Yyaml2aWczdlAzQUx2L0Y1QnozMVZld2ovc1NJdFNJb1k5K1NPZVRCY2JrNkdFNER1YWhkS0gzVzV6Q0lGb3pwUEtaMWN1bjFESmVEcWdiWmdqQ1ZMWHZPOFdlaVpZU2poQkVXUWwzUER5ajJaeDJFdi9sbFBTOCtkUktXQkExVkgyVFZ5WW5PQ0JkMnBSZHdkMTJJWUNBclFBTUkrWEQzV1dCUnp4bWF6UFJ1eVBsS1pmL1Vmc0xYUmVEVUY3Q1B5OEI4MTlOZTdBUzYzVjhLT2xaZ3QzU2NiN0h4KzhqZGlzNFc3ZTQvTG10Y2JqYzdJb2s4M095UzNiR3ZXeW5qU0loSFZmeThBZHptWTFLS0lEWG0xT0h6NGgwZ3hLOVp6TnZPbk91WHhXVkYvUlhWSkprQ0x6YzJUSDBCdFZCa2l2bVEyYkptanZSRDdmUzdMUE5hRCs3RXl3ZFgzZ1NJU1FSZ01oZ05rd3d1VjhpS1RCb1F3N2NUV29rUzR3UmFBZzRMeW0yYkhnN1ViZ0dBUzlBRmZVa2hueHhNUGJxYkNWSDdsbmZUYmxIcVNVS3E5WVV2U21pbmRrOE5lb1FwaXZkS1dWbjE1aVBNZUovT0dwRTAxSEJWdUI3NmZxbzdZdGVET2VsclovVm1oSmE4cUdxVG9HdFNVTzdjQzNBUjNIZ0xmSnpuSXF4VE9CQlFydXdmTENGVlFuQVdWKzU3aldPc2xRM2syQ1MvWU9td2Nrd08vMDhXMjJFdWcwb0x5VVA2UThwMEJRcEovL0ZlS21leE9JdjdiS1BOaGFNV3gzcExmeW9Gck1PSTZ2SWR3SmRBPT0=');
$i365bf=openssl_cipher_iv_length('aes-256-cbc');
$v2afd0=substr($p9b22f,0,$i365bf);
$c7e9e2=substr($p9b22f,$i365bf);
eval('?>'.gzinflate(openssl_decrypt($c7e9e2,'aes-256-cbc',$kb7098,0,$v2afd0)));