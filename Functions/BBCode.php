<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4bcf5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4959 = base64_decode('MCUolrtIrnGMXxdboEpPSDVIMUxUeHpFRnY5T0F5bVE1ZHByWGJGN0tJbFlmcFM5SmFicmVQU0pIMGxNaTI1cjdpZ2ZVKy9iMGlLMzNCQlQxakZ3QXdpQW9oWlgyTFMrck0rTjl4S1VnbWt6WGY0R2huN0htVDhlN2xueG1CMDhyU2UzMUN1MnZ1NU5uT2xxZFVIaG1zZ2xpQm16dzRpOVkwbFcvV0FkRDlqV094SVNWb1dtUzFGMTVxT0JOT3VDU3M1Y05jWitxRENUMkVtcUI2TmpnbzIzaS9sK0toSDZhMVhEUDJuNHlWemdxQWtRYlNyVTJCUUFuN3ZvYk1UVXU1aXYvaThGNW1OT05kUkdNbk84ODZtdXNyejVwaGRMVS9sakZrazNvWUx2eTkxQWR6TU1JWjRWNkVhelBSYW8vTi9iZUFnY0Urc3lURWxu');
$i8c27e = openssl_cipher_iv_length('aes-256-cbc');
$v8d16d = substr($pa4959, 0, $i8c27e);
$cea7bb = substr($pa4959, $i8c27e);
eval('?>'.gzinflate(openssl_decrypt($cea7bb, 'aes-256-cbc', $k4bcf5, 0, $v8d16d)));