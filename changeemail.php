<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcfe88 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2de7 = base64_decode('8R8BjGCu/qetekY89RQx+TAzdlV5SWlIaW9WclNONjlFaWIyZ0s5cFNCQUtTcnJDbXRSQXdPRVZsUi9lSjNyZmlrZmN3THI1Z0xoNzlQYXdBYlFhQlA5SFpYVEdwb2tTVDdiT1pocXhRejRMMUVlR2VlL2JEUzRXcUs5cVR4U1FQNlM1UER0ZkZsYlBrZlVtdFJSVVQxei9mdGxieTRjcUR3aWtuMkQ4bmJ1Z0MzMW5RUXBiV3lySmdhY28yZjMvM2xSbEZkdll6SUpFU2V6UzN2NlpJQ2w0bVBqb3A0QkVZbTVyc01wYVkwbU1VV2J4QzN1TkVlQkVCRjVlMzNNZE9TZDBVbnA1QURhbXhGVDhRU1UyeXRic3RXaXFwaDk3bFdrWFJZODBiUUs5L2FjNnpXSzc3NzBXQ3dFeTNRNmxNYTcyOFYwYi9RNVVQL25jVHFWWlVMZWRWVFdrQ2NMd1pHMWtSQT09');
$i38910 = openssl_cipher_iv_length('aes-256-cbc');
$v1cb40 = substr($pb2de7, 0, $i38910);
$c63015 = substr($pb2de7, $i38910);
eval('?>'.gzinflate(openssl_decrypt($c63015, 'aes-256-cbc', $kcfe88, 0, $v1cb40)));