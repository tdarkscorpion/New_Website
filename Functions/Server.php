<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc6add = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p041ba = base64_decode('mT5dWqPUopIe6Dw6h9LBkFlCbVd3QndUQnVpcFd6SUxvb1lVR3lmYW5aUGZYd0NrKzdHMjFxNHpRZk12Mk9Pa1pJOEZsTHgzK2NLYmxmbkVUZWVlMTd4Um8reTF4UnlzZzc2OHNQeTVNa1FkRVl3SFVtaHlPOXpJYlBYUExwUEZ0TEYyQWtKWS85WHQ5K2p5QTlXU0syY0hxSDJKdVRteFZ2bUNQZi9zOGdzVnBoTGw1TXVURllRQWpiTEJ3TlNNeWpZQmMxUkxLYWZuRGJoMzlxUFBtRlFlT3k1UFNzL2JHWCtFTDBuUDBWblhsYjkvSzZXdkhuT09FaHRIb2RUdy8yNFdTeDdzbEtQRDBncXh6akJJRTdGc2t2Q3ozdERxM0VTSlF1QzBma2hOMXdvc1craUZ5RVU3M0NBPQ==');
$if0f7b = openssl_cipher_iv_length('aes-256-cbc');
$vc8b92 = substr($p041ba, 0, $if0f7b);
$c19473 = substr($p041ba, $if0f7b);
eval('?>'.gzinflate(openssl_decrypt($c19473, 'aes-256-cbc', $kc6add, 0, $vc8b92)));