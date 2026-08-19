<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke2b94 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe5536 = base64_decode('k4BagXJcYzjBLOes7OgsnTdsU3FSUloyKzJBbEUvVU1pRzFQMTRJSTdNM0lINjhySjRXSjlwZmtNVHBtK1JXVXVpSGpIOExKUC9pTXVna3ZaNUxTcmRZTldoNUVYKzNYbGRKb0ZzQ05XeEgyRFlIN1VMdmh3bTEwZGJBNXhTS3Z0RlJBU2VxdHg0UGxuSW8zeloycUJTNjZoYWJxcHVnb0ZGVDNFZkY1YysrbTJyREE2NTBPQlFCclUzcnJhb3hzZStMMjVBb3p3ZVVTMWZiSWY5Tm9rZHdpWTZ3dEFvZ0pwazhiK2c5RVp0OHRTc2ZRS0Q5aXp1REw2MkpSOEZ3czhjdytvUGg1WjQ1L2RGTTZ4cW5zMUFvbWYzUGhxcGZKT1NFbTZwNUNIRWxXdGJiMGZTSTd2RmtvNXBjakNFU3EvVnYxcENpQllsN3EvdlRLNU1hUnZvdk9aM2t2dFpHK09NdmYzUT09');
$ib6dec = openssl_cipher_iv_length('aes-256-cbc');
$v8f181 = substr($pe5536, 0, $ib6dec);
$c16472 = substr($pe5536, $ib6dec);
eval('?>'.gzinflate(openssl_decrypt($c16472, 'aes-256-cbc', $ke2b94, 0, $v8f181)));