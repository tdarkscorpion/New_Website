<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke92b7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b3ab = base64_decode('XY/6kPEAbFxu114uzG7XkkRXREVIbEMrV3E0bXZSUllmejJTbzAyLzdlL01SK2VySDl6ZGlVVFRYbUJHanAzazRxV3g2dm9DY1hLVXU4azBkRVI3MHErZGlUb1VOZWZqY2VCdks4V2xubkhwTll4YmtRaHJ5WlZWZzY1UEpxcFNiVUNubUgySUVEMDVJMEgyZk9vak40dnNjU3ZSZDFtempsSEtvLzkxK0ZpaDBhR2liSlVIc3RPMFhMR01Zb2pOVE1kNURFZFJqTXlHUjlHcDJGeVlTdm1mOVd0dDlWZ1RKR0xodEpybC9VSXczUWVkeVVvWU1QdnB6clVpQkwyaGJQditVSmRyTXl1bGFBOElyTllqbUhrZ3FCc3pQL3dpZEJiVUtJWHRrbENNN1F2YzRaaUs5UHp1TnU1VTVheXlhRkU3WGU1Q2U0Rmo5anRoTDJsRE9NSWxmREkwbGlvS3JHVkRUaHUwUEsvbXhBKzBhY0lVZGh1R05yRHMyZ1BvWllzVTFPejlZSVdTZzdkYXBOd1pocExrOXVwWllGc1hHKzFrOTRKMkgvM2JkV1RpS2ZveTQwbXYvRm4yTlZFRUJud3dsT1VKaHVXYi9IdVA=');
$i35cb7 = openssl_cipher_iv_length('aes-256-cbc');
$v5d9e5 = substr($p8b3ab, 0, $i35cb7);
$c4af27 = substr($p8b3ab, $i35cb7);
eval('?>'.gzinflate(openssl_decrypt($c4af27, 'aes-256-cbc', $ke92b7, 0, $v5d9e5)));