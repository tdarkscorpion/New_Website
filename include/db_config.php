<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le232a=__DIR__;
  while($le232a&&!file_exists($le232a.'/talisman_loader.php')){
    $p=dirname($le232a);if($p===$le232a)break;$le232a=$p;
  }
  if(file_exists($le232a.'/talisman_loader.php')){require_once $le232a.'/talisman_loader.php';}
}
$kd58a5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd58a5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p00a83=base64_decode('IfmlosbLTgipr/vO9L6Xy2sxZEJkUWlMbUlpZzV1SlpBZU5rVnphVk1GODJ1aU0yV0h2SmhDV0psSUlGSjdCaExvQWVqaGcyR1JXVUNleHc4RW5jbmJKaHc5WTIwY2pDcElrd3FXcm5uZ0UrdXZIUGRod1pEa3NucXpiZjRzU0dXZmRNdHdoaXJmaW1mR2l0TVJ3VnZQZDRUWW94a1NhejVSVER2dHg0TTZNU0wrWk9mWEs1UmxwUm14aWhHK1BWckFLb0JwbFJ5b0tsRDBHakl3V1ZHYUFaa21nMTVWeHlRRnBadlZldGV3cUtPc0Zrck9QcERUNjg2Mmt0dVRWb05MQnhOQWduRlBuUVlSZFlXYXI3Q2hTckF4U0pnVjRWeWVaTzNQVkhCSC9BSGFzRE54OU5SK0kvUExkQ2l0NXh4MkZYbGhOOHhqYjRUOVViZnpkV3hLZTJNMTBvVU92QVlrTnhpQ0NpdWhHK20wby9reHJBcEdRV3JycURITnlYUmJ6TWlEVXcvaVNnSW5uWnZnS3VCcVRuTHU0aDRaQzhOMktuYUtqR2ZsYUMwT0JGVSs5SUV3MXhwTFZEanJZMHY2djdDR2cyTVZBL3gzaUlmTEdLZWhuME81dXhVRm5lVkNLd0hFNWRmclVGU05BRmFrN3NCRmVFdENvVTFmcVhLN2U3VUhPVFdqM2xHd0ZLdHhtSG1ybHgxZVlkL0VrM1dPczVTVTErS0lKcTBCUUIvL3E2QzM4LzNMSVMzODZMT3Q3OHN4WEs4ZHRBd2R0c3ltUjAzK1dCSUNOKytQdXRDOHZOQUsxanFiMXZCbTU0a3hRR2IvRjVTTUF5ZUkySGdWVGppTTlWUnF0QWtzb01uRVZWdlJydmUvWjR4RkZHR3BmdS9aRktTNGl5TDRXblJuYjZoL1BPT1JnMVp1LzIvUWtGT3I4cnBPQUNXRWhCRXZySTZsd3Q5WWV6VnNZQkRMYjA4NE1yUlRzdVc5UmxFWTFMckFHZExzamFraTlYZ2QyY0lsSUdtbEtuRzBoY3JpZVUwdlRHV1YrN2p1bDJVaytOQmM3bnNjRng5Zjk2ODNlWGIvNHJXL29Bb3RDaFRnbUZlMmxsQm9KdGNrVmlEemtucDlsalladkZrWWtKS1d4TmJyMVpmV0VwVXl5ZkZheHFPNnhRODlERDc5eHk1VmIzMlFINWN4RUJCMkpvaWxoRVVIUXBxZkw4YU9wNm8xY0F3dz09');
$ibdb6d=openssl_cipher_iv_length('aes-256-cbc');
$vb0a54=substr($p00a83,0,$ibdb6d);
$c64034=substr($p00a83,$ibdb6d);
eval('?>'.gzinflate(openssl_decrypt($c64034,'aes-256-cbc',$kd58a5,0,$vb0a54)));