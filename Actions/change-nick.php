<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la649d=__DIR__;
  while($la649d&&!file_exists($la649d.'/talisman_loader.php')){
    $p=dirname($la649d);if($p===$la649d)break;$la649d=$p;
  }
  if(file_exists($la649d.'/talisman_loader.php')){require_once $la649d.'/talisman_loader.php';}
}
$k58ca0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k58ca0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb113a=base64_decode('HPrS2lfHmpjNcFHVdw31R1lKTnBaZ1Q2MUlUWVVFdVRGbFJUZHh5YmxFMjlyaEJEcjluV3JES1dZYVM0Ni9lVEk3cU9qZEdQY05ocDUwbmVKalpXenY1VTF4M2pFZUx1TFJveDNzcDRhdzhQTjIxUGFiMnJuNDZZTTd0SytQaktSL3J3NzY4N1JEZGtjQ3dGNWZhM2hGUDhsenlFT0t2NUZqM0wzY1FGQnhRenRtZStJUUR2bkNmOENXLzhqMURQc2lxS1RkcUVRZEV3MVZuVE1NQTNUeG8vR0J0Tlhaczc4US9RWVpUdHFXUHc5aVcrcXQrNHVDSzJrbEpiakxoRExZNnZKNE8wRE1yZ1J2aHZ6TURzTDdRUTBlWnJNdXZCSkxCUzJ4NGVRWERzRlF3YzBlZUtHdVBCZ1Q4UERaRXl3NHBzVERZRVNiNlFhQkE4S3lONlY4NWRnTk0zNlA3cXRsYzN4TDRKc25GelJ1OGFNMW5ablg1Q0hvMXVtSUdJT1lqZGwxQlFmSXgxVTV2dVZwYkx1a0FRL3pxVUpoTDcwU0QzK3NzRjliL2pNbjUzUEw0V0pjOTNKTXNJSElyK1pzM01YTFJGVkRFN0V3QkV5VXhtRzRzRThRQWhNalpIakJrdlpQdHVMYlBiYWJrM3ZLNTI1MWVGcWVMUTdWUzNjVzE0c1Z1VEhVdWpGMk9peEFmdUFXVE14dzM1dENkdnA1SHlnVmJuUkI0ZytmaGFDbytUMER2bUJ2SWxjcm9QSWU2ZTQ5aXJxeDhnK2IrbGNHaE1hNW9xWkc4ZDJqaGJZVXUyNTA3Um1ET09IbllxN3A1SWpIUGppaXRhUGh1U1RvbElaQkF5aEhYejRCK2NrM1lWMEMvdERFaC9keHZ4b2VQWFJiTDc5WStXR3EwREQxUXYwODNtSDQxTnFBQXl2aEVuQkN5d2Z3b1lRQU9ncHgrd1ZNRGl3T2ZxREVGdFd2SmpJRFMvcktyUjFBb3pNVkZKNkc0MTNlUT0=');
$i72041=openssl_cipher_iv_length('aes-256-cbc');
$v547f5=substr($pb113a,0,$i72041);
$c10bdf=substr($pb113a,$i72041);
eval('?>'.gzinflate(openssl_decrypt($c10bdf,'aes-256-cbc',$k58ca0,0,$v547f5)));