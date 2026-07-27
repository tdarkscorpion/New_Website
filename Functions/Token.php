<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k354e8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd355c = base64_decode('kufadpcidNH2p+d4SpUBElN1eTZnckFlNFB1M2thenR0bXkzWTNsRHpkWUxwVDBLUjQ1ZER5MmMxUTRuVlArZWhSY2dDYTRJSUdGZWJ2WGdsT2Nma09rWTJUaG1UOGhiWlkvaFcwblBMbHlzV2xXOHF2MzlkRVJSWk9xZWoySElrYkxFN3drcmRybm9UL294RGFpWm9uVVV1UWlBb2oyQ2RZRFd6S2xmdGIxRXd3ZFhWMmVsNHpacHZYUkRQZGN6MTNRc09YbXJseUNnUFExWEhhZ25jQjVSUmZTL0hGc2FEUnQ5U0NzOGlCcDFEeXNYS09nVzhOaEFOT3dCcmpTZWxIbFF4ZCtyTnFCNFduamY=');
$if6bd5 = openssl_cipher_iv_length('aes-256-cbc');
$vdc313 = substr($pd355c, 0, $if6bd5);
$c50623 = substr($pd355c, $if6bd5);
eval('?>'.gzinflate(openssl_decrypt($c50623, 'aes-256-cbc', $k354e8, 0, $vdc313)));