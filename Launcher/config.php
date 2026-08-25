<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb972b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0fc7c = base64_decode('5phd0ACYHb1x5EIFUoKji2JZRVJ3TkN1TWcvSDl0TXR0M3htKzdzZlBEWE9CZHB0RzJlK0g2S3V3VkpxUFVvaUFxQUZjNWNiajZlcUh5ZC8rOGVsaGlYRWVBek0xYVVNaENETFlaMzRxMEpSMGUzRFMwbG5kd1p2SzcyclB0N1VUTXhmRlZLaUZjTWcxSm9JTkd3U29aajBWbkxxYmFqYW92R3B0RkFBVFlVMk9adGRsUUN3bmFKeFNGNUFwdlNDaU4rSDR3bktVdEZaUTBSQ2hzdk9qd24rZmZzTXF4bEdQQkxUSVlEWkJFbFdOeitHTWpUTDZwVzZBUlE1WWx3a0RURkRXOEg4ZTQ1OGdoNUdHZHZVOTZKenBiT0tyamlua0U2RitkZ3BZVlJGQU1XSUp6c0xVaHN3d0hJPQ==');
$i526b8 = openssl_cipher_iv_length('aes-256-cbc');
$va11fb = substr($p0fc7c, 0, $i526b8);
$c6dfa7 = substr($p0fc7c, $i526b8);
eval('?>'.gzinflate(openssl_decrypt($c6dfa7, 'aes-256-cbc', $kb972b, 0, $va11fb)));