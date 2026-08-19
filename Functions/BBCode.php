<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48318 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e384 = base64_decode('5JTgbGjuCw/kaImD+DFlekY5RjU1TWtzcFJ0NnZPVEx6alBvYzMxN2syWDRjTjlDM0paOHZHSWFoTHI5eWVTV1hwT2Y1eTk2RDRzRFBSRTE2aWtiMHdzbzQ2U29MY3N3VE44R082WEZKdEpKaDNmUDhnM0JOOGxQOFdDd0Z4Z0xuRmRrdnYrSGQ3MktKVHN1Uzl2dlB3R0dWa0VMa1JGSDBmYzNmS29KWVY0dytkMWtmWTRSQ3EwY1daanpCeXl2cnRPeEVVeDAySDI4ZjFjNkt0NnRTL013WWhUcC9lWFVMaGhCMXk1UTNHZXM2Z2xvS0lrNGRGeE5FRkhNaTZ1aHl6Z3c0RXlWT2EzT3daZUMvUi9wUm9VNWhmV1hMTkJEUUFKS3NxdHZtbk9VZGNneTQwYXNXbkJtb0h6SlRra0hxbHViQ2gyRVY4TnRIT25R');
$i3facf = openssl_cipher_iv_length('aes-256-cbc');
$v832dc = substr($p9e384, 0, $i3facf);
$c95b2f = substr($p9e384, $i3facf);
eval('?>'.gzinflate(openssl_decrypt($c95b2f, 'aes-256-cbc', $k48318, 0, $v832dc)));