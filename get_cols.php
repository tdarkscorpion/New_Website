<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8e633 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf9a37 = base64_decode('uZwUCvjMUL+RRiB2i1El7jRpUmN2aEFLWGpPQ0I3bW9sVGZ4bnh6RXp1dDRIUERkYkNObEJMVm96THQyazhUNTE5L1V6NytSeW1VUjZOdGw5NVN5dTg0ZUI1YkZQeVczVHVtWjkxSXAweUM1OXJETFEzNDlQWDdheWpxVlJlNlEyTXd6L0FYUnhKWEhtT0ZmVG5FUXlpOWpsb21uTjRGOVY4MlVFS1l5T0tPNVppcktPN1ZVdnFmR29jeTBCWHFHYVc1MksrYjRQc2czeUpybmFYVVFvWHJUemMrOEZwSk9nQ0x6RFE9PQ==');
$i1c721 = openssl_cipher_iv_length('aes-256-cbc');
$v2b5b0 = substr($pf9a37, 0, $i1c721);
$c5aa7f = substr($pf9a37, $i1c721);
eval('?>'.gzinflate(openssl_decrypt($c5aa7f, 'aes-256-cbc', $k8e633, 0, $v2b5b0)));