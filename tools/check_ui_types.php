<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k15c31 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb60c3 = base64_decode('IToA91/E0DIEoJrPdZKXcmFYNmdMSDRCK2VqNE5pcmltRnhSeStVWUxiNVQ3dVFTT2doSFI0UGFkanJvcDlsQ2s4STVnUGRWalNLSEdYQzRPUjlJaHVENDdxTzlSMzJUR1M2NXRpOWZJOWpnK2tqNnZZTnNia0p5UDg1QkxQOGZISmhVZldibmcyOStTM1h6TjlBNWZaeDBNOTVXSy9QR1NWZ2swRkQ0d2NOMnlGYlZkTjZxb05RdjErVUE3QlJXQUJRenhHb0ZRUnFWLzMxemVMam5uemRqUGtDc1BwNWN2UFVNOVFQN2ZTQXQ2K3FFUzMwblFRNnI4aUFlR1U2cTBpSGZsaUsybStyc1doR2l4WE8wcnVnd1dKSkh4SDZoaVczZWNNUFNQazRkTE9QNFlFUTYycE9POFJVPQ==');
$i3b301 = openssl_cipher_iv_length('aes-256-cbc');
$va4e56 = substr($pb60c3, 0, $i3b301);
$cebf06 = substr($pb60c3, $i3b301);
eval('?>'.gzinflate(openssl_decrypt($cebf06, 'aes-256-cbc', $k15c31, 0, $va4e56)));