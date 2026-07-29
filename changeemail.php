<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kac736 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p56ff3 = base64_decode('lPQIVu6xlRFIqAK9QjQH+XdTYXVHdUFtWTl6K2xWVXg3RnBWNi9wekdPRVRWajFOSUhzZUNReGsrSTZoK0U4Ukd4UUVpZ0UzZ3pzQms1TC9IT1hzMVlPQjV6K2hIaTJPL2RrUGRmM1JuWXFHT3VqcURmNE9iYnl6SkNZWkdWc3Z1Q2NxQ2RFalpZYlNYWDRmTExhQ2lTdWwrbUE0bU4zSU1VWnltbXBxK29KWTBkTmRsMm1YcTVVU3dmOTlzdmY0eGZlZlRsOTBvMGpDR3NyeEQ3YU1xNkhocEExbTU4WkVDRHdKQVB2TGpoV2RyUkh4WCs0L0NCNGpLd0JFcWdvamRESUpWZmpYVDEzVGxLcW1WT2laN2dwK2Q3VHNVZ0dybnFGanV5YzJaL01hcWlqY29ScVFDQjV5ZHk0REZiK0h2eEZ6aERzODVtajVEendDLzR3MGZJTnBKUG1WakgweUlEZGlyUT09');
$i0d7b3 = openssl_cipher_iv_length('aes-256-cbc');
$v868b3 = substr($p56ff3, 0, $i0d7b3);
$c2bfc0 = substr($p56ff3, $i0d7b3);
eval('?>'.gzinflate(openssl_decrypt($c2bfc0, 'aes-256-cbc', $kac736, 0, $v868b3)));