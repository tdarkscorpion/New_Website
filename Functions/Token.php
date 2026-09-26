<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke25a1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9918b = base64_decode('CsvOaAHQqJOzFU0e+EZKcW12ajFhbzVyMUROSTlmWUp1RkRDakMwZjdmdk5TcjcwSzU3UUEwSE1HcHB6bC9WUnFmbEY5QllyV3VhMSt5d1Vub1BENTI0OHZKRGpkS3V5MVRXZmxTTDdFdWIzOWkxa2M1UTI1SEJ2WktqVzJ5U1VZOHh1VEhxVVk3S2NhNFdKR1FwNkRPdWQySy9qeldDUlphbmhSWU1tUXVEbml6bzVHVjgvcU96Z2RaYWYxVTN2NFNhejR0TGY1eWNxN0Z3bnRHaEIrL3h1d2lwN3VTQWFKZHAwQjlGQXhOVXRHMGFPQ2tkaWd0SFJOK3FKZ2dKdy9iNmhpRzhTSFk5R1pWYk1mcU0rSzlQV2s5UzkrUlpWOHpuMnJweGRlMmVJSmszcHhNRUVrZ1FDMFFsSzNoSi9SdkNGTEk0SFlKMFB5NFI3NWt1VFExa1hLNXNUT09zZ0VxTHMxREk3TVFEaFdvWmtnZStNaVdSU2Vqaz0=');
$i9db0a = openssl_cipher_iv_length('aes-256-cbc');
$v6f700 = substr($p9918b, 0, $i9db0a);
$c1d03c = substr($p9918b, $i9db0a);
eval('?>'.gzinflate(openssl_decrypt($c1d03c, 'aes-256-cbc', $ke25a1, 0, $v6f700)));