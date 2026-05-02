<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k37301 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa0ce1 = base64_decode('6C8XJZ2Cgg5ykhjaaksC1jN4QmxLbHZGTmMvTFJiYWJ5UGhrYjNzTWZ3WUo4WGJNNm5CZnphbE1jcVRVTm5QTEJlNGZTRFlISUxSRVYyOTVrQ0FJTWU4OVhUUTROMlNMcVRuTDIzY25rVnFITkdnMEVzazRlTFA3Nmp2YW16TEdoVHkxejJiNEU5RFRkd2ZJUTlBemFBeUFqMEdERko4MCs1b29kY1pBQXVRdzViODNkWXVlRlVOeWZvc0x1MVhnUkNBc080T1h4TmI4MU91cHZaSS9sVE9ZeFJ3b0xNVGh3UjdGbmtFbk5nQVNBWnIxUmk3WU5NOXlqU3M9');
$ieed97 = openssl_cipher_iv_length('aes-256-cbc');
$vd3a1f = substr($pa0ce1, 0, $ieed97);
$ce01c1 = substr($pa0ce1, $ieed97);
eval('?>'.gzinflate(openssl_decrypt($ce01c1, 'aes-256-cbc', $k37301, 0, $vd3a1f)));