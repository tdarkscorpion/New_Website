<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc67ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92898 = base64_decode('YMRBNFr/nk6my7yLaxGQlFpTekVJcVRDNUJiTVZkc084c2FrY2xUT0FKQ3dqaTdCeXo0OG02dGZVeUxwWkNPby9lKzRrNXBjUW44enNXYlE5K21kUCtpUlRhRmFyQzVZd2hZYXJTanlwZzhHT21iS2d5TVdOUktmcFFFa0R0a2ZicnlvalZXMGhoaXN4SWVRTkhaaGJES3EzZG5PR1pkWlUxcnJCdzBJQi9HUWMydExWcDhBSEhnMDB4STd2Q2dTN1BVVnV6V1lWamJkNUVlMVhHdXlXa1hybVIzYXNUVTdwbUl1N2h1Qkc2TEd0YmF1T2FPS29mMHIrRjRMU2ZIVDcxZU0vdXJZbkFTYkxhbStZTDZZV2Znd1ViZjYvUDdMNEhvSTkvY3hXTHo4UnBEUlZ4bjhzTzE5SDRCT0ZxSkkwUTl4NHZkckVnU201YkJoT3huQTFUZjZJblZZWVBSQjRyODFRQT09');
$i673f6 = openssl_cipher_iv_length('aes-256-cbc');
$vbef59 = substr($p92898, 0, $i673f6);
$ce9074 = substr($p92898, $i673f6);
eval('?>'.gzinflate(openssl_decrypt($ce9074, 'aes-256-cbc', $kc67ba, 0, $vbef59)));