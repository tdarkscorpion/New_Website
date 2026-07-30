<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k776c6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p61a26 = base64_decode('G8IW2ie869bYSZ4uxfDO2mRIYnFpYkxSWUh4L2FkdjdXYWc0TE10UUlRR0tKbEpWODQ1UFVacFQ5RlgwVUJZdGprNlF3YzdvRUxTS0oyWmwzS2ZnTEx5V0ZpOGUxT3lEUTh6eE8yeExZWUF6L1VEMldGdEdvKzVBRlg4PQ==');
$i76427 = openssl_cipher_iv_length('aes-256-cbc');
$vaef60 = substr($p61a26, 0, $i76427);
$c181f1 = substr($p61a26, $i76427);
eval('?>'.gzinflate(openssl_decrypt($c181f1, 'aes-256-cbc', $k776c6, 0, $vaef60)));