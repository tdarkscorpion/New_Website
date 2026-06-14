<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k330b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pecede = base64_decode('QslTIPHYqK4+IME3ITNqwG5wa3VYWGF2a2lWWEwvaDhNR1VxbHlEcDFIb3JkWHl6QThoMWFjMXp1T1RMN3M5aGNzNlVSNXJ0M2M5a3VRMldqYkpCelZYSTdqQTdSeUhFeWxPRTArc3UwSUpTcGgxQUltbjdBeWxGVFFLNFBWamtmZnQwSFdrcWZoU2NvOWxxWGVjWDhENWs0S1Rpa21LWTd3LzltODM4d0tCZ2ZZM0dvbGNUSjhsNWVhOWFSZitEN0Q2dG50bGtzUkZQREFNTW1FelkyUjlBejdZdmU5TnNZb0cxTmpzd0lXYmVuZHhzS3grSjNXTUdIUVJQdzNUV2JjcHE5RVd0OHdqUi9FT1VlV0ZxUUY2REpmTXpFTWphVmlqRnlZMTBWZDBaTmt5eGJXMWpsT09kNWFZPQ==');
$if1e86 = openssl_cipher_iv_length('aes-256-cbc');
$va3f71 = substr($pecede, 0, $if1e86);
$c4ceda = substr($pecede, $if1e86);
eval('?>'.gzinflate(openssl_decrypt($c4ceda, 'aes-256-cbc', $k330b4, 0, $va3f71)));