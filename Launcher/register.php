<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l557e2=__DIR__;
  while($l557e2&&!file_exists($l557e2.'/talisman_loader.php')){
    $p=dirname($l557e2);if($p===$l557e2)break;$l557e2=$p;
  }
  if(file_exists($l557e2.'/talisman_loader.php')){require_once $l557e2.'/talisman_loader.php';}
}
$ke5bc6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke5bc6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6dbce=base64_decode('bed2czSDLG1VhbZ/62hqIVZxTjdNM0Vmak9MQ3hBWjJhek5hVnJRNnd1bC9RaENzenhvVDkwZnorY2szcTRqSkNEYWZSblF3STA1ZXhXeldDdklzT29RbVZySHNUeFVUN3Rvd1hPTk5MQVo3bW52aXU3M2taempSZHpRN2szQTBLMjZGZWlvK1FDRnJwNWlPRjZRdEZ5Mk8rN2dkTXRWRzJrNWhNYkQyY3hWaHpJSFNCU3ViWG5ZM21PbmVWZlAyTzY0Y1hVTTdtSzlWVWN3S1hucTA5SHhRS2xQTlM1cENQcVpXRkJWcWFkTXZ4QVZkOXpoaWdkVENuZHdlQkYrRmVEVzQrbjYwNWhQVEVBSm55Zm82QTJ2UW5DanpWVG55UnJJaVJpNnNDVmE1S1JickdMdFlPMVgwSHVONExWUkx3WmIrbVYrbC9UeDVLZkwzZTd4VnM3L1dGWlJUTlp2ZFl4aGRKRE1iVFM2ZEFnVDlJVVhiOFNzbUtWZjFocVdMcUI1cG9yOW9YeHh4Sk55elJDYnZxTXNyUjhBcXRTTzdqSDFvMGQ4c2U0TTE0SUI3Ni9UTFVXMGZyb2ZvV2xxUW0rUU02bGtaUHpXOEpRdU1sQWtHdG11THFzNjhyUGEzdWg0YTBlQlF4RnEwSVVvcGVvQWl4bSs5M2pCYW9jdm1lTjlHNkEwTGh1eHdiTVFWQWxSTDBMSStsUTcxNGpvQVRTYVY1ZytldGM5MmtxdlhxK29WTTJzRWJQNVZEcXJnczBmV0FNMGYzN3pUcTZXZ1owRGQzN05jRlN2QU56d01jUDM1Snl3NnJSNjUvenpDVUtseGhxOVYwWUQ1Y0JYSDltUjZ2THNkc0ZUc2dMQ2RKMDB6dnlxSENPb055WmNhbEZZaFh0RWdYdTY4b1c1WnAyOHBjaFdBdmhsYzJibTAzQ3FrS1lLdjYyZS84YWpEVEdNNU00WnZRSVdWM3RNWUk5NnFCTWdweFZrY2NrWEpLbnF0VTRvVVVUbDYxUGE5NEV4WG93THNVaWRYNEFrK090dVNSbCtFbktIZUJVMGlVUVdiWGhrYlZ2eTdDdFBTZEpPYUNWaXNGUmlzRFFwUWtENE1QUmd1bFJmaXlXUVU=');
$ie6d95=openssl_cipher_iv_length('aes-256-cbc');
$vfc7ca=substr($p6dbce,0,$ie6d95);
$cfd835=substr($p6dbce,$ie6d95);
eval('?>'.gzinflate(openssl_decrypt($cfd835,'aes-256-cbc',$ke5bc6,0,$vfc7ca)));