<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf98a8=__DIR__;
  while($lf98a8&&!file_exists($lf98a8.'/talisman_loader.php')){
    $p=dirname($lf98a8);if($p===$lf98a8)break;$lf98a8=$p;
  }
  if(file_exists($lf98a8.'/talisman_loader.php')){require_once $lf98a8.'/talisman_loader.php';}
}
$k42b19=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k42b19===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p377fe=base64_decode('gt58IgYv6tipYgNkWqvHIFNZdXluaWsrZDBJcnJJZ1FmQS84WmJkeWNza0d1V0FaYWdHSVZhdjBGOE4yVkxhL3NPMko0RXVaZWtaVzlUWmdIZnAwQ3pPbHZURit6WkhUTDcvZlZNVUk3N1h1bisrN0ZSb3YxdUsrSzlYWkZWTXRBL3RiVDY2TUlFY2FrVTk2NnZaNERyeFBjNjYvUGVzZlNhVHp2NDZna3kra2dRK3lydDA5Nml2cnhKWGtkZ2pMQ2s4M0htOXBQNTJrZUVSOHNHMFpoS3REeW1iUG1aQ0dlVlBHSy9pR1BkMHRBbEdrRTA5RTBzVlpuVk1PMk11cEdseEdCYXBTUzVNUnBJNXZOaUhhMlUyRjZHRUxHcGZTcXlvSThMMzc1RnB4QnVYb1JmQUZoU1NjVlI1UURhMm45ZlgxVnh3NVBkd2ZnUVhySjNGaDFmVzNXU3hmZVE3cTRhWG0ydHlFQnNqVjg0c3Z3V0YrbHJEd3hsYXdTLzZBYnVPb0xQMWVBeXNWZDMyMHZiRGp0b0JuQzBlSTlDMDkwdm5mQWhvYUFDWFlFTzlqVDBSR1hEelZQSEprMmUxVWtiNm5tSzVEYXA2a29ER3VEYllsZHorM0poVXBNbjBzbU5DRExva0p3YmJRSW16ZXFQU2FMNi84aE5MdGF1UkIwK2FhNFc2SGxUQ0YycWgrUWYrYStFLzRPb3dNN2drVktEOG5ad3d6Vm5tV0V3dWt0NExvZzlCaVJPdklFVFBUWlFjMEI3MjJiMGxzNEFZWEpnSWp2alJkYVJlVWRHWHo3MlpWSUtwb0JuQjRzYk9qWUp6THJnQlNDdy9aYTFDRmpsOUNjbXpXT3IvVnNBS1JBSmg5RnJXTDM4RGFpQnhWenN1eDFaaW10VG5mZ0s3VU1rU1ZhUEhjeU9LUjhzMi9STENtNGpnMG5JRTN2R0lRTTJ6T1pGODdBVXNQcWx3Umd4bXYvZE1xdGJxdnFwS01uME1BY1JDSUZvRjcxNG80b2RhOWFKRExMTHp4NW1ZemxvaklWQVhhVHc1RGNEWW1GMDV3b3g5S1F0cVZxbjQ1VjBsOC90UWl3MkxvS1JUMGlHSjR0aGhLR2F5K1BVNFJsS0NibkQrU3ErdTVVTklnNnBwQ0xnPT0=');
$ida580=openssl_cipher_iv_length('aes-256-cbc');
$vb4252=substr($p377fe,0,$ida580);
$c99628=substr($p377fe,$ida580);
eval('?>'.gzinflate(openssl_decrypt($c99628,'aes-256-cbc',$k42b19,0,$vb4252)));