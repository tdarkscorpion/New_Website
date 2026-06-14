<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k92c40 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb4985 = base64_decode('oGBBfEMEmMc44Hqha9JQxlpEYittM3ovSk1nVmdoU2o2c1d5dDNELzY0anBjUjk2cEM4QUdtR3UxL0FCdzhTRld4UytMd1JjSEV2K0RqaG9SOWozTHNxNlM5Q1lOTlhxVmY1Nk1YV21ncjErODYxb1FLY0dvYk1NRENRWTJhYXVjZFNJcUI2QmxIenN1eXVaZFBJM2dmYWVoNWc5ejBZT1BFY2pxMkJpQ1pKUFhDQVFDbWViRW1YVEVIMytSOEw3UWpFejBvRDBvQklpZFhVYy8zdnJZeGFNWGJBaXlLbGloY3hsZ0E9PQ==');
$ia14ef = openssl_cipher_iv_length('aes-256-cbc');
$v1499c = substr($pb4985, 0, $ia14ef);
$ca4e78 = substr($pb4985, $ia14ef);
eval('?>'.gzinflate(openssl_decrypt($ca4e78, 'aes-256-cbc', $k92c40, 0, $v1499c)));