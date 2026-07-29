<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc8c75 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfde89 = base64_decode('ORJxvfftmHluHBqyJuy6QDUxYzRmTC9MbVFqcWhacmJqU2xLQSsvUmdINXFReGwzL3owUzFneHE2S3RUbkR3NTNob21WVGdwd096VHB0dXJMSkdzOGN4L3BhNlJBdS96WGc1ajZZYzFYV1lUdXFFVW5Gc3MrT3FMWEJMWjVpZHM4WS9ITEdVdjVJUkR0N21ZSU9JRU93TUt4NnBaenFpTFNqaGN6eU0ySm50ZC8zYWdldGNycXZJTXA2ajY2NDNFcWlBQmtSS3hxeVltZzBLT2lHNXZwTVRRaUl1dnVrOHk3eWZOT3piWEswVFM5K2FKeFZVVVFpSU1PL0hYUDRpKzA3cUovVVlnSmo4bUZFdXdURUtFNnpNM2F4Ym5uV3dFUy9wTTFLb0JaVGpybFZDdFBWTGJoNHhoMlVFPQ==');
$i1196c = openssl_cipher_iv_length('aes-256-cbc');
$vafb7e = substr($pfde89, 0, $i1196c);
$cd19bc = substr($pfde89, $i1196c);
eval('?>'.gzinflate(openssl_decrypt($cd19bc, 'aes-256-cbc', $kc8c75, 0, $vafb7e)));