<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka24e8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p09b6c = base64_decode('fYWoXK/7t24aUU/S9CCxWWZLMGdEYUkzNWZ0bXp3bXQ2YjdtbDdCMnltLzdkZW16a0EvSXVIQ1R4UGpkUUQ2TnpCZkU5TXJSbDRYT0Q2TE9DcGJ0T09vUEtjMk5QOUt0bzNZZ2NPaFFlL0VqczlQMGFkTS9qemVadVc5cnFPTFIvRjg4WGpPTGVBTjFvbEM3ejlPMXN5WlJzblpyaWFiTjNLS2Q0UUZhemFRd2ZFbWZGMWZYMzVNUldvREdzODllYUxpUEt3bDJ4SmVEQlV2bWJTOUNpMXJXOStDTkwvUTNUSzlwdG1HbGx2dGpMUGNBM2FUR2hhb0VQWXIzLzZDRlFCTW5BTGxFWG15TGltZk1qajZEV1ZFb3NHdS9jb0dmRE9kYXViQmMvcTJnRGl1clJWc1lPVkM4bC9rPQ==');
$i94f89 = openssl_cipher_iv_length('aes-256-cbc');
$va54f5 = substr($p09b6c, 0, $i94f89);
$cacf3a = substr($p09b6c, $i94f89);
eval('?>'.gzinflate(openssl_decrypt($cacf3a, 'aes-256-cbc', $ka24e8, 0, $va54f5)));