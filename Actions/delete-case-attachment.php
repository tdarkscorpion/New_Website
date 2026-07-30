<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d5fa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p15134 = base64_decode('Wo1iEUFjgFGquy402DtxEjV4R3dyTEN4Z2FZSGIyakdvNjZNblRYU0h4cXpyNUFsV2dlcWZpVFVrcTZJT005bm15N1NCZ2xCcEFtNjNMall4OGRtUS9ueFhBUUt0SE5DeDBCNlBSbGhzN3FjYzR1dFNka29HbzR6bWs1VmNPQk9UNFh4N1lIZGlWNWI1dnNhUzMrNDE2NGE5MXZUYmJyL1gzMjhrNzhpSnd1L3ZsTVBSbWc3dDlXTWF2YnBvS2Z5b2U1cXF4Y0NGVVRBRzNDSFczWUxBSldLK1FMVFBpK1MxSWpNVWs0bk9vYVpLWHVQWnFxS2lENDRNMDlFajZKL2hRd05zbkpDUjRNS2p1aU9wZXJnYytaRWJzcDR2dVZoN0hNSXk0ZWE0SXhnWU5zV2p1UGg2dkw2bVFzQXpKblN6RDB4OC9LUjd4KzdNM0tI');
$idbb06 = openssl_cipher_iv_length('aes-256-cbc');
$v61e12 = substr($p15134, 0, $idbb06);
$c3a9e9 = substr($p15134, $idbb06);
eval('?>'.gzinflate(openssl_decrypt($c3a9e9, 'aes-256-cbc', $k0d5fa, 0, $v61e12)));