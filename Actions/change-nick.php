<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7b53c=__DIR__;
  while($l7b53c&&!file_exists($l7b53c.'/talisman_loader.php')){
    $p=dirname($l7b53c);if($p===$l7b53c)break;$l7b53c=$p;
  }
  if(file_exists($l7b53c.'/talisman_loader.php')){require_once $l7b53c.'/talisman_loader.php';}
}
$k32d8c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k32d8c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe1b4d=base64_decode('EqMnAeiL9+Jw+YpeNIqQ+3Vua096RDljL3NmdDVaYlhSeVZNVFZ2aWpEVzBpZTF4REJvMzRFVWduUjNsRDRWSUZYcEJzbFJKQVBncnZQOGU4ekJjSUNNUjlZdDUvWHAraFhKMzJva01jS09RWUJ1Sm9Ndnc4UmlLd3czbXp1YnVPUnBId1dQRFl3aHMwUE9UeUdyaWx2U0RScXI4clJGZ0Nnbmc5UWVlanlVSUk5RzkrQi9FL3FLWUswbWdHT21vZDZ1NCtCeFZ4b2M0WVE0YnUrU1AzVlhSR05pVXlVdS84Q0xDQ1o2K2hQbWhwcU1kU0tJbi9QZzJZK2x6N3hLQWQvbkJJWGppQ25pMEZNSWJZQlpPRWRsT0w0dDBva1BnS0FRREdYRkNzMHhHelY2dlcrbDg1Y1JiV0t2RDFnZEkyTUlwbHg1eDFNWDh3MXByZCt1Sm9YWGc3UldGRGtZSEZoMmJMOVMzMlZwYUtFWWwvSTlZWm9DTk5YR09OVlhvdjZ5aTd1aE5YNUlGSU1hbWxjVWMrcDAzWUx6MU1UM1ZicWJFTEpKanRxUHB6anRsdG81VHhKK01iNDVyclFWNFZBRi9obnZoUEJSQU5QOWJRSDVkWlpKWUx0SzgrVjhiU3ppOVpzdTduQVJ1NFNFRUUydkVYVjk2cGFLdEdqbHo0MUFBQ1dWQnU5K2ViTXpVTkJRZWhvUDRpTHJObzVraU9JVWRRdXBGTFAyV1ZHckw3VnYxMTRWQk5jQnpaNmpKUThDK3I5emFzUTgrZWh3OG9qamozbWFHVFNCVSt1S2dpMGt0dHNhck82YlBFUGJTU1JvRVFtVmU4T2ZSUnZ6VGJzMlk1MllGUFdwcUhvekVMU0xwSmVUVm9aSDFSWW1NeXBxV3J3WGdEMUJ3MzlmQ205RGRXNmFnWTZraDVXYjFTdTM2aW1yR2pzU2hhM0U4dEs0T1NxZGZHOTZmR1VwUEEzdW1CRUpHOU1EaWVnY2FNRWlNT0ozN2Nvdz0=');
$i6e78c=openssl_cipher_iv_length('aes-256-cbc');
$v70e77=substr($pe1b4d,0,$i6e78c);
$c7c7b7=substr($pe1b4d,$i6e78c);
eval('?>'.gzinflate(openssl_decrypt($c7c7b7,'aes-256-cbc',$k32d8c,0,$v70e77)));