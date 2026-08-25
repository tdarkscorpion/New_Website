<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k449f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p18480 = base64_decode('w30FKuZ97oYfM3hdSIi2+mRSdnE0bkh5MWFSWGZNZ2x4T2x2WGRXS0F1dUk0eFZQVWJCTEpWRWNSeHFWdU8wUzNkaThVY050emJ3dGRvU0h0a3B4Qzg3V01IWUVRVTJRRlJ0M01xS1BkckI3M0taMzNIbnIvN2N6NnhNYzJWMmtucGNISm9kY2RuSnpyQWVCdTg5NllHbG5GT3Nja2NFVUVCYW1rNUM4K3J6L2R2TUs0eXFsVE41YTBhd0F5djZNYTdyNEVZdThxd2NaSDMySFRyaHM3elVEeE1Fa0NkanhGZEZKYnk1NGJ3YmNaVG4yK3A2Y0MyTDFPU1pvNWdjNHhod2wrNmRFWlV6WWVXUnBUcU9zckg1VEJMdCtIanRreFh2OHdWVitjVHp0V050RkFRallid2JoYlR3PQ==');
$i688d2 = openssl_cipher_iv_length('aes-256-cbc');
$vaaad3 = substr($p18480, 0, $i688d2);
$c15f8a = substr($p18480, $i688d2);
eval('?>'.gzinflate(openssl_decrypt($c15f8a, 'aes-256-cbc', $k449f8, 0, $vaaad3)));