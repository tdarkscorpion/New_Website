<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f835 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88f25 = base64_decode('gwf2w+ljV9X7CnmWczWSGk1oYjlOM0Z0ZVNUVzRXMmxNWGliOXc4cHdPNWo5bFc1NCtYTWh0NTJBT2FLVitXak40b2gxa0oxUkR5akVLQytlL2c5eWZwL01BNHA0UWJJc0Ewb0dEbk5TdGF6ajJOcGlJamdrNHMzV2hBQ0xaN281ZFh3cS8yWXZQZjRqY0c0WFFkbkl1ai9VM1ZyTmt2aEdTL0RNaFVWaFB5U0k4L29DTWpWbW5hcXVvMlRKMUp0THJEWjdRSHhPWlpmOGlpcUp1V1hYVVF6S3hNaC9mMnp2Mld4Yjdhd0Z3a1BIQnZwekJleEZncHRGQnB3TVB0ZFQ4MkFVd0FwL040U012bS9kVjJuWStFVytOdFNjdWV2RHRrcHpTQUJTUEZoQiswdUlEdlB4VG1ETEcwPQ==');
$id941c = openssl_cipher_iv_length('aes-256-cbc');
$vfaa50 = substr($p88f25, 0, $id941c);
$cc053d = substr($p88f25, $id941c);
eval('?>'.gzinflate(openssl_decrypt($cc053d, 'aes-256-cbc', $k2f835, 0, $vfaa50)));