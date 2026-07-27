<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kda4de = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6266 = base64_decode('auv5SRX66lw3EGRTUafNl1NseG5iU2J5YW9LZlRuVTdXc1dpRDRNcUpab2ptSGFMTEtWYk55bVdkdmN6M3JJL0lWeitrTHpmZEVreFBBM2kxVW9oN2VVVnYwSW5uazlTSkltdHhhcHZZSlRiT1lwcVhjeVlWL0pONnorZ2hSSHFZZC9iYjF4SGZtbXVGb2d6WnVWeWtSWVdZbXVQRlVLaEZwVkZ1VnAzR2d6QWVhVDdCYU9pTHlzTDZGR1U5RkhYcW4zT20wZjRZQmF1TnJGSDFlMEROR0pPemFub3FmMFo4ckViK2ZmVDFRRU5yc0FzQ2o4anRCZnpRdFZjOXpLcElDWlJ0MXVZWHdZeUIrZ0dibzZiY3FyU0dKZjNSZElNblJGN29CbGRLRk5XRjF1aTlma2NmaG1kTXU4MkNzd2Y5MzErOE9xYkRyZitXdk43');
$iddf82 = openssl_cipher_iv_length('aes-256-cbc');
$vb0a18 = substr($pb6266, 0, $iddf82);
$cb8374 = substr($pb6266, $iddf82);
eval('?>'.gzinflate(openssl_decrypt($cb8374, 'aes-256-cbc', $kda4de, 0, $vb0a18)));