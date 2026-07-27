<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd44d5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa5bd3 = base64_decode('q2j9WvYdUuhSB/FAk9N0GHArSy9jdThYa2pjTTFrTVJyMEVmZWVIVnJKRStnQndBZXkrSkcrWWZFOVZmd3N5RkxCM1RBVVNiVURTcEJDNmYyQ3l0YjlBY1ZOVDUyekNNUHRYTlZVaERkSDZCOGhvV1l6SVIyK210UHA2QkdnY1UxNTRMdEpsdktGQlY5Z0F2MnVIUm1sV1p3a1J5dHhaMGJrU1ZxQmJmWVNNWENWdFoyZEJUdlZ0WTI2cnJDeTQzZGx3ejlEeTFyekdZS3ZvdjFhNks5SGZYR2ZxOERtK3JyWlVMTFN2c2lxQ2ZTM0cydStrMUhDRURZLzhCbHdTTVhYMHozak9aeTBEbUFyb3NyR1UrN0pkdnY5N2d0enphaUFPL09qOHZ2MXowQmljbE5uTTZCbU1QckFzclZDNHBvSUtVa2JPNlRxMWpwVEZpRFluMnc5bERkdm93cGZSb2p5dUtBUT09');
$i027c5 = openssl_cipher_iv_length('aes-256-cbc');
$v88a3c = substr($pa5bd3, 0, $i027c5);
$c79683 = substr($pa5bd3, $i027c5);
eval('?>'.gzinflate(openssl_decrypt($c79683, 'aes-256-cbc', $kd44d5, 0, $v88a3c)));