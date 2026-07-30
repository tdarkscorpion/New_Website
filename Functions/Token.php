<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf162b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p126dd = base64_decode('opVA6vv6a0X+/c6860vnd0JKMnJDWXVubk9YNk41YkZ4VTQvU0pXcFZMUWk2OUhJYmFodVVyWFV6ZzhXMzhVc3JNeEVHeDlvUEhCQzhCRkFCOEdrY1dPcVM1RjBPMVloMEo0c2J5T1E4Tmo5RTFzOE5rTmJwR1hvOXlqQW5qeTA3Y0M3M01FWGdJT0gyVmhVZFNNWnU3elMwYmpqY05vcVJjK1FScEJ6MHNIaloxUDEvWnVyY0IrNUxNVVk5LzF6WVpvZUpUcGJtQVhQcXlmQk5USmYrd2dXdlBKS2VwTjdsRkVQZjBQZVZGSW9oQkNVR0xFOUpINUQrYlE2YTdvVWZVdWhJVFdtaDh3bjAxT0c=');
$i883fb = openssl_cipher_iv_length('aes-256-cbc');
$vf5bc4 = substr($p126dd, 0, $i883fb);
$ce9090 = substr($p126dd, $i883fb);
eval('?>'.gzinflate(openssl_decrypt($ce9090, 'aes-256-cbc', $kf162b, 0, $vf5bc4)));