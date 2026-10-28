<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf2002=__DIR__;
  while($lf2002&&!file_exists($lf2002.'/talisman_loader.php')){
    $p=dirname($lf2002);if($p===$lf2002)break;$lf2002=$p;
  }
  if(file_exists($lf2002.'/talisman_loader.php')){require_once $lf2002.'/talisman_loader.php';}
}
$kc37ac=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc37ac===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe1d0d=base64_decode('Cp0qvExw0Sp6CYlt4k8QJzkrQTdrZkpwa2NZdVVtbHV1dDNjTnRSRWJCWFcrVDdIb2EzTUtEOWJ0TkxCRnVDZ2FxSitReVVYenA1TEhoamcwYlpmMk9IY09qRVpWUzVmWFFGQ3BUVHBqZTh0WjVhaWRKVGs5UVRnYk10M01KVXh4V0Zkb3lWRFBUUkJBNkxpQnh4ZEgwU1B1bTFWZVg0RXh5bzA1b1dzcXdaTTRXK2N3Ync0SEpnak94TXZhWkVzVGRMa01oSkRDcFNsSmsvR2w0R2NnbmV0eGJQb1hYcGszV1FLTVd5MldrQzh0c3I5SnprcU1CdGhobjkzS0VyOFl4R1kzRGUvbDYwUTM3UWtLN09MenpDRjNsMjI3cWZpdkxURUlCc2ZZaDN4NlcvdUhyTTVZd2lsVndBRHczblNDWDYzdWlnejFYYVNuQTVwWmdRMTQxUnlldTdVSkh1cVpxZkYrUlNodWI2MGFsRm56dWYxSHFwWVU3QXdCdkJySm1DSnp3Skx3V2pIdVNxTkN2VTYvaTBHWUdHR0VOOGNaRkltOW5OZFBzSzFHOXRNZGRoOGp0WU5kbXBEaDREc3htdzFkRDhPV2w1NDFyUFhpUlh2WUoxWmtqa0FjdnhzcWUxSUtuSjVYL1ZHZEplUFMrVTQ2cWIyYlNhaVhoWC8zUmg2Y3NzRnNhZS9hVEhCY0RQTlpzbXdSZmZiQnFqNnArcDJiUXVNNnVTdGdPWllUZTJQZmxGU01iSnFHT0JEcHR6ejFDcDFtSldLRkx1a2hwVnlxOFh1dkdkZHJxTlV1WFVZY3c9PQ==');
$ib05a7=openssl_cipher_iv_length('aes-256-cbc');
$vf4134=substr($pe1d0d,0,$ib05a7);
$cd07cc=substr($pe1d0d,$ib05a7);
eval('?>'.gzinflate(openssl_decrypt($cd07cc,'aes-256-cbc',$kc37ac,0,$vf4134)));