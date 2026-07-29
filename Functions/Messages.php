<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf033c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p002b3 = base64_decode('4LYQYr+uWwOVNtpIHLquLlFkRTdiMnQ5TGpqeEdobXdUWFZaUWhIRWNyNU9teThNRk8zbmx1cmNSTkNuQ082N1Zhb2I5bUFNM0dtTldWTEZxTFpPb1k1MTYrcHRiT0xDMFZ4RDNSMUU1dXZJTlpXbHk2MGp1d3ZCQlVtdHBpelZCc2NtN0MxVWlyamgwODNsRVgyOWVIbVFtdWszVGF5WWJMYVhKbGZZZVFpQ3U5Mzd1bXBDY0hmTURyV1pld0VjWGtqTGpENTBpRjg0K0RvNEF2K3dIVEhRMjNBTFV6YjAvaHJZS0hYbkNzYTgwT0lkY1FxbHpDQThJeFBqUGEyejdLVWh2RWZ1WlJ0aHZPV1M3OHVnckk4QjNDMnhqRjJFUk5ITlZrR25VeXJTaDNkZm1NUnhkdUowZGxvPQ==');
$ida1d5 = openssl_cipher_iv_length('aes-256-cbc');
$v60262 = substr($p002b3, 0, $ida1d5);
$c8ae54 = substr($p002b3, $ida1d5);
eval('?>'.gzinflate(openssl_decrypt($c8ae54, 'aes-256-cbc', $kf033c, 0, $v60262)));