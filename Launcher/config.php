<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6c22b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0e98e = base64_decode('rLPwWk8qsqdhjCInDXkEsVV5QmNiVnFLRUdOK0dESVIweTlrK2xteHJRcklnZTVNNlVJajBhSFB3c1J2YXA2ZEg3dmtOb0hMLy9RK2dBclpaNlluaUFxcE9qWXRLWTdyWk9kM3Q4dWcxa2gzUzZkRVAyUHRXRXZyL0RyR2ZqMm8zQitaeEswbk1CbEJYcVI3QStFa0dVcTM2YllBdExVdTl5aEU2S2JzbXZ2aXFCQi9YcGhKNnUyaDFncTkwbFpLZVpYQ2xpRXMxTzAyNk1Md095VW5RalRsRUtTWXZBTTZaMW52WDlDQndrbHRHQzVOVGl4MFVJNUI0Q1J6VmNZRmRQd2x2anRoaC9Uc05nMm9ZWkxSNkswaDg2cVYwTHdyaGEybDdSVEljUmJESnc5cFdCT2VSZVZxQjFVPQ==');
$iad197 = openssl_cipher_iv_length('aes-256-cbc');
$v5f188 = substr($p0e98e, 0, $iad197);
$cb2451 = substr($p0e98e, $iad197);
eval('?>'.gzinflate(openssl_decrypt($cb2451, 'aes-256-cbc', $k6c22b, 0, $v5f188)));