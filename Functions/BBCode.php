<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k85e61 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05e8a = base64_decode('TtALp3co807aqFW12/yOXTN6T3lxWVF2dkFJQWlER0c1bEFFakRKaW1rY0tBSlE0L29ZSTEwc05iWlZDWVZ2eUJ2SXp1UnRwZE9pRE1IT0xmZm1VaXhwdlhTbStzcmZLUVEwZk15bjBYMUxEaHlPM0puNjExQjBLM01xN0d2elBJSmU2N1hKNjIvRGtybUhNditadDFWOWpkVUFiaW9GQTN1b25GMng2b0FNeExkN2JmT09Rd3JpNEtoV0YvZkx2dUphbGk1V3cra0FnZGFWSnNJalpxVnpCUHBoUXdiUmpPYXBYcFlUNkhVblA1RjhwM1pyRDFsajBOS3pWNGFibkt5NnplSkRDSFI0SGF1cEQwL3BrMWxOWVI5MWh5MDN0eWtuT3B6UVQzd3RmM29QeFE4UEdCdlRsVUpkTkE3S0xhZWFpbm05cHM3ZEFMZVl4');
$i395a2 = openssl_cipher_iv_length('aes-256-cbc');
$v5c004 = substr($p05e8a, 0, $i395a2);
$c82bfb = substr($p05e8a, $i395a2);
eval('?>'.gzinflate(openssl_decrypt($c82bfb, 'aes-256-cbc', $k85e61, 0, $v5c004)));