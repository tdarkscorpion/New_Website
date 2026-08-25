<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kad340 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b6c8 = base64_decode('/7iDox2M//BLQjFqvKg020JaczhVL2lMZU1Ma2FrQUdQbEY1VkI1enZDWWMyeDIrbkJVT1NRa1VQUTlzYmMzYWRrbzlXMzc4NnBJbExEMTJYVVFkQ1VLcFZjNGZzTVFTejk3UG9IbHRtUUs0S0hlNktRZWpQQ3NyMWZiTHpNUmpjU2dBZ1NWSC9BeEQwYjJybDJESTNlQTlpNWZ0R2JHeHZQS3RJaDQwMmFkY2dOSFFTdXhWQWpJbzBiOStKQS83NENrVkpoK2E4VjVNZXNJeHBrYllEcFUvVEFZY1B2c2hKbm5OemtHek5EZEpGeldEbUVFaGp3MjU3TE91UTVSNFlrV3JzTzZUdzNnb2xkQ2tzeWFRcXlmVlZDcGFIM2U1aG8rRHBOQ2dyM1ZLdFBDOUxhVXZNMGxJdFVBPQ==');
$i6e26a = openssl_cipher_iv_length('aes-256-cbc');
$ve57ee = substr($p8b6c8, 0, $i6e26a);
$ca9ece = substr($p8b6c8, $i6e26a);
eval('?>'.gzinflate(openssl_decrypt($ca9ece, 'aes-256-cbc', $kad340, 0, $ve57ee)));