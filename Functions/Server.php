<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfd8ab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4f4b4 = base64_decode('72weAvvQOKTGVjSFpXl5xFdkV2hQSlpUWEYyMkNkSTloZnphZTVFZTNmaG5XNytpTm9nemZQM2hEQjFxSDY5dWZHVUk0ZUw3b0I4SEVISXBycGowdmdGZXpFd1J2K1czZVhkS3lFVmRQVnNRcDJmRUw2MzVUWDJOcEo2bnVjKzkzVUpEbCsvOHpkUEovYkx1NXpqVTdEZWQ0QmhTcGZheFhsbXMxSzI3dlN5anFENi9NNEJVZkQ2UnhCT2JIei9QU3NJdi9IQzdjTW9OT21YSVJYTlVWVlFkZko1RERkL1ZEQ2tkVjZtQVBaNVRQT2pCQUJJd0dTNENKRnViWkxwTllDaVg4SlBJb1dIQ0o0SEpJT0Q5TU9MaXQ5RFR2M3FjbVltMkFZQTIyWUFiS0Fmcmdxbk9JZDhsbk9RPQ==');
$id4342 = openssl_cipher_iv_length('aes-256-cbc');
$vd24b8 = substr($p4f4b4, 0, $id4342);
$c06a4c = substr($p4f4b4, $id4342);
eval('?>'.gzinflate(openssl_decrypt($c06a4c, 'aes-256-cbc', $kfd8ab, 0, $vd24b8)));