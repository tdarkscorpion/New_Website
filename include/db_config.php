<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf641a=__DIR__;
  while($lf641a&&!file_exists($lf641a.'/talisman_loader.php')){
    $p=dirname($lf641a);if($p===$lf641a)break;$lf641a=$p;
  }
  if(file_exists($lf641a.'/talisman_loader.php')){require_once $lf641a.'/talisman_loader.php';}
}
$kcf775=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcf775===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe0933=base64_decode('SLutbS3tYPO6kslO+Vkz2mxCdVI3bGU2S0VrYWtzd1ZhZEhjM1dFVWhaZ1ZWL0ZZQzAzcGkxY1R2RmpuVCtiTmZEWWsraHlndVF3RzMzMW5Gdm5FNzNIbVF5OGR0MEVuWEU1TzlPbDg2Vm5SMjN4aGE0dHcwcjB5WHRlRllxV0o3TnVybmdXYitOaXZndGpIV1FVZmtoek5aNWdidXBkRXBLSDRiSGRDVHoyd3lFb2RKNTN0RXVPMWlCVGt2RlJCMDkwMXY5WFJZQmlEanRiTzBLeVc3ZTNyUStZUzdtdzkyd09raGtKMWhEV3FsTXMrOFNFenl2WHpZMUhiUTVjL2pib0kzbXF2ODhEamFOZG9ybUZSSFhnaE05M05DdUZyd2E2OUNtN2JjN2t1ekc3UUZQN3kwaUZqL1o0c2pvak5FejA0dUpyRy92MUhRSXgyQUxTcFE1VWFxM0U5YUlxV1Q5R1gvVlpZRzA2K3RWd0MxZXgyd09mckpTYXlCbWEvVDMrR1FSdUo1OE1kdE5PMXNoNm13YXZWQ1d6dkRFQ2NaYUtseTdxZG5FUjVDOUZ0a3pXczIwbnRYTlpnemV1V2ZIWDd6c3pFTkdweFJkaFN5VGRMbnRETlk5aUh2eUpqcG95bUNXOWVJOFh6UmxlOEd4SjV3UkNTRUxQYVdNL2xxYmtUMldNR2JiMldTRk16QU1MakE4OXJBTVR1WGlaM01TdUkyaDJFTTgvR0o3R0FydkhiTEpjMmF2M21RMTRDL0pObUdGWkxiUW4xVTNSSVlJWDF0TS9XYVJDWUpoQTcrcDdzdTNUUkkzeDg2UUFlUGo4VXBUcyt0RjE0ZG04RDBscDY4YlpPRGVkTm1RY25SZmdtcXRBOXNZeEpaYWRaS09rMzBKVVVRSEZKQk9OUGJKYWhjRTRVZGROR21jNjZZKzFSZGtka2tHZXFNU0NuL1VLdFhRZG02M2dvOVFQckVPRFFPdFJtajg3UFM4VFpWNktULzdERG9BM2pzcTZjMGwrOTFvekVWMkgwWTY4K1Zydy9pZjZRMFgzNU1YTGlOTVhjWTY5MG9qRUgwRFd2ckxodGw1RmF4NXJ2SVQrNUFRMW1zTFhJRGhHM0Q0ZzJmSDlWS1RnYTVDRGVSczhaeG1FWVZhM2Y4QklnWHRvanJXK2ZFZ3pHTXJBSVg4U2JybU9TZXNlS2h6M01NZGVsL2tWTFBua0pMb05TS3NtNTdieW9zQT09');
$i84ad4=openssl_cipher_iv_length('aes-256-cbc');
$ve19d3=substr($pe0933,0,$i84ad4);
$cc07e4=substr($pe0933,$i84ad4);
eval('?>'.gzinflate(openssl_decrypt($cc07e4,'aes-256-cbc',$kcf775,0,$ve19d3)));