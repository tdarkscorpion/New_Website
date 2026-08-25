<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k49454 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p86a33 = base64_decode('/D6mhE9EjI0uX4ddQiKrUFdOUGp5Qk1vdjVFUEYzRW55Y2FIV2VySTJlN2c5cjEzaGFIdmlrKzBTMmQ0UDdqU05ZaDJsdUR0SXRzUnRTYjRIYjlRd3dQY2tDa2FxQkl4ZkNDN1R4ZDMyQk0yejViUGlpUXhveW1kWCsxUFNMNTJwS3N6TThsMkhWU2xQdkExblRQbnNWZG14YTVQZE5hVE4wNDhzSTVoRyt2a2VVemJabWJSTFlTUDVoaEhCN1ZPL3pLQVVMalRobUtRZlQ1VFdNcXpiNFgrNzNPS2lpdWlZWERRVXozWVVzaE11V2VxOEJKa29QekhvcUpjUkpnayttUDI5OFBlR2cvOFl3ZUs2SVpYTkMrU1hjdnd0V2V1TkFET3NCVFUrM0M5UVZsVUYvMUlmNm5OTm1nPQ==');
$ie0af9 = openssl_cipher_iv_length('aes-256-cbc');
$v25e7f = substr($p86a33, 0, $ie0af9);
$c1b678 = substr($p86a33, $ie0af9);
eval('?>'.gzinflate(openssl_decrypt($c1b678, 'aes-256-cbc', $k49454, 0, $v25e7f)));