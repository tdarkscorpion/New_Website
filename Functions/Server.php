<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke287e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8be6a = base64_decode('wt8wWIoyrvx6mjaKRXx5nkVNZWI3SVdQY0dZK0xnVmdEWFFzdzJ3UUVWNGVpRXZuUVY4OUpXTHpOdTZpaGZSTUtVaUZCdzFjbXQ2eW85djJqWTFDazQ0NWxJVFhZRkxDUE1pcXJ1ekMrSVkrQ0ErM2RtamFsMVVOVEVUcjRVYWZVWHVUazZGaGpZN0J3ZHd2dDkxRXl6dG1sVS9nYW9FL2pwQVJBNW9ncUxJY3pTaGlmZDd1NkJEby9DT0ljTW1Ma1I1d0Rsc2x4RDhuQkRCWTRNb3BZbXFrTkg0N05sNHZWWG4zSm80VHZFSlNRMVp1Mys5dENpSG00Q3BleGxSK3hwRXZZczJyM1AyYzlEc2NxNjg0RFpDbkhZbHhqMEhqbnFoRnZpa1JHWEpib1IxYlRCd2ZEZTZpbmM0PQ==');
$iacdb3 = openssl_cipher_iv_length('aes-256-cbc');
$v12917 = substr($p8be6a, 0, $iacdb3);
$c0bf5a = substr($p8be6a, $iacdb3);
eval('?>'.gzinflate(openssl_decrypt($c0bf5a, 'aes-256-cbc', $ke287e, 0, $v12917)));