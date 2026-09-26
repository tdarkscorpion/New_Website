<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb62e8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbef96 = base64_decode('jlc7KaAa079y/HzTZvnrkEdsQTZuZkQ3ZUEveGl0MTYrQmxMMUphREN0QmZ5bkgvWFVKbGk0T1FaZUU3akE2MVc1M1N4SjFrb2l4dkRtK2FwUDhwN0FHdnNOeXZmS09nRHREZXhOZVE2NVhjWElvU1NXSVdhVlo4Q2tnVG05cVhhbWY1Z3JRbWNLeWluUHFoMG5Nakc4S0pCdXYvT3IvckMxRUVmNGFybERWNUFheHo0bk9Sd2F2SHQ2TnZpVythczRvUjJieUlYYXJPTG8zTjFrTGFLakdrbmUyOVBhK1kyNENzaHFEOEZTQ0kwZXRLZGFuODZUazNNc3ZKZ0ZIVitOaTNiSE9iaU5rV3p4dWRaQkwvakxjcFRiREpVL040ci9LV0o2QkkwaHYyV3BvRXBGMjllOHpFdHRoL0ZTRkcyQzlFQ2s0SkZjVHkxWUUxUHBRVUtIQUlQbXFwYUIvaGtOM2h0c0FrRjRSTWNnckEwQkpPbjgxa2ZwMD0=');
$i91863 = openssl_cipher_iv_length('aes-256-cbc');
$v12f23 = substr($pbef96, 0, $i91863);
$cb37c6 = substr($pbef96, $i91863);
eval('?>'.gzinflate(openssl_decrypt($cb37c6, 'aes-256-cbc', $kb62e8, 0, $v12f23)));