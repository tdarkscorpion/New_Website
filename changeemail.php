<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7dd7e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4350d = base64_decode('nENlKgWfugJE+hUhGaBcw3BLQ3lOZDQxNmkvMmNjM2xOM2hoZk12dngxVTQ2WHZZY0NvNUJobVNuNnErMlhkQ252dlpXNEM5dFpUbjRmOUF3UDZtVEo5akFZRDJBNGRENDYzWk1nMlVJVEJ3ZENFSStXbllhYmg4WkwxalMxaEhjNlNLZm5Ba2JuZmpReldua0dlWkd3OUx5YTF5TXlTVDNpOElqRkMxRWg1d2pOTEFSV3N0ak1kdFlOTFEyQmljWjV4b0tyTW13WTlsRDFhSG5pWjVlTzk1N3hiSktkc1UzSDh6UlVNaTNTb1Q0eVhOVm03ZUlsNm92UGgxZmZiZDVramtlV2hyQUJnM2U0N3kxSjhsdk1aUC9BZDV0WXJXYkZhZ25CblhrUkJZNWJ6MUJxYjlUSHhydWpPTmo2UWw1cGp4bU01Z1p4aDMvYTJCS2dsQ1YwSzErZDZrcVdPcHVYSmp6QT09');
$i06d77 = openssl_cipher_iv_length('aes-256-cbc');
$vb6841 = substr($p4350d, 0, $i06d77);
$c3d87f = substr($p4350d, $i06d77);
eval('?>'.gzinflate(openssl_decrypt($c3d87f, 'aes-256-cbc', $k7dd7e, 0, $vb6841)));