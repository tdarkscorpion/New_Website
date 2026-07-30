<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ked21c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9bf59 = base64_decode('0CeytWw4JtEz51AsLyr2bVdyQitNWkFEaEVmSUNianQ5b2gyVXB0ZGkzQkdQT3l4VDQxcDJXRnJPUWxWM0ZicldwMm1zQ2E3V0JWYzFHd2E4VkYvTUFLakpPSDlCdmZGL01GMlVBVTBjdXYxRENjYlZmRDJ3U0xXYUdWajlBc010Y2ZNQ0E2ODRCSDNGZUV1Mi92b3FNODlaRzhINkw5VmRSV0NNeWM1UGpzZFZkVmYxRlEyRW1kZmlFbDN1cXRlQTJHU3NjYXIwU2c0ak02UEpVZ1dRRzhjdXYvMllXVCtnQzBQYUprQjR1M1N4dHYvNEx1Rm5VbDNPMlVWK3VYMGNxbGN2Y2V4eWtPaU5QcTY=');
$i7d9e7 = openssl_cipher_iv_length('aes-256-cbc');
$v3df4f = substr($p9bf59, 0, $i7d9e7);
$ce9b1f = substr($p9bf59, $i7d9e7);
eval('?>'.gzinflate(openssl_decrypt($ce9b1f, 'aes-256-cbc', $ked21c, 0, $v3df4f)));