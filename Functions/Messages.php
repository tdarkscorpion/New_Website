<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k115c8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd971f = base64_decode('fH6ISuUZo7maOuu9h5qiyHVOZFYvWktIb09ROHlmbE81RmhuclBaWGZENGRvM0xzTHBnYnl4NjJyWVBkcmhtRnVNMm9Fbi9oMnM0Y0Y2N1FFNjNPY2dVQWJna0JCMFRVZndzMTFMTTFsWE1UcEt1TXh6bExaMnRZUkFGUHpCYXNvYXpNTGlKV05TOTN1bVp1emdCdE1wSXhmeWhuMnpMNGJ0QzNJd0J2bSt1dzBPMUJSMmJ3TC94NTZDcC84b2RqUmg1dXVlUzN1NEhPRDQrM3ViT1VhUjA3MGhDQ1oreEV4a3FIeVliZ2VKMW1PankvM3JyYWxpdWduaVRKdmVLUm15eWFLRmphMHc4RWhVVk9SZ3ZGbmpaOFUrUk1RSCsvNXlmb3IxSVZUZC81cElvZ1JEdG1hL0JtbURrPQ==');
$i0a1b0 = openssl_cipher_iv_length('aes-256-cbc');
$ve992d = substr($pd971f, 0, $i0a1b0);
$ca8a92 = substr($pd971f, $i0a1b0);
eval('?>'.gzinflate(openssl_decrypt($ca8a92, 'aes-256-cbc', $k115c8, 0, $ve992d)));