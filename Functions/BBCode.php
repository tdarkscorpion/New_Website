<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k865bb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pec18c = base64_decode('T57cXXt90walchlL1/FLWndTZnl1UjBOSUxHQ3lrbzg4US9hVm5lQ2RRQ1NDZE9iallwaTV5bWc2NXYxSG5WeWZHN0dVc2E1M0ZRVEZlSjJGU3A5UDMxN3NvYm1VRWg0ejhUbXdHMWJ1dml0VkxBYUIycDl0dE1SVzVtdXdxS01obVUrd3J3b3RTd1BjbyttTHpNTUhaTUwwcmQwRVhCWmlFV1dnd1ZnelBNcjM3a0pYNkMyVGo5aitQWnJKMmFNUDZPT3JWM0lRWlBkbUN5ZTBQOXVjRUtrTVZhYkFCYUUrU0ZxTnZ2NHk5cHpnaDlYT2JBeEZlZnZRWk0rQXhhTHJPbGdvM1VzWEhxcFB2QUhDcUNJaTB3VkpXbXdNTE0wVHMzLzM1cjk3WEUrTHEzTmtpZldYc3k2MmE0NUxtNk52NTJOVU9iZ0Nja2p1dnZj');
$i588a6 = openssl_cipher_iv_length('aes-256-cbc');
$vca51d = substr($pec18c, 0, $i588a6);
$c07613 = substr($pec18c, $i588a6);
eval('?>'.gzinflate(openssl_decrypt($c07613, 'aes-256-cbc', $k865bb, 0, $vca51d)));