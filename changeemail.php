<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5ace4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4ec36 = base64_decode('pYnZ5ViWJ3m/Wygjd/lnW3hrQlA1TFE1WXdORUF3MW1XeG90dmlJL0FPb2owVWNOQXNjYWdQYkcyMW5sNy9VOVpOT2hXMVpIbTQ1SVlvek9yMm5reFBWVWdGNWRVWEVSTUt0cm1qdnVIeG5RVlB2K0V3TUJOVy9TTlY2ZFM1MmkzY0d2NkEwbUFqSmhjaEZxUzRVY1hKYjBLZlVjVDVyQnJEb1M4VFJCVzFxck5maTZQSjJPeW0yME9YS3A2Umt3UkMvdmNlQ3dnTkVnVnJIYlI0WUxtZGtGdmpLYmVJcVhvb3FFczJHL1F4WlBIaUZ3MzQwTVNGTjArcDIrNnJwRys0TXRXdUNOTmFxaEJDSEdnU2dodE9TSS81ekNlTGNuU3hFUElyWGE1V3N4ZTQwby9vVE1mVnU0NzdhMDBiTElycldWZndvMUpjWTl1MXpVdVVuZG9FOFdWeUZlRkJPRUswOUpQQT09');
$i61dcf = openssl_cipher_iv_length('aes-256-cbc');
$v31f35 = substr($p4ec36, 0, $i61dcf);
$c46dad = substr($p4ec36, $i61dcf);
eval('?>'.gzinflate(openssl_decrypt($c46dad, 'aes-256-cbc', $k5ace4, 0, $v31f35)));