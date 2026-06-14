<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k688a7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p17f93 = base64_decode('PPcujLlRNFG2NUg2Tc0uaU42cWhkUzUram1NNTFNcTNMTXE4T1drV0x0V2Y2eFViV2ZiYkNnVW1wWVdKa1JUVVZMbzh3emxyUmF4Vk5ZdjRBUGZMSmVLUHJlbTlZUWhxaFJYRnpDUkVYNEtvdmE3L2NtekMwRVlxcCtTTmJrbWdFb1BUUk1zYW0ySjRXOHRGMWNRQjlHVWhTYzVhQStCVEtXOWpDQ3lYSmNWeUZRODNUbjZvaldVcDZ5cGZIN04rL0d0b0pHVFZVTEd3SVBYNWh1bEUxR1YvUWtBQUd5VmhlSjE1dTdUajJDN0dXREJ6QXBQQkVVN0ZoSnc9');
$i62ea2 = openssl_cipher_iv_length('aes-256-cbc');
$vd7271 = substr($p17f93, 0, $i62ea2);
$c497c5 = substr($p17f93, $i62ea2);
eval('?>'.gzinflate(openssl_decrypt($c497c5, 'aes-256-cbc', $k688a7, 0, $vd7271)));