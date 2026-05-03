<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k21dce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p10748 = base64_decode('s8Sm3l933JIko89ZWr8buUR5VC9Rczh6cE9TVmp2SUg0c2UxVzVmQ2kvcEhjQ01pYS9tM2tuUkhDdVBVMHgzVko5enZmRHpKdU1yVUJ0THA1ZWwvRldvSm1nNkdVMHVMRUNEUlFWMU85dCtlNmRzSGNRYjNVYXVGNFhYeVdYVGtGSitOUUpFWVJnc25YNE5qVkhlVFhLWXpRSnlaMUxVaTJuTlQwNVA0LzlVN2pkeDJKb0hSOTlDOU5jY1U0RHNkRjVHVUNPQkhEeWsrMmNwKzhzNFlPSVBZNmE2cUlDVDh4RDVHZDRsTTM4eXZTdHpWVkxxLzE2a2wrRklCdXlwTGNNS21WbDVmMklVUDVjWll1bVVOUXhpNy9wQnBiSngxRUVYMjNnPT0=');
$id5f38 = openssl_cipher_iv_length('aes-256-cbc');
$vb4d18 = substr($p10748, 0, $id5f38);
$c5c72a = substr($p10748, $id5f38);
eval('?>'.gzinflate(openssl_decrypt($c5c72a, 'aes-256-cbc', $k21dce, 0, $vb4d18)));