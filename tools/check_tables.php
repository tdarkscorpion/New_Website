<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb2587 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p45f86 = base64_decode('Jd0Vl8kRtizA9Y7myU8uYGYyMTZFanE5V1RLVXprNVlEVDlMak45bTZmZ0tJd3ZEcVZxcHNiMlhCQzdScGdYR01qSitXTDVHYjJOM3JXVnFoWUR0aGJqNFlsOWE5V0lnMEdMbFhOaDhtRWN5WFREeEZMVG5QYi9XbTM4QzYyeG80R3RRRDJhOU5BQzhjekNYaGR5K3hnd3RNY1kyMzdQcWxPSVdYY3VOb25seHRselhiOUl1cUtVQWVsdGU2SitNcVZCQzJrc091VytQcDJ0ZQ==');
$ic8f22 = openssl_cipher_iv_length('aes-256-cbc');
$vf6327 = substr($p45f86, 0, $ic8f22);
$cdfa52 = substr($p45f86, $ic8f22);
eval('?>'.gzinflate(openssl_decrypt($cdfa52, 'aes-256-cbc', $kb2587, 0, $vf6327)));