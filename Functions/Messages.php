<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k700b5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p448cc = base64_decode('2jzOtEevIi+mcVHAtpu5yFFaZUE4bG9Xa2FYdzUyaGIzK2pMMjVia3QwY0pVSStpUy9GQ1pYVjZjNHlyc25EeGFuelQ2aHJuYWtrcDA3ZXFRYzBGSVNCYWRlRHJMMW1BQ3p5K0lqVHA0Sjl6WmYyWGFaWE54Qmt4djN6Q0tsVmZONENEVkhFeEwyRDUwY3c1Uyt0STJ5ZnhxZTdiQjZHSTNoanI3QmdpL3VxOU9zVzQ3LytydURJRExzU2hub2pld1Z3MDJ4NHBXL2hYMllaa2R2RW52ZVhLMDV0TTFTeHpCWExiaG9nYWpIV2Y3VVVydXUzUDh2Qm1qMEhGQThrMXEzSmxkam8xUE9DeXQxaVh2bWVBYjhZOVhSY0NmTVUvSXFpTnJUY3lJeCtuOHdGOEtPYmswQ1JMdWd3PQ==');
$if12dc = openssl_cipher_iv_length('aes-256-cbc');
$v5d596 = substr($p448cc, 0, $if12dc);
$cfdcdb = substr($p448cc, $if12dc);
eval('?>'.gzinflate(openssl_decrypt($cfdcdb, 'aes-256-cbc', $k700b5, 0, $v5d596)));