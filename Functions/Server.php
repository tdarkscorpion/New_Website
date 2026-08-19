<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0e855 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68fcc = base64_decode('oeCxDFs372ua8I6+KyjYV0xMRm5FMnJPYmZqQ0NDL3Z5aitpVGlOTjhLM2NYYWkyTUpsU3pLTjZoRUdyTHZmT1RBc3dXSWR6OHIyWGh3SkVCZWxEWngxN09TTkd2VHFoajlpRTY2S0I1dmhveS9MeWdDdC9IUjh4aU14L29FN2tvck5TQmkwOG9tTElNc2FBL01TWEUwOWRaNWxvOHhmVFNkTTIwK1pMbHBSN2paTHluTHBaYjl2UjVSUFF1dHRuS1RXWWQxUncxZE9xTmQwTjFZakpLdzM2K3JzY1pnTzNaU0syVGRpb2xHRVhYaHpwOHBPR0FadFRMbGdqTkl4cGM1KzUzejdFV0RYQzBoTUxXdkgzLzZqdEtuLzR2YmFjUXhUcHFWcmx6UDlUWFVZWU5SWDFxN2Fqd1ZnPQ==');
$ib84f7 = openssl_cipher_iv_length('aes-256-cbc');
$v8a225 = substr($p68fcc, 0, $ib84f7);
$c6f258 = substr($p68fcc, $ib84f7);
eval('?>'.gzinflate(openssl_decrypt($c6f258, 'aes-256-cbc', $k0e855, 0, $v8a225)));