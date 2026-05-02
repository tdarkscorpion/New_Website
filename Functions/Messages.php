<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1747f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6fcda = base64_decode('O/0HkdGNleebcrNK2ME/9UU0TENEbEd2VkpFbnZLdEFWY01FVHRJQm1xRFdSeFhzT1hrUHZFSTR6Q3NFRE1LTFRxbDlsdTk2NVpUM3lRTUs2VXYrQ3hxaFo2d1pTaENKMmpvRmxnbDdBNCtidHZKQUNSNGFQNmVCZGNybTIrRm5FNUlPUVpxZVpCdGdXenZtVDlicFBMMlNkcklhSUtGTllhTmlXc2V6NVQ1SXdVb1RWOHNCa1ljTzcrUCtyakVOcFFpMlVPcGprZzRYOWZTeFd3eVBUdEdNdXJxcXBUNXBxQ245eDE3V3pCTkdEWVZFcEY3dTgyY3l5RllzTWpTUWNFamJPd3ltSU0rQzAwSFJEdktBbHEwai9sUllTamdMZzB3N3R3WXpiZ2h6NTJHcjNVQjVmSnZzYWZBPQ==');
$i6eb19 = openssl_cipher_iv_length('aes-256-cbc');
$vf53a3 = substr($p6fcda, 0, $i6eb19);
$cddbbb = substr($p6fcda, $i6eb19);
eval('?>'.gzinflate(openssl_decrypt($cddbbb, 'aes-256-cbc', $k1747f, 0, $vf53a3)));