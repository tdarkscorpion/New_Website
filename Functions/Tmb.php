<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l55a9f=__DIR__;
  while($l55a9f&&!file_exists($l55a9f.'/talisman_loader.php')){
    $p=dirname($l55a9f);if($p===$l55a9f)break;$l55a9f=$p;
  }
  if(file_exists($l55a9f.'/talisman_loader.php')){require_once $l55a9f.'/talisman_loader.php';}
}
$k83b69=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k83b69===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdace5=base64_decode('IgJoGQFlRgYe9Fn8VgWrQHFsZ2RrVWM1YTAxbDRaNlp1dkx3a0g4M3dpWHlXeVFKclhtUnN2TjgzWlJCQjhoTDdhOG5meFYyTUVVbUMwWDJLaU8wWCtjY3NYczAyMTRDV1VVY3NiRWpXRnBrbFpkb0c0NWhZTThQVVVPbkJWRWRJb3dITkxXVk5Vc3dXRzgxSFBxN2ZIVXMyYzNXSFpaREY3M2prbU5xSUFnVjJBWUNIZGxRTlU2VlQyWWplb1lNaXNRL1NKMkNJZGVFUUkranV4WkYzRC8rdklqcTBrTDFCUklJM1ZpNDFaalJqOGcwQ2V0Y2ljMko4emNHRUVua2c5QmJSNXRJR3FiemErd2poZ3A1bjdtV1FTZXBSTlp5Q2xpcFExZ3NoWCtKL2w4VFlIenJPMFFadTNub1A0N2pNTkpSNjV5dEFEWW96YWlaMzFTVnN1Mi9iYzluL3BYQWl5M3l5VmRmdmU1aHNkWjllUzc3R3dVT3hqK2xVSlJvL3dhQ3hmY0tCanMraVNTNUs5dEk1V0F1elhoYkdNRjJ5bGJPa3lZc1ptdVc0aStheE41MjI4N3hmNXVMNXhJaHZPa1h5N3IvTk9nUlpBL1l1Y1F1YTFvUE96Z056K1Y2MnFzd1ZaSlgydTRnUTYzTWcxYmdrMU1Pd0huV1BLd3lmUW56Y3NmK3RnYVBQNDRZOVExNnJmUVdnaUpnK2NOQWQzZHdSNjJSUTJ2YkpNR1FhVjgwclVndjlJMXJ3czJlZlBtNFEzSXE2MHloN29yVHh4NGJCd1diSlQ5UWU2MXVtN2xFUi9wUTN1YnMySk9XOWhRNU5pNHhkdDFNc0J5Q3N4QisxTmdrWWg5WUwvRUJvUC9rOXdnZXppSmUrdGF4VFdSZ1dnSU5mTFZuVWxMVCtURkxGL0x3Z1JoZHZrU2pncFBIWnhuREMrWW50azMvVjQ2SVpFdVZXa2FqZWtkREZtWUtBNkl1MTJBZlBZVkJHeFN0dUZ1dTFTRzNkTVhMNmhsNnJyTWFSVngwdzBlM3BzbXZwQTVaMXZPZGhHRU1KL3NaYVE9PQ==');
$i6e98a=openssl_cipher_iv_length('aes-256-cbc');
$v0db59=substr($pdace5,0,$i6e98a);
$c60edc=substr($pdace5,$i6e98a);
eval('?>'.gzinflate(openssl_decrypt($c60edc,'aes-256-cbc',$k83b69,0,$v0db59)));