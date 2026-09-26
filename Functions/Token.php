<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8a0a9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p94e5f = base64_decode('b4osgWWfjT6qLYWiI3I1QllhRDF2RWRvNnRBci9EbTRsQ2U4dUpLMkxkeXBXVCt1Zlpwd254eHBUN3Z5eXN4aHdPU3JWWWo2YzlnUUNDOXpWMVNhV0c4VGs3bW1hVGgwMUZOUmFyN0c2UTZHQTVyNnFHU2FlQzBEQnVWYlF5MTJoY1hDV0tTL0pGeXlmYlNkYUFMWDYxcDMxOXFBMitjYTMxeEJ0b0hodWZJRTRIaisvZmVHRjRYYXRiZUZTUnlzcFpZbW1aOHhPVXVXRUpicm9wRk80Z0QzOXdTOWs2ZksxZnNCZE9mYUlsZ213YkVWSFVuTktrOFowMXFycHpJaTRCckNWcFpvRXlPMGpXZ2RvZWhJWE9rMXhaWGh3M29MK2Rsb0ozdGNBQ0JCdjc0akxpRnZNbWh3ZlViQUE0UzdvYkhoanpqbmVwWFVscTdBZTBKVEV2Tkk2YjJIYlp1Sk5yblFkSHdRVXBLNit4ZVZRVm1KWjZVOVNrZz0=');
$iab0fe = openssl_cipher_iv_length('aes-256-cbc');
$v9d917 = substr($p94e5f, 0, $iab0fe);
$cc04cc = substr($p94e5f, $iab0fe);
eval('?>'.gzinflate(openssl_decrypt($cc04cc, 'aes-256-cbc', $k8a0a9, 0, $v9d917)));