<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3d23f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p58707 = base64_decode('S0kNXI7eegpOSXzBmbrkcTlZWUUwNDVoUmMwRWd5eFYrdG9uUEhMRHNMaUpTZFZKQUwzQ28yemxIZlV3QVFYSnRYMVZwb2txOE5wRlF3QTk0QUxWci9Rbm5FWlFpdEpXMmp4c2dnYjVPY2RvcVFiYmdhOG9DZXdMcGZ5dWpnRDg5WkdWUGtiWlh4NVFMTzhrYkJIU1NLZ3Z3d0RYTmZoM0dRc2FSd2VqaWJ1Q3BmOTg4ZU1GdG56TjAzTTMxckxJQlc0MUE4ZzgxZUVhV1dWaXlpVlJ0SHFpcUtGaFFWalV0aUV1OVhxSzRIVXdGblVXSTZ5QzUweTJra3JENmtXWnZlQWRldzRobjR2eHh6TTR1QnYyazVDclVuTk5aajJTTURRWlFCa2IzSWZhUTVQNWVLMzl1K2xZcENxMWh2a1d6QTdMREt3Nmh2R1FyV3R1YzBOUTgzcUpsS2hTOGdsMUx3NHg2dz09');
$i1adbf = openssl_cipher_iv_length('aes-256-cbc');
$vadf49 = substr($p58707, 0, $i1adbf);
$cc5e14 = substr($p58707, $i1adbf);
eval('?>'.gzinflate(openssl_decrypt($cc5e14, 'aes-256-cbc', $k3d23f, 0, $vadf49)));