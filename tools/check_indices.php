<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd3aab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2afa6 = base64_decode('Z5r8/4gub2RAw8YFRv7Nl2Q3blZCVjlYaGthVi9Fd2JPSWNzTXZ1czFRYzFMZnRuTjNvTlVyM0RYNDJJekg1UEVINlhFRklqaWtyVDh3YnIwb21IQnk2YzRLcHZlY1JZZ05TZHBpY3h6STlQVWI2ekxQcGR5OFZIYmwyaUVEbC9BcnQ3bU1aMzNSN1phenpPVXh0WXdOcXVQRGMyazdYcFJMMDZleG44NjRPZGFCQ2xPRlVpODc5OGpzUW1zY3BKQVU1WTRjVHcrS2NkOTlEeWt6ZTFpL0dxTk9GeDh4U1hmcmpkQ0hvWWhxT3FqUkVQVmFTdU5QNmZTa2FnMnI2R3BiUnlBUnhqdVpkeEFicHQ=');
$ia4453 = openssl_cipher_iv_length('aes-256-cbc');
$vd405e = substr($p2afa6, 0, $ia4453);
$c49140 = substr($p2afa6, $ia4453);
eval('?>'.gzinflate(openssl_decrypt($c49140, 'aes-256-cbc', $kd3aab, 0, $vd405e)));