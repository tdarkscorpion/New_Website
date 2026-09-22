<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7f93c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7d806 = base64_decode('GB3KXgh1N3LDfZMZivpc/25kTkM2QlBXSFVzNUVTMmJUaEJaWkhDMzRWeXJHR2ZyVUhXZTZkK21yeXJiZExQU01CYW5YTjNkUUNzY0JrR0hvYWp5d1lrcmVJS2RLV0NaSE5PeTh1dnNtellTRjkxWit1anRXQUxuWHhKdHByOUZ5Z2svS1BZNGE2MnhpRFpuNHl3MFd3Q1NWRCt1MmNtamx6OFJOSnFucHRTT0RwQ2pCeTkvOFlBWjJ0ZHdSbVpmZy9ZamdjTzF1NTh5UnBydmh4NXl4Q01taGx3WkZUWkZEWFo2SEZZemF1d21zdTRlbnlVV0lrbFlTTXM5KytZUWxMRTk4VDZIdlM5Ty9sRzJRYXdpVGVQS2tWNWhwdGtKdXJkTTh3NFFlRThuNXJYVjlOQkhVV3JQT1dJPQ==');
$ic86a5 = openssl_cipher_iv_length('aes-256-cbc');
$v55add = substr($p7d806, 0, $ic86a5);
$c999e7 = substr($p7d806, $ic86a5);
eval('?>'.gzinflate(openssl_decrypt($c999e7, 'aes-256-cbc', $k7f93c, 0, $v55add)));