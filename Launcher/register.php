<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l776db=__DIR__;
  while($l776db&&!file_exists($l776db.'/talisman_loader.php')){
    $p=dirname($l776db);if($p===$l776db)break;$l776db=$p;
  }
  if(file_exists($l776db.'/talisman_loader.php')){require_once $l776db.'/talisman_loader.php';}
}
$ke0738=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke0738===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5c987=base64_decode('0DREnkvQVA1sjyhdgBfX1EdOYUxKWkZqMFdvd29wTG5HclV3L1VJY3FGbUwzVmEyT3JkOVJYS1dvbVE1U1NpYjZzNnZFNytxbU1qS3B1YVlYVGNiWUk2Ti81VG84WncveEdZNHdaL0hneE9vWUxTNnVVdzA1WTBwTXhqSHFrdkZhaDdzUFRRQnE2bU9rdmJVR1dYdnlhbDQyRDkzRXdmVHdVNEFuZHdzUWthR1Nja1JkUXBxWmNWZTN6bmdGeVArSUhySEcxQ2RxU0xqZVkybFJNckdSbWJLa2tVRGtrUUo5bFdtRVYrM0tkK0hHaUdobEdYckErR08waHd5M2kvMmVMTGFXTU0wbm1HK1FpTFh4Zzc3bXVxMFI2Vjg1cTVlWE90QUt1bEpqRzlQdy9jV0RzV25TSEhzdm8wQTlyQ2hHQzJ4bVlUaUdIcXE3RWluVlFHQW43SFV5UEZldzlEc1o4NEN4UnU4Y2xSRU9DUUFPbjRKN2RocXh4eFVKaWtqQ0E3dWRrMk1PblV2Q3BORm42TEVBenpTOEtVUWRZdnFtVWlmQmpUbkFId25xb09QNVlRUmUwMlE0eXY4Nnd0UHZBNTNHSitITFNoNkNYTzJHRzVPRklENHA5TnBQMmFRMm9yTk1YOGtCVDAwSHdFN1B3UDZLN0hWNjdVYkFvR0VYL3BHUDBENzAxc3BVT3g5MDhHZUl6b1NFRVhqek5DczdSNGNUbHorUzhGaTRIMS9BM0lINCtDazV0WlR0WmZTU1dmcjJzMU5abGJxamQ0R2pKdSt6aXRVQm91UmswQjRWWkZyQXpyTFd4MFZVL3RWRFNzNXlWTEZwTFJwZmF3WnZhbWlGcFQ2VmRSOHludnNlSW5ENTlEd0I4TDY2aEtKWHlZNkZ6WEdDT1p0aEJpRldMakZvVGU0dGZabnQwOGZvYno4WWhzaVBaQTBENVBIY01YZlZiNlBLNmpXNUkwNGIxQktXNVYyamVYa2M0UVVrYk9xLzJBWXZBVHV4V3VUS3dZRng1WEhXalJpZkcrTEVPaDR5RFkrTTc1MG5yZjBPRUFBSDVaZWthVGpFak04MitWa2EvSy9SQWtjcjB2eHptaFhUR1FBSDFoeENPYjU=');
$i17000=openssl_cipher_iv_length('aes-256-cbc');
$v87a3a=substr($p5c987,0,$i17000);
$cfc34c=substr($p5c987,$i17000);
eval('?>'.gzinflate(openssl_decrypt($cfc34c,'aes-256-cbc',$ke0738,0,$v87a3a)));