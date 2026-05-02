<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6a9cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p971ef = base64_decode('amFfcfoSjJ8xIhcQFTbvyTM0K1hFTXNCZkI2NS9qbmpTeFlmbmkyWmJDdi9NR2Y2YlJQd2ROaWJKb08rcEd2RU5JM0dSU3haSVIyUGtHY2p5M1VzTHc0TkY2clVOeTl6QTB4eHg1cTdJWFUrOUJneHIwdkh5MmtKRTdienE4UTlVM1dGVExPRWxvVFZ4dGhKSW1XWmlKTk5SOU5VUGtxVTRqdFRHVDhaS1VmU1NtVThpM3VBcTQ3OTNtQmVacFV5MzA3YTE1cExmZGhKQlIwOWlFSHhBZGgyR3h3YlB0b2MxdDJyTmVRU056THdYN01Ba0UzSUFkc2FJWGRRR3BKa3NTOTBZUGNVY3ZqOG9scU1oVGY2VzBLZ2trcks1dUlScFRiYWtnPT0=');
$i66a42 = openssl_cipher_iv_length('aes-256-cbc');
$v19c16 = substr($p971ef, 0, $i66a42);
$cbf8e4 = substr($p971ef, $i66a42);
eval('?>'.gzinflate(openssl_decrypt($cbf8e4, 'aes-256-cbc', $k6a9cc, 0, $v19c16)));