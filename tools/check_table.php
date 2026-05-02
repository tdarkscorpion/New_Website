<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k13280 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd1481 = base64_decode('S6Bd9XblwODpTS71wl4vXWxjUm53L0JKS2xKU2hiUVozUDNTUU51S1NlV2JSdXZlbzd6LytwRTMvRDNaczhGd2JScUl0STVCNVlDTUFFcVRPMlUrcDhyVys2L0lYNm5rWDVjakdnNWF0MGZMMUM4NGRTVFhjNkkwd1V5akpaSVAvYlgxamsrd0sxNnlOY3BKU05QdHozZUw0ZjlCa0YrbHhPVzZlc3d4OUtLRjdwUEtPU2llRU1laDdIZWJoTjc2NUxySWRPQ1dIdDZYS2RaM2JZUGhja3EreE9FRHpzbi85T2ViVWtmbEZmaVREWUxJOUJvQ2c5WXZBSW0welZKcFJJelRURk5yQ1dFa3MwUE8zcitrNmlPQ2RUV0k1Nlp0emRjTzh4c1ExS2dhaDlKbHFLb0p3ZzBZUmR4Ti9jTjRDNzJ3Skp3dXgwZHZhTERG');
$iff540 = openssl_cipher_iv_length('aes-256-cbc');
$v8d37c = substr($pd1481, 0, $iff540);
$c4bcb8 = substr($pd1481, $iff540);
eval('?>'.gzinflate(openssl_decrypt($c4bcb8, 'aes-256-cbc', $k13280, 0, $v8d37c)));