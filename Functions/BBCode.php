<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8b862 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p994fa = base64_decode('K54P4t9jOdSRF1bah1TDIHVIRW5rVTlCclBhV0p3aDVUWEJSU1IyZ1JXYlpDbTR2VTVxbExsNGxKZ1JoRlBUUUpadEtLekNaZ3lQTFEvL2pEaGhGZGxCRFQzUVlLbVpTb1pOek5DT2htYmJ4Nnh2d2FRUWRDOSt4UnFOeXREY2FPZnp5L2g0aU53WnY2d1pXcktjM256ck9vZjg3cDcxL2lGT0k3MXZPdVh0eU5PWkdsZE8xbXJvT0wzRXRVOEVBdW13TlJCTFUxMVBub2RrcDJTYkhCWHVHSXVkbzBlbkxRRytlaFRFenJGRjBRS3lNYmxGanZBT1NQSkcvdk5OV3RGb3JjNVRyaXJvYTNhM1ZFVFpiVHQvUUx2aktUSXZMVTZMSkZCa3hzZnJUdTVlbTNpOGFBYlZ1ZTk1UzR3U3BGU01JaFowdnhsTDNES1Jj');
$i917ec = openssl_cipher_iv_length('aes-256-cbc');
$v9a026 = substr($p994fa, 0, $i917ec);
$cb72d6 = substr($p994fa, $i917ec);
eval('?>'.gzinflate(openssl_decrypt($cb72d6, 'aes-256-cbc', $k8b862, 0, $v9a026)));