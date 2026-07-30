<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k81c45 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe16f3 = base64_decode('beQ6kuIz+K1tB3ZF6G0a/3JZeFdsZkIrdGtPN2RGT3dCWEFHbW9lcFVyZHJFVUo3RzVVV0xLM1hYSzc4TlF2UVl6VDU1czVsRFJKMTN1VHpzdWhmWUVrTjBTeFRRSFZpOFhld21GdVhVRUNoMlpGbm1IZGdySHRYV2p1R1BBajlFeExzemZGblRnV1RubmFxcTJscmtrVEdRYWRzL0RnRzQ2cEd4N2NVOXhxelNxZ2U4Wi9WdEh5RnFIMXVkZUtOck5Od1BqRlpDZkVIMmUwTjNvclVYMGhFcmpGZ0VDZkNXb1pDTUQ1T3FUQTNTVkxBbDhzUmJHWnJsTlFiS01MVWxxKzV3UnlJR0R5MUw4K25iZHlVOW5xNWlFWmMvMmQ5R2phMnFQT0tiVnRGMytZSlZ3L3NVSFJzWnQ0PQ==');
$i22386 = openssl_cipher_iv_length('aes-256-cbc');
$vdc2ab = substr($pe16f3, 0, $i22386);
$cc412e = substr($pe16f3, $i22386);
eval('?>'.gzinflate(openssl_decrypt($cc412e, 'aes-256-cbc', $k81c45, 0, $vdc2ab)));