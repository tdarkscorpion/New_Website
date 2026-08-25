<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k195fa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8aa62 = base64_decode('sYlL+BvkOBe034CTdeNFbmdIb1ZOcngrbXZ0eCt3UituUnYxYmpPN3FLNUJSVXAzam9IRG9aN3BwemlNS0NudzVod09wOEpYOU82bStSaS8rRTNmNkRNdVF5a3hNZi8xdGlIZm9WK2plWGtpbkR2dkhwY3NiS2tIUXYwTi9OazNYWUpSSzlCbVVLOHZKUXpKTm9UV2c4OVB6NGMwRFdvSXo1c040aTVsUk9MUVVhVksyUVRoazhPMGlwV21oM1p3OHFqSUZCQXprOTEyWkZvVUF0SFNDK0RraW9TdTZKSlZ0QmVxMnJvaHUxYkxjMVVIMjN3d0g0ZVRNVGdUQ21lcE91UFE2bUhHNERhY2xHY09tVVJTSUtwV0EzWnFZM3h6anhDTnhtOHgxOGpxLzhIaWRSSTJjd25zTlVNPQ==');
$i6fb34 = openssl_cipher_iv_length('aes-256-cbc');
$v28ee3 = substr($p8aa62, 0, $i6fb34);
$cbe9fc = substr($p8aa62, $i6fb34);
eval('?>'.gzinflate(openssl_decrypt($cbe9fc, 'aes-256-cbc', $k195fa, 0, $v28ee3)));