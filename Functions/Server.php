<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc5650 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4bf5c = base64_decode('mRLuTC0Ji20yVaT7H/+YMXVpRFBlVm4rNHM0aVVMSEJYZkloV0YzMDJPRVZuVWZQYitpaDYxNTVFK0d1Z3kxMEp2cHgyL045MUlCK3JYYzR5TTN3bjlRYldJa2U4cFFMUlZwVEtqd3lIRU03bDRIbkVXUWxTZjNwNVRMK2hqSEFaWTJpcFhZeDk4cU5GNEUwYU0rb1dMZkRSeGc1SUZ4Q1Y1c0ZOc1dmMFJEa0FQZjR6bC9xWGZ2bHk1aUZIdUlwcjkvUTdJQ1BHYWFXcFFEdFhiZW9pejMvamcwUXdTUjZRS3pxYWZsaEg0alAzby94Nkt0UlhCaWVhUHMwdWZGVmRBYlliMUhnSXc3WWk1QjJmbGhMMERDelJmL3JNWS9sU1NNeEUxV2tQRm4rMjN4ZnNNR3Zna2ZNNXYwPQ==');
$i783ff = openssl_cipher_iv_length('aes-256-cbc');
$v521d9 = substr($p4bf5c, 0, $i783ff);
$c1bc84 = substr($p4bf5c, $i783ff);
eval('?>'.gzinflate(openssl_decrypt($c1bc84, 'aes-256-cbc', $kc5650, 0, $v521d9)));