<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb0f96 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p557d8 = base64_decode('vNvoYc7DUGRBsBtPuDXuLnFVOXFiNEZBbDF3b1dTOXEreFVQQVY0WENoVFhYTmpYWERPbVZWK0Y1dTl3UWFpcG5Nd2dkcjByYS84TWxTeTFaaUJaNnVrMEM3aUtvWnc4UUpvK1NQcG1vYzQweG9neHQ3N3BVbTVHU2JUaFV3WkpTbjZ4T1loSHNsUml0cVlJb2FQYXI5bC9TNVJIT0pFR0I2dElQYlEzWVh6dngxT2E0V1BUb3VtaFZGT0pDY25hUmlza1ZCMTBPbVRWQW1UcnVJeXE4clNaZEVhYTZGRGkzbmgxSUFSWWppZXFON3BaWjRPSEpMa0pzUWlPdlBoVVhhS0JHRlRiVFFtb3NSR1ZydDJIL1pDblhobkZERVBubjhkMXA4K29LSmRSKy9yTVQrUktBVXQ5MkJlQ1o0SFJPWnFjendkUElwSy9TWC8w');
$i5eb4a = openssl_cipher_iv_length('aes-256-cbc');
$v17508 = substr($p557d8, 0, $i5eb4a);
$cbd926 = substr($p557d8, $i5eb4a);
eval('?>'.gzinflate(openssl_decrypt($cbd926, 'aes-256-cbc', $kb0f96, 0, $v17508)));