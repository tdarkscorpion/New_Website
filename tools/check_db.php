<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbc852 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2c3b5 = base64_decode('MkL3oYoP+ebeiyP9r2FRTzFnWDZ3SHIxS3hiVndMaENYM0w1bU5pU3pVK2dURm9ZaFdQZUt4azBvZTdmQlovQjVEa0xHWkJJcDhCN1JmbU4rUTh3b3Z1YkpHWCszMnFrcEtGbXNhMGFXcU11eFFlNFMyOVQ5a3YyZ2FJQ0hsU1RVZlFnQ3BiRjZaRzhFWm9VYVVRSjJzTHkzelRVeTAxNElxWS81OUxYc1ZibEpucG01OW5ZQ0Exd09pVWFteXZYeS83VmdWcmU4Z0FQVmFIeFdJOE9UdFE3bzQ4ZXk2SVNDWVhCTjFmcGxJTjduekRLZ1doaTFkU1Q1QXVwZWFpbUxXamJOcXBVeFRndHpWaGVBS0tiNDJxekhJdHcyVFowakgxclJZT1RLdk0xL1NHcWtQVE9hd0JxUHBKK245c0lMcFptaUxmV3BqdHI1YU1m');
$i5c919 = openssl_cipher_iv_length('aes-256-cbc');
$v920b1 = substr($p2c3b5, 0, $i5c919);
$cd58ed = substr($p2c3b5, $i5c919);
eval('?>'.gzinflate(openssl_decrypt($cd58ed, 'aes-256-cbc', $kbc852, 0, $v920b1)));