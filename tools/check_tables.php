<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c029 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f1e2 = base64_decode('dKpmySKRHpq8NRRqLlgn0DFvYkhaN2N4WHQ3N0dKanJFU2N0OHpxNEpqaUN0RFV2dHAyQkxqaEhWOUZXdVFyV1dvU21NaWtBYmdZQnpGMzBsWDQ0dXpjeU1YazZIcDlVdFBlNG8vYmhSa2I3UVNyTEVzZVkraVVmMEdNdG9DQjdUNXdpTDdibTFtQmtiU0cxOGVQbXpoRlIyUEhYSjYrc1M5Rko1NFJHU3BWbmh0Nzhrbm5yZ2tiMVNsNklVNVlmUFl5TzVZM201enI5ZXJjUA==');
$ia08e7 = openssl_cipher_iv_length('aes-256-cbc');
$vde35d = substr($p8f1e2, 0, $ia08e7);
$c34992 = substr($p8f1e2, $ia08e7);
eval('?>'.gzinflate(openssl_decrypt($c34992, 'aes-256-cbc', $k8c029, 0, $vde35d)));