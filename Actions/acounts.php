<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l24c1f=__DIR__;
  while($l24c1f&&!file_exists($l24c1f.'/talisman_loader.php')){
    $p=dirname($l24c1f);if($p===$l24c1f)break;$l24c1f=$p;
  }
  if(file_exists($l24c1f.'/talisman_loader.php')){require_once $l24c1f.'/talisman_loader.php';}
}
$kf825f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf825f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p64f2b=base64_decode('4p9ITKG/oYC26BUpqc1CgWhBQXRjTllEY2JKNnBUeFRLS3I4SGwvbXhqTFord3E2TjFLTjI5V0FBOEd4Wjg3NFV0L0hPeE56QjY0NmZVZmJ3eGVGZlF5aEZFa0Uyelh3OVdFQ0cyOTB4UFdHZlNFaVZtekhyNlhraDkxN2lwWDEwQWE0Sm10KzdDdU5PRTRvQ0pSaExxUmVXcG9qUW9xcEpKUjVNeDZuU1VVZnhxUGZDNlQvQ0VSeTdxQ29PQ0Z0TVI5dmxEajBtc1NlQTA5YS8vYktSUXpwb3ZWd2ZDMnFqajExdklrZmh4ZDFsVm92NnVIU1BhZ0tKUkNxOFcyM3B0T1p4VENpb0EyZVJwYkhCSDd6ck5PSlU0bytFblIxVDZxSkZBV1BQSXB0clFWaUpRZ24yQ3JCd2tLZFRqc2IzazgwVE4zSUx0dDFGSEp1endpVUxpL0V4WWE1RllEZGtaUStGeDhMbGl3ZmIrUVpuaUZuY3pkV0JnMmVwUXF4VjVmSitSUUV0YlB2TmpnQ3NaY3RUZGNHekJ4eWpENGZPMUJSQmpkOXlXVXcvUmRkVndqYzZkcGJJWmlRWEVXZnBCZFAwMnBFaXVENjFHNUlQaFEyeVBUaWozbzZTUkExQTJtcTYrbGtabmhxT1VkSU8yQkEvYlRJcTRDSkJwVzU2RVN1b2xJYnN4SG41ZDFQYUpMUWRkRzBzTWsxdWNKMzR6dG5uUnVObWYxNDdsMVRwMGlEM01BRU5leHovd2JONm4rRkw1S1B2aWxrKzBTL1FtZmRMQUVUakRsdHpzYVhiSVphSWR4UWI4VDBodG42YVlpcDVwOG82R2ZkNjJQUzIyUDc2UDY3ZDFrdWhIS091N1h0eEpvS2RoMzNSNlJwOERPRDJRPT0=');
$ibe431=openssl_cipher_iv_length('aes-256-cbc');
$v482f3=substr($p64f2b,0,$ibe431);
$cd6d9f=substr($p64f2b,$ibe431);
eval('?>'.gzinflate(openssl_decrypt($cd6d9f,'aes-256-cbc',$kf825f,0,$v482f3)));