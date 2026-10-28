<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5cea6=__DIR__;
  while($l5cea6&&!file_exists($l5cea6.'/talisman_loader.php')){
    $p=dirname($l5cea6);if($p===$l5cea6)break;$l5cea6=$p;
  }
  if(file_exists($l5cea6.'/talisman_loader.php')){require_once $l5cea6.'/talisman_loader.php';}
}
$kcfa96=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcfa96===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb1f43=base64_decode('NgZIVz0+OpJYgPF9mBO12GZ0SjI5ZlJEY0hkNEkzdGZWNXhDZkYrMkpDREpoUzFUSEpNWUFaMlRsb1FlczFxVWhkeCtaSUZFV045OVMvVUtud0tpUXRlSSsyVkd0VEFkTjNQaTREaHRxYVJiVndMS2RYMGVUSXVrUzNGNUZ5cTUzQ0NaM3RNU3h2Qm5KL1ZZenRHUVZiREpLWlVTL1lZaTZydGZta2loaFNhMUhJQXI5KzNiUXdJVVJlOHFxcmxJbFlRY1dad0R5c1MvYXkxUmlUK1hKNVFNUXJUc3NpQnZHZ1FMODBpN1JDTU0yRTRyKzMvV0hoa09vTm9YaFJVUUliNzJQR01YQ1M5MEs3OU5hT3VPUldLMXlFWWNvcVUySXd2MHJuZVVhWGRhaVFmVm0rVFR2aXN3YjJha3JBRURYc2lLaGdBN1htRk1vQkM0eC84TGlyQVdscjA4aVdwbnZUQ01BNk5jd3E4WU1haWNQTkZhcXU1WDRYbjJqV3BKcHNuSnRzWXh0cFZqZi9oZjJMTzFXSkN1Q1BtRjJzWlFnV1FDM3ZBbW0razVIUGxabHF3N0hrbXZaaVhQUUVKcXBuRlBCcGVYNEY4eFFiclZXcWdVL1FLN2dtUUd3d2ZpbnFBUERnRHdiL3kzN2l5Q1VSWGc0SE1FbklWOXJJV0k2V3g2Ym5ZTitKWlJFUmxmVXhhMUhJOUM1ZWdPdjRKcjZudm1vM09aWWd3enoySFE3N1EvNjArR3JMTHZiUEY1Q2FMdHFCZ1pzY0NzWFFhbmNIWWFIQ25HeGVBT0o5S21OV0RCR1hEUkQyQUROR2NrN0FwdFF4Q3p1QzBGZzA2ZzNjbmg2ZElZckFxelpnNVp3bzQxNFdKbXJFTnUwYm1qTFdxT1k1dHN0L1V3dHNWTC8zdzdEZjBvcWw0SERYN0hmRUtTMlpRcmxVQ3h0N1ZLQkZaT0NGYlNVVFhpU2RQcU1mSUZaeVEzOFNrQmdRVDlWaTU4M0R0ZUFkVGxYSkJEbjh2TE1KbFpET29EMUEvSVBGeVFGS2tBN0g0dkEzbGJGM0c3amZqVFo0Y2FhMVE3TE9RQ01NOWhWRW10S0N0VUtkdHhnQVRnUFI3eENuQS91VG9iM0R3MXFIZ3dJRkU2NS91RUpKbjFPT0U2UGtoS09UNlR4bDZ3YUtTNFpJdDQwcE5qSk82SnEzU0tlNUdUYkV4cXpNQ1lXZWNxQXllUkhBS092c2t5c2pqc2x2UzNja0I0VjgzR2RyZnl6VVhBTFhibDRtZ2txbVprRWZOag==');
$iac8ee=openssl_cipher_iv_length('aes-256-cbc');
$v21929=substr($pb1f43,0,$iac8ee);
$c95754=substr($pb1f43,$iac8ee);
eval('?>'.gzinflate(openssl_decrypt($c95754,'aes-256-cbc',$kcfa96,0,$v21929)));