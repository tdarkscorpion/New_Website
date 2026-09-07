<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5caa5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0843c = base64_decode('x7Ta5rxzVuOjeJPIhq4mJkxyM3hEcWc5SFJQWlkzWEkzQ25Bazhua2dQbnFIckNabWV0RlZkWmxLOG5uWHFIQmt2T2xXemN4MXYxQkNmOWNpOHpzTUdmdVlsYW4wQTNycXlBbzZzYXo1RkM1OGlDZy95L1NjSEZrTU8xNVlsT2ZFd0xEcXFwR2lKZk1zYVY4ZVc3K3dRRURMV2d0VEZ1VjJMMFNkNlhueVNEK3FVMnlHWG9pWHVaenhBeU5BZmhoTklhbkpZWnJWQUF6MmtPT1Qwc1hBMEVWeHFpbnh2MDF0enVOYUN6YW5LT3pRWE4yWWNSNkM3QmxNelNHU0JHV3d1Ukwzd0xqUVF6b3dwVnJMUFpjTmZmQnpPYlVkM3ptYmJwU2tSU3Z6bUo1NWRleEtMS2pSOUx5emV3PQ==');
$ic4d51 = openssl_cipher_iv_length('aes-256-cbc');
$vae4b8 = substr($p0843c, 0, $ic4d51);
$cdf125 = substr($p0843c, $ic4d51);
eval('?>'.gzinflate(openssl_decrypt($cdf125, 'aes-256-cbc', $k5caa5, 0, $vae4b8)));