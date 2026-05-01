<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3bed5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p005fc = base64_decode('SXeBFvfWNvs/neFndFiGPk1DNnUrSG1EM2ZrQTRmenJxL2dHNGkreGlsTWlvNklNbFlYZWJpa1RWekpneW9NUFh3L3Q0dHgxYkRFQmE5SWJuWUNjOTN1T3orT1Q5b044V2RpUVRFQkJLdDNETGZJaDljeVJ5Wi84d0RkRjlpM2FQbjJrc2pCaDlqMGdmRzQ0bVBRTjJiclVoT3pETjlwNFowMWRUN05ndEJSRCtMNzdRNjQ4MjVmbWk3NjJuTS9LUGRYMVkrZXFGNGs5RStMc2VJVmtNZ2JpajRPblVvelI3N3lONkdiMnhVNlYvZUh3SHZNOXNxVG5rcWZSZXpyQktwK2dKNGF5NTZDM21IOStmVnRHVEVlQTcyS1VWT3JWMzFDSTU4cGZaR256TlBNMG1IY1hUZlFlN2JRPQ==');
$i4bc79 = openssl_cipher_iv_length('aes-256-cbc');
$v7070f = substr($p005fc, 0, $i4bc79);
$c5cb4c = substr($p005fc, $i4bc79);
eval('?>'.gzinflate(openssl_decrypt($c5cb4c, 'aes-256-cbc', $k3bed5, 0, $v7070f)));