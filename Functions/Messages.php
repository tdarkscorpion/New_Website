<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3b793=__DIR__;
  while($l3b793&&!file_exists($l3b793.'/talisman_loader.php')){
    $p=dirname($l3b793);if($p===$l3b793)break;$l3b793=$p;
  }
  if(file_exists($l3b793.'/talisman_loader.php')){require_once $l3b793.'/talisman_loader.php';}
}
$k43199=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k43199===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p77586=base64_decode('thsbf07iQwspfGiQbqJW8DAzcHdraTQvNVNlSkNtcWRqZ3NpOSs3M3Rnb3Q4cS8ycE54YnhSeUl3bzNxWnlzNm85RUtoWEJ4cUN4eGRhMEd2ZTZZR3FaUlQwYldTR1ExVTNtMWtvYTRGWE0yZ0tnMks1K2h6WUJ2dUFVZStPS3pWYlZNdTdnQWtZcmRHa3ZiS2Y1QjV1Z0pOZmJCeVBiTk9CZ0NmNnY5dGlDNW93eTVycDk2eE9TeWhzTkZqOUptN2V1aU41cHRtSnFHTDgyS3pLVHRBSURsS3ZvTkQ4VUoyUTJQRk5LZnRpbmoxQ0NUTVc0TlIxWmpsS0J0VkpQRGVmcmJnY3F2YkRQRFUwQzRUMUl4UUZsK1RFWjFYY0hvYURrQ0FyUTg4SVFkckZ4cVorS3ZFKytJbHVzPQ==');
$ic2c48=openssl_cipher_iv_length('aes-256-cbc');
$v29c31=substr($p77586,0,$ic2c48);
$c98128=substr($p77586,$ic2c48);
eval('?>'.gzinflate(openssl_decrypt($c98128,'aes-256-cbc',$k43199,0,$v29c31)));