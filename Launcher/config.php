<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaf8cd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbafa8 = base64_decode('/uOoBkcpxv6rYEkxqmrhgXlnZUFxN3loQkdGVTVWd3FtK0RMN2lhOWg4bmxyQVJZdWszL0F6WUVNYXpreEwzUDNXYkxxeGVqd3F5TURtZjlsaFlxdzBQeStuaTNJOXlmMTQyc1JWMkYvTW9WSW9uMjBWZTRDNFlVSElxR0dCNWFsbklPb25ZN2lvckNHSXVmQ0xQZitXbjlObzg2MVNIODc4MW96cVZ1T1dNQXdjM2RHUlFIMy9rTGwzck1naENkNjBVOEg4NG82R2dRS3IzVUNhMXphalFWOFBablJ5SWYvUHRSQXoxeDZDcDExTlFDVlhuenowekJJYVpjaXFSUVM5TElBUnhQdnV2OXp3LzZ1eWdXYys0eTM1aWNweXBkbHU3d2J0QnFvbXdWazk3byttSFBUR2RFZi9JPQ==');
$if1962 = openssl_cipher_iv_length('aes-256-cbc');
$vdd60d = substr($pbafa8, 0, $if1962);
$c83e16 = substr($pbafa8, $if1962);
eval('?>'.gzinflate(openssl_decrypt($c83e16, 'aes-256-cbc', $kaf8cd, 0, $vdd60d)));