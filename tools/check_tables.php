<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf74ec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p181a6 = base64_decode('IbJ8/njicyL84aeYl6Ii909hNTBHVDdGaGdadks4dEFWcW1KSkNuc3IwLzRqeWJNU0twTDk1VjFZVTduZTMyNzY2Tk16VHlGeE9Od1BLQTJabHFRMmkzUlhNelBZTkQzc0JqMHF4T1JYNmZ4aml4TE43SCtTUHgzQko3aGtWOFU5WUJQLzhqOUxaOWk3RmV1aGNPZFoveFVHcmZEWlNJSmxoR0dUMTdaQ09aOWYyS0U1Tmx0aDdQOTVyS2dlSUdtNTJjOWYvQ1lOZjZhTkMxUQ==');
$i004a5 = openssl_cipher_iv_length('aes-256-cbc');
$v08cf0 = substr($p181a6, 0, $i004a5);
$c6b250 = substr($p181a6, $i004a5);
eval('?>'.gzinflate(openssl_decrypt($c6b250, 'aes-256-cbc', $kf74ec, 0, $v08cf0)));