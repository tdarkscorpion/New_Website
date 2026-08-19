<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k63b35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6d1f7 = base64_decode('7GCdIPCHZwRENuXWavKfpjF1dVZVeFZHeFlqVERtMmdhM1pVYjZwWnZ5djIwcGp3RFduR3QyVE10TzVDSWRINmlHZnZ1NUZsVjZvRVpkcjJhY29nNE5rSmMzUFlTeUdhdjNkTjIyaXFEVGRFYmYrNnVDZjhTeG1ucTNSZThmZEk0eXc5WC9BaEhSNENGQ3dFMFdTRnl4T2t4cktBRzJHYSs2MVRVREpqYzFDRmNRa3V6SWVaTGd0aGFlVExCcExxeCs2R0hrb1BWVlprQW02S3FGQy9QcVpNQjFXd3gzaktTbkJNUVR6bjBDRVIxb1BydjhzZnQ1bHV6Q0t0MFZMWGpoNno2NmdZUTF6a3pybE5LbzdHazVUYTJXQkNTMDRNZWZmOE9UNWlxb04ybSs3bkZqbmxlbkVUdy83OHJFVHR5QmQ4Z2RWWk9RUWVsaThXUE9DQW1hend6OXpLSEhCUnFzK2E5UT09');
$i45510 = openssl_cipher_iv_length('aes-256-cbc');
$vb3c2e = substr($p6d1f7, 0, $i45510);
$c54b75 = substr($p6d1f7, $i45510);
eval('?>'.gzinflate(openssl_decrypt($c54b75, 'aes-256-cbc', $k63b35, 0, $vb3c2e)));