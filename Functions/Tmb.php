<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7fd06=__DIR__;
  while($l7fd06&&!file_exists($l7fd06.'/talisman_loader.php')){
    $p=dirname($l7fd06);if($p===$l7fd06)break;$l7fd06=$p;
  }
  if(file_exists($l7fd06.'/talisman_loader.php')){require_once $l7fd06.'/talisman_loader.php';}
}
$kcce36=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcce36===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4ef20=base64_decode('N2CFPEo3+L2kBqDmVcbu2klrVERzaDE2bWV0YytpWWRBQUlUQm0zTlkyRm5lM2ZoVnpDN1VIMklBRXA4RCs1dXBpblpFYnVzV0RWcHNUYWMvbXJyRTBCTGFQMndWSDhZUDlzcDE0RDBTQnF4T295Ykx0Sk5WYmNHTTFNaC9KeGVIVTl4MzdkbG5EMXE1SU5nVVppSDJvbVVzNFZ4WXVtcjlFMEgvQmF6aXB4T3BzTmxFYVN1SXllNVpjNVpNR25zQjRNOW1wbFd1OTFPTHQ3NDladFlkcGlGeUhJVjhNd2huUklFejI1dm9kU01hb0l0MmVJb2lvcjFOOC9zV3JyNldtZFA5TFZTUWVlWnUrejVjTUlleWprV0JmMjJ0dCtnL1ZRMlk0MExHRytub0ZZQ3AwVlBHbHdsKzBITURzUXUyNE1iRFgxQkZCNVB4c0hZVU5lRjJQWk9iUjhLT2hUeS9ObWl3cjBJQ1N0T05WVVhzV3FNWDVCdHFERFdZVG0ydHh2by96ZXluK2k4bkhCNUg3QUYwc0lyNURrazR2Q1Y2SmQ1RzNpT1lMWGpxdzNmdkpOeXk3ZHE2TmRwTXVsL1o2V3Y1SzlxaVZzYm41b0h0RGU2eTZjRFpZdzB1TVFVOGZ6aENiVUJtSGU4VUhRZTlxa0pzMHBnZ25idkdoYWNaaUpxTUdGTWozNmdneVBQK29mOEg2YnZvdUJDaVBtVUFDcGFEV2lBS0V6NFNoa21hNWE5aDhHc2s3T0MyUWZPenlGS2hxQlpiSlc3YVVVNDhaaHFiMUZwc0Y3dlRsZXZ6UmRzSEFyNDBHT0JqdEgyTGRyWWkweU9KeVhUY1pMMXZFN0RSUnAvZjRJa0Qrd1lrS0dsNXN6MVJlUEpiMzlPUDVYZDRzNUpHYmdkTlBHajFmdkVoWW9UcFhHaFpnSnVKVjZHekhUOXhSMnQwSVllZ2lhSjNuLzZXOHJpS29vQVZmd3BiVHFndndVdnpBbG1CaXp2TFJQZHRtZFRETUJhNDlrS0RFWkk3Q0UyYkZIKzliNVIreStQcXVIdnF1NWwrNkhwZFE9PQ==');
$i2c5c7=openssl_cipher_iv_length('aes-256-cbc');
$vfe601=substr($p4ef20,0,$i2c5c7);
$c15ab9=substr($p4ef20,$i2c5c7);
eval('?>'.gzinflate(openssl_decrypt($c15ab9,'aes-256-cbc',$kcce36,0,$vfe601)));