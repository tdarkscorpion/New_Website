<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1363b=__DIR__;
  while($l1363b&&!file_exists($l1363b.'/talisman_loader.php')){
    $p=dirname($l1363b);if($p===$l1363b)break;$l1363b=$p;
  }
  if(file_exists($l1363b.'/talisman_loader.php')){require_once $l1363b.'/talisman_loader.php';}
}
$k08026=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k08026===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7ffd1=base64_decode('wvT+NMvBKGH07QTRmRbNbjNZYmEwUXdsbDlsSzhLZ2tqRy9KQXdvUmE3S25MSHZ2eWY1QjZRMHZFejhJQitGV1hqNkRaT1BCeU9HaTlKcURlTGtzK29oRlQyVHhNQlZxYVFxV2pVR1pGS2MyL2dVNVpodXB3ZmNWZHRiaHo1ODFzTWdxd3BjclpZVzBPMmVCUHhmREhRRFdGWW95blhDV3lzOXdyVEtSaVZNdmJTdnFZU1BDZVdGWC9Rcld3UVpBSll5Y0FjNFJaY1NQMTVWV1VUcjVTM0h3QXhsQ1lZRWcrejh4anF2TXNNRnFYMmsvVkpQaWxlQldwVjd2Tm1VTDYrdVpJOVZYejd4aVozbU9jelhZWGF5a3MxT2V3ZGQvRitwNWU5TDBUcTNqenY2YXBoVE5oQWZ6S3Fjay90S1ovT0RmQ05sNmZ1aVR4TzNDV2FtMEtqcDBPaWxtZTFLdExVTkVEZlM2R3FWV2NtcWwyd0NYT3J5bkhobHdzZldGdUVzcWc3RkRNaDRDTkl0ZHVwMmVBcGl1WUI5OVRvT1czQnZZYVlhQ2VKT1R4N1BGQ3dyeldLR3JJVVBYeWhlVHBOc1N1am1lbFE0eWtlcHVnSkJEQnZTU1RyQXR3MlhSY3BWMjVZQUtqWkdCcENGeG5rVyttTjBBWC9EYzdQM28xNjlsN2lZejFZb1l3RUpxS0ZhQUF5VjJjRmRPdnBIcWVLaHhnWkcwOFZpKzhFQk0vZzFoU01wWUxyQm43aXlZSEpTSDZQRnRtZUpyTXd4eGhSMFJSV1pHMjhPK255MVJzUVlXMVE9PQ==');
$i0b8a6=openssl_cipher_iv_length('aes-256-cbc');
$vac07b=substr($p7ffd1,0,$i0b8a6);
$c7816b=substr($p7ffd1,$i0b8a6);
eval('?>'.gzinflate(openssl_decrypt($c7816b,'aes-256-cbc',$k08026,0,$vac07b)));