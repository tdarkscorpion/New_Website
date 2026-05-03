<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0133c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1bafd = base64_decode('iXw+qK7oeia2VYU7ePgtHjhIMDF2dmdpeEpDNzYwTXRReCtHVU1UL01wUmsxdjlyWXNkekdPcHUxTjlGY0tEYTltN0Y2Vmt5YzNrVGRWMkg3aFhKQWZzUFdmcFZoc25hSTkvQ3J6Z3dRUHZ1QS9PaHNxYVFaM3RYN1AweVYzejVtUVdETW9TMDdrSHFGTFUwNGVHZDk5OGRpekhXMFhzRm80RjFSR0hPVGMrdjdlY0tid1ZoTVhtWDhPYUR5a3BTajdTcmkwM0hOY2M3ZTJsb3F5T1hYcUVrT3RPUGVDdFlyRnFYOCtGeDR0UVYrTHBXTzhSNDVFamtrcEc0eDBROFNkYVdSeUdnWDhxQ3d4RUlEMGIrbFlZU24reGY0ZzBFNkQzZW5VL3Q3S21jRXQvSzdkWC9rVmoyYXh5QTgvd0M0Q2NNNm5xMExoNGdDRkUv');
$id0973 = openssl_cipher_iv_length('aes-256-cbc');
$v74f9a = substr($p1bafd, 0, $id0973);
$cec96d = substr($p1bafd, $id0973);
eval('?>'.gzinflate(openssl_decrypt($cec96d, 'aes-256-cbc', $k0133c, 0, $v74f9a)));