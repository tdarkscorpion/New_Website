<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k54a1d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8eaa3 = base64_decode('rbRN1C68i4DmaWj9eh6OLmtMYlEwbi9EK1JuUGVBbGMxL3ZVZ1ovUTdmcTlEMmRMRWpvQWdlcnVkakFTZHJsUjdQTWJOeFBMekpKcmRaMjJ2bDdNV2RTOStRR2lpZnBXQjBYcjRZaDk1dy91eGZPRE5NWkxVY01CV05mNU8vdlMrT1U4MmcyMXQ4OFJUVnpaOStCTGVMUTgrUHdyVGl2bW5MbDc5UWkvcnBBTXVZMHpEdVlFS0RJT2VQOFM5Mmc3bGZ3aVAxQk1lY2RhcFhuQ1RBS2ZtL1RlYlRqWTlweUczNmVoaU5BRzM5S1grTkdHdmQyNHlzcnYxRzhhWmtkeUVyb1U2UW9HZlRpb1VPWTZjcndLVG80NlFsWEtJYzRlaDlZazJXSGIrUXBzSDl6NFlnMVViUUFMdGt3PQ==');
$i0078c = openssl_cipher_iv_length('aes-256-cbc');
$vcd5c0 = substr($p8eaa3, 0, $i0078c);
$c38987 = substr($p8eaa3, $i0078c);
eval('?>'.gzinflate(openssl_decrypt($c38987, 'aes-256-cbc', $k54a1d, 0, $vcd5c0)));