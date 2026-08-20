<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdf0cd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe8007 = base64_decode('b6vYjdjeITNaGxDb5en7FVpNYysxYTJOMnMwSHNJN0VUYW9MWVVWM3lkc3dlOWpsTFhEMkhDT2YwZCt0NGpTd2hCWFZZNi91c2Y2dkV5K3V6cG1lamU5NWtIVlY2MHpGSEdkeFdqRTVCWXUzTVloRDB4d2hVeFJOMDhoMm16dFVMR0crTnQ0ZDQyMDRIbWtCMXFaRkhJOTIzT1B6ZS9mYVUvQnZHZFBqQnlVdnFqWmVZeTdtekZTUTBsK21CRkVWVUl0MTVpcmJXcVhWY2RzSEF6b1lEQlp3dUR6N3lVaXhlc2xpb0RZM2QwWkVPSysvMDRjOGdzbFloZjFOckZVbGlDMXp5MEFGeklwUWErQ0R6VHJGVzdZdUZuMzVJU3FRamEvNEtocm90YUY0enVTZ1hYSlExeHdnUTZRPQ==');
$i9e420 = openssl_cipher_iv_length('aes-256-cbc');
$vc9025 = substr($pe8007, 0, $i9e420);
$cdf8cb = substr($pe8007, $i9e420);
eval('?>'.gzinflate(openssl_decrypt($cdf8cb, 'aes-256-cbc', $kdf0cd, 0, $vc9025)));