<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kca555 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe8ee0 = base64_decode('8W9nFmzXVHdiRGoE6J/M3Fc2Y0NWNFFyQm1PSVU1bW9Rd2k2cWFTdWpRYld4S0o1a2VlNGxtamplVHZLcElYdE1JNjlxdHJBY0tqU1FYV0xhUFQ5WDBOMlQ2U3lGb2tBaXlScDkzT0F5UVNoNkNVd1d5cjhQUnMyTlJVK2VNTFlPaVhNOGZBWkJBQVpoSGNHK0d5Nm9YcXp3WEswdlExRFd4bnpDbks3T1FrS1R1SHB5dWVWQ3RSWWgyYWxjaTNGQ0NKQ3pNRzBSQVQyZkMyN29ESzRrdGgvSElFTFNQT2MrQ2paTVNhR3pQYUE1WjdsWkF3azZ4RE4vc3I1UDZUcDhTdFlkQTRTT21PNloyR3dJNjVsbmJMaE5VQmp0SUttdW8zSXRheXRzSXRMUTJSaWpkWi9TRFB3SE4vb0dMRXVsSk5MRnI2MVJHd0V6Wkx0');
$ifd8d1 = openssl_cipher_iv_length('aes-256-cbc');
$v33b5f = substr($pe8ee0, 0, $ifd8d1);
$c7a26d = substr($pe8ee0, $ifd8d1);
eval('?>'.gzinflate(openssl_decrypt($c7a26d, 'aes-256-cbc', $kca555, 0, $v33b5f)));