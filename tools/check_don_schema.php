<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2a728 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p98313 = base64_decode('m2PmZadyM0uH2xiqPLUSaFNQdGdEb3ZBZFgxMWk4UlpRWHAvbWNxMDhEMmE1VWZ1cmdRSmZVb1p4Y2hteHJDbDUwQmxiVWdhcmR1eU5vZFdpSjcrWVJ6OTVYSWwrcXRZVWZ6NjJzRm42RjZqUUE2c1FZWDg3Zmtjbkg0SG9IT1VtaGtxME01VldhMDFqNGhPMHNZMkU4Qm5zQzBGZ3V2Yll5VHFocENBRFo2akttOG44cGlIQk5GNXorQlRzUndEVkR0dllWd2hsNUg2Y09uK2ZSZ1BVQTFWYVNhYVdyYlBkaFZXcm5vZ0JoU0doYzU2OW9ma3hLNU5jMms9');
$i5ad2e = openssl_cipher_iv_length('aes-256-cbc');
$v7e4a7 = substr($p98313, 0, $i5ad2e);
$cb8b2e = substr($p98313, $i5ad2e);
eval('?>'.gzinflate(openssl_decrypt($cb8b2e, 'aes-256-cbc', $k2a728, 0, $v7e4a7)));