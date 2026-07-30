<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbe458 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pee1bc = base64_decode('sYdx6yvWKLtlZ3sp6LytGXlhcFVQMGI3Zk5oNU9PWmJTVjhBY1BjWWpFNnNHTFQ0cEdiUm1aZnBwazdRbUQ2K1pZandTVC9mdjR4dFhINExVNHgwZ2xHOWRVc1VocmRTaDcvWmY5YWFBUFdxNnc2Wm81cmpuSkMrQld4ajdqVXY2OVo5NVBwQnFaaWJJZzl5d0NSeSswVzZHZXFPT21ZcG9uWUhEeXo5S3dRanlMMlBSL0Vxd3U2c21wY25TK1hrcGFZdExrMENkY21Xb3k4NlRDNzVOSS9keTNKTStmUitocm9jUWlEbThvTzZadHNhSlhtVzJucGhSOXBFa2ROU1RRUHZqRGUraWhQaWROTHVQejJJRHFIU2syaUlnTzhkN1BSdjc4WVIzamdQT1hQejU2WXJ3eE1EbmNQWXFEeHYwL29hR1RQY0N4dUFiMjI1');
$ifc7e3 = openssl_cipher_iv_length('aes-256-cbc');
$v47c99 = substr($pee1bc, 0, $ifc7e3);
$c9e0e9 = substr($pee1bc, $ifc7e3);
eval('?>'.gzinflate(openssl_decrypt($c9e0e9, 'aes-256-cbc', $kbe458, 0, $v47c99)));