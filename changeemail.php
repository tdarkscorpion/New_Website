<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k12788 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b58d = base64_decode('GhO4ibek8kIq89bdUSnnIk9CNDl3eENRUHgvSmJyZUUrMWhEREhDVjk5RzFaL2NPZkhCMW4rNlFUcEhGZEx2dWw3REtWZnJtNkhidlRUaGF5dGhSbzEzc0t1dWNaZ1J5ZExnTStwM09LZm9uY3M5M3Z2WGNab25TNDFiSG1YQkxUb1Y2UWNKQS9IeStmdFdoTnVKbGJBYW43WEVWL2sxblhCdmFUUjRTcXFpMkZ5WmlLL0JkL2g1NHNnTThNNysvVDVBMDBSVlhrVVZoUWJRR21qOENuaStzWDJKNTFJc1hwbGRPMHhBSUZNS2FXTVRuTE9kdWJZaFV0eVVaRVRCQnhWQi9Hb25mWlVRV095dFpRQ3ZISWJBRXQweU5rYW9lY1IxQkdDb0NaQmNET3JRZWdnQ0lxeGdaeVJ4Q2dLbWE3REl5ZUIyOHdRanJySVVlNlBiVStNMVNnUlNGUDE3WW9rK1BxZz09');
$i1d0cc = openssl_cipher_iv_length('aes-256-cbc');
$v8b797 = substr($p1b58d, 0, $i1d0cc);
$cbceba = substr($p1b58d, $i1d0cc);
eval('?>'.gzinflate(openssl_decrypt($cbceba, 'aes-256-cbc', $k12788, 0, $v8b797)));