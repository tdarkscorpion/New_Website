<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb78b9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdc451 = base64_decode('NkM0LZeGGWNIQ6pU0/7Gw1k1d1VJeDFJOFgvSUNzeUpTMEVRMWEvM2hSVHNpaTAwQUw1LzFwWCtPOXBheS9Qd1hHR25Qc3hxeG1DQ1NPUmNYYUlLS1JUZUdPcXBXYkV6R0xHV2FXbTJ6Sk42R3JhblJuMXZPZVh6bDBSS2ptRnkxekx6R2NvbkptQStiOXh4S0JKQ3ZPYTcxdzFROEU2TFZTOUgrM3lDOEU3ZlBQWEl4TkFWRjVLUHZjN1pwSDlFNlZMdEptUkNIRjg0Nys2V1doT1had1NyR3VzUkdINXJHZ2d3eDZGZzUzWlFTSFRPeWRwemswMjk0UHMzVlBPUS96NTNYWlBoRWpoaStaWjNLdm9MMzhiaVlKeFhuM3VHWm5ybS9EVGdzVlhMZ1g2aE5xMzNQTGZLelkwPQ==');
$ia69ec = openssl_cipher_iv_length('aes-256-cbc');
$v978ad = substr($pdc451, 0, $ia69ec);
$c30e94 = substr($pdc451, $ia69ec);
eval('?>'.gzinflate(openssl_decrypt($c30e94, 'aes-256-cbc', $kb78b9, 0, $v978ad)));