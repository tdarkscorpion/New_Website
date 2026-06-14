<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6e1eb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb4217 = base64_decode('8hp0+T5+rNlavLH4KEJc43FLVTRRVEM0c1daUzN3NGtxeTNCOSsweklVcEMwcEF5MVI4ZjEyb0lWTWczT20vUHlidlpxb29CSXpScWt3by9hQkdPQXZCSHZNLzJHL0thTmUxMUdFZU9DTlNLQzYrOHM1NWo0OHp4bkJCeGdEWGhMaFl4K29jUnplRmpEOFVCbExZOXBoSGd5emtQQkJUZlBwRFREallxc0JPQUZZZHVpMnU3dnc1QUdBdG0rRGtBMEZFMHowNU1jbHEvVTZUMEZoWEpGRjhrTGR6cUlYMEt2aXJycGp5NE5RWVJRTHdDVjQ0d3J0L09oMEpnTlBoZ2J1TzZNMThvMkZ5Ti90KzI=');
$ie9f17 = openssl_cipher_iv_length('aes-256-cbc');
$v1e946 = substr($pb4217, 0, $ie9f17);
$cb7ac1 = substr($pb4217, $ie9f17);
eval('?>'.gzinflate(openssl_decrypt($cb7ac1, 'aes-256-cbc', $k6e1eb, 0, $v1e946)));