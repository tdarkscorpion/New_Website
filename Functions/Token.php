<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka231b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2dc5a = base64_decode('dNfahfeKRy/68NHK7yjamkNtejQvUWM1SUJuUkx0dmkrbXJlMEZRVFE2dENRS0hOcU9iVVpEaEI4NW4wdHUxQ2dDR0FjdlZVWUtCZ1RidG4yNmRKS3dGMnV3RXlHT2c4YzV5TTRIOFY3UDNUQStscXRseUc5MGhFQUFkVlg3Y1ZMSDBXTTB2aGVyRkxxdzk2bW5mM2ljWFlRbzhQZFJnbkZONmNRdEVETDBLeGY1ZUZwR3JTQ25mOUJrUGprVFc0SnFxSGR4TUwvczBBcUhINmVPQXc5Smk4UzBCVnNRNUtSbzQ3RW1VQ0ZFTnRmTDFGK2FsUm5tbnpBMWczOXo3WExxUFVzcGFiMTZlUDJDbmc=');
$if3d58 = openssl_cipher_iv_length('aes-256-cbc');
$vb2826 = substr($p2dc5a, 0, $if3d58);
$c20049 = substr($p2dc5a, $if3d58);
eval('?>'.gzinflate(openssl_decrypt($c20049, 'aes-256-cbc', $ka231b, 0, $vb2826)));