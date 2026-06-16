<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd27e6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pedb22 = base64_decode('OFU4Lw/R5Ow0lRFW2ITAZUFobzY0bzJ6eWJpM0k1Z01uTHlUZ252bUpnSXRXOExWdVB3cHJJOGpycjcwWituTEM1WU5xQ1NXcjBIQU42UlZQSG9TdmZrRW04bG9XRXI2V0VFRVBOMjUveVR1ejBsazdpNmdVS0ZPWGl0eElOMmZ0UGJ5Yi94Mm03cHNRK0wwOSt1NVdqVFh0ZlE3NzlONENwN2NoZXhPSDhGTE9jb2FIeGRlUjczUndKei9lcmJLaCtxYlVlZU9EbjZxYWJrRjN3ODJ0MnNZcTROUWxxMkl5Zy9zeVpYS0w4RVViQXhCUW15QkFhamFPRkVIY01zSzRsZHE4QkE4YXhiWFg5cXE4YWRMSjNBUk4vS045U1pLTXV3SEZwZGdMcVZmZlFQc2tzNGROKzV0bGwwPQ==');
$ie85d6 = openssl_cipher_iv_length('aes-256-cbc');
$v7dcbd = substr($pedb22, 0, $ie85d6);
$c19854 = substr($pedb22, $ie85d6);
eval('?>'.gzinflate(openssl_decrypt($c19854, 'aes-256-cbc', $kd27e6, 0, $v7dcbd)));