<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kff13a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p13f2d = base64_decode('Pt97SDZNnU35T5nFeHYlf1A0MEs4VnozTGU5U2dDNkV5WldXOXFENXNzc3VrZllWd05pVldkd3F6UUIvekc3MDBSQlBvZmh1TkRNSjAxcVluZGl3RW1GQlJVU0Zpb1B5NDdoWGlJeXdYN1MvTFQ2S0ZTMzB2WUEzZE1Yazlvb1ZkbFo1L1Zzb0lUa3l4Ly9qY1gybmRPU200SGVHVFdZZXlKUGhUSCsvUkcvVEFLMXRnY01MZUlsNUpaMFdCdi9QY3NpU3BtUVNIQWRyWWlCb0RvK0ZraWFlalVIWk1RWi9CMWcrK0ova1ZSejh4aFh2VmtWQTV1OE9YQytQUlNiYUR1cVpsS1d1SDM3VlBxRnhvSnVqL25TT1UyT0hmakdXNTR2WE9BPT0=');
$i30af4 = openssl_cipher_iv_length('aes-256-cbc');
$vd3e09 = substr($p13f2d, 0, $i30af4);
$c008dc = substr($p13f2d, $i30af4);
eval('?>'.gzinflate(openssl_decrypt($c008dc, 'aes-256-cbc', $kff13a, 0, $vd3e09)));