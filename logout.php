<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2fce5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p33cc1 = base64_decode('sPtxXpu11RmSV3VucfOAKXRicU9hczlkM0tpU1ZjRUNGSXF0RWdkVCtrMUJ0K3NtbGQwaERWNWh4K1JoYmpCd3lCVjQ5T2ZxaTJ2VndwOHNXM3d3K0NiS0cvZXlZUnNyVUI0aHhCR244b0FZbm9ZSlc0ckZHWGRoM2tjPQ==');
$i9fe5b = openssl_cipher_iv_length('aes-256-cbc');
$v5d773 = substr($p33cc1, 0, $i9fe5b);
$c33376 = substr($p33cc1, $i9fe5b);
eval('?>'.gzinflate(openssl_decrypt($c33376, 'aes-256-cbc', $k2fce5, 0, $v5d773)));