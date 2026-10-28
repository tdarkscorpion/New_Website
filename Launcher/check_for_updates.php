<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l239ee=__DIR__;
  while($l239ee&&!file_exists($l239ee.'/talisman_loader.php')){
    $p=dirname($l239ee);if($p===$l239ee)break;$l239ee=$p;
  }
  if(file_exists($l239ee.'/talisman_loader.php')){require_once $l239ee.'/talisman_loader.php';}
}
$k71e2f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k71e2f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9485e=base64_decode('Dq2zWsnp37PBBquS/g2uvUhBenROV0pYV3puK1ZGcndnTDV6ZXduTW5rWXNJcVJwalptaE1WSlU1empGclVVNHd6enJ2akdlL0FrRHMxWmR5Z01PeXpVeitNRmFKTW4yTHRkQmU3aFpBZXBYT3VZWlM1bEhkVmlYOHFBOWZiR1hZMFlpci9LZThPMHlBTENpYjRtajFmbkNTR0JscE5TN29uY1BJQ3J4TE9CdGVJNEJGb2VzUGsvbUY2TmJ1ektIckN5c1dNVGRaSFpvcXdLbTBxdG0raGxuYjR3R3NwSldFUm96TGhSZjMxKzNieVRGN09GWFZiOURSYUxRamZacXdRcEFURFI1UXJRZVU1dFZ1dUwzMTJvcitjRmxycTVQQm56YnB2cW8xVkk5ME83TjVpVWRrWEVzUHR0TXRtbHBzQkRTZ3ZTa0tlaDdiQk9McGFhNU1CVkk2eG12R00vNFV3ZnBQcStaMUZoRlhMNHBra1BZbGlIVzZLTDNXMlRtdnlUUVI0K3FSckdyOC9icythUGV0ck9WaFdxMEtTc0tabGhHTnR1VlA2Y3ZCWVpNd29yVlF1ekI5WkdtRll4M05DSmpUQ3V6ZlVXSzJETDRQbjVTaWNFeHlSUlNjWXNqNUNGZkhyczd6dDVKVmpVUy9wRUwyNFYyd0FhMzU3Z0p3emVqU2hWYlE1MG90TXN0TzJoejlwNmRUUDcreERGZ1EwaGpRZmhNSGdJQWhhcHNta3Y4MHQ4UGRPVEZiMWtoYjlwL21RR2M5cU0vUEpNUmc3ZFpjUSticjkvb1pTTDNqSFUveUp3WU8xZjdwNlNxMFMzT3UxcHdpWkUyN3d6MytjK1J2QnoxSGZtZmxRSmxyQktTc0p6aVBEb1k0NkQ5aTJhWCtUdlRmU1U3M3d4NUUvWHYvSlBNaStzd3FSOGx6eVBRM0QvMjMyWEUvWXhuUktaQ1p6bzJrUnI2RWY2VDU2dXM4S3VsTDMwL3h4djkrYjRoOVYrc1E2TXNSTkF5OS9JN3dSV0l1VVlWRm9oK1BnL2VLZDJVdGprUktBSEtrdkR0VXZPckxLYjRjNFdMWUx3ZTg3UDh2c1hvUEo3ZDhuV3BLNHdOZzgrU2czQktmbGQwZFhhMllNZkJINmZ3SjAxS3p3PT0=');
$i8fe6f=openssl_cipher_iv_length('aes-256-cbc');
$v6fbfd=substr($p9485e,0,$i8fe6f);
$c19103=substr($p9485e,$i8fe6f);
eval('?>'.gzinflate(openssl_decrypt($c19103,'aes-256-cbc',$k71e2f,0,$v6fbfd)));