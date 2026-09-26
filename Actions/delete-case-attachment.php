<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c8ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7b2ab = base64_decode('3jopTQ5lJ0+QqwzGXD5PtFlqOE9uU05lVE8zaEtKQTVQQkFYUGVUNER4S0VlYmlwTFk1Rk82M3dSR2xrQVM3NkxQekJ6U3FlNHVOcmppcm5UNWVKaW1uK0lqdlcyNmNLSEhQSVgzZHliNmUrMTdJUnNzNm1hWEU5WnB6eDlkU0ozOEo5ZU92UmQ1SEg4TDE0N3QxSHVjbjQweXhFTTJ4cjlSNUVqb3IyNUQ3K3pmcGhYTEhiS1haSEhlRkI0QzVMMGdjZGVRaUMzVVZvVXo5Y29EZEpBTWp0N3ZIaDhOczBVaHh1SGJyZmIxWkNyOWRTNkFIc2g0MXM0bm44SGtsY0dwWEtpWjcxaE94L0owMmtCVHNQOWJuVy9KaWIzZkRmd2tsa0Z2M2VkV09YSTB6VmNiV09NMThPYkxpdnAvTDFaUHlmQ01lVk40YmhTRkUw');
$i364fe = openssl_cipher_iv_length('aes-256-cbc');
$vf9a23 = substr($p7b2ab, 0, $i364fe);
$cd5a21 = substr($p7b2ab, $i364fe);
eval('?>'.gzinflate(openssl_decrypt($cd5a21, 'aes-256-cbc', $k8c8ff, 0, $vf9a23)));