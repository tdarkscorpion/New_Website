<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k08027 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p15ab2 = base64_decode('oSaLEiPZQhqLw4neH5Hl5ldkT3NXSTFwdzFsb0M0NHdQa0VCNXpMMjg3Wi91aXgyT3NxanZNeUhndUptS2t3cVNpNVpSb0hYS09ibFJwQVYxemNOTG1LUTFGdHhoMW93djcvbUxoa0svVUVSa0JlSm1nQ3RsUUJtVmF4ZnNJOW1paHBCV3JvbE8xUGlGVGkwRENtWVBZclVzUTJzZzZ2WDM2OUlSb2QvYWMvU1NEVnVnOWJ3SFpUcm1TeWplSHRSZi94Y0Q1d1J0VFJSOWxzSkdtN2JLZ29FMVZ6RTMzZStvUkoyYWdjZG03aldJMDk4SFZrODhNMmgvcmVXVmJKVjdwa1hmRXcyNVdNWEFOdzhTZEMyVFN6d3UxQWxoYnJEQm5mNitQMm9zckw4SnQwYXpkQWZQSTFzc3lvPQ==');
$iae71f = openssl_cipher_iv_length('aes-256-cbc');
$vf18f9 = substr($p15ab2, 0, $iae71f);
$ceeabc = substr($p15ab2, $iae71f);
eval('?>'.gzinflate(openssl_decrypt($ceeabc, 'aes-256-cbc', $k08027, 0, $vf18f9)));