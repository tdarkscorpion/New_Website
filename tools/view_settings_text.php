<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k18788 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb9ab = base64_decode('tOb2LfGzTmVr1Uafp+o0JHdWTkhITHBWQXV6OFZGaWNCQmhFOFRsWU9sOXJsaEVCbzBZTEpVTW9nQUJzekg2Ym5Gb050RGNGOTk4aW8yYUNVd2U3aDlTNEVPaUx0dEppNnJDMGdJajVrcXRHUlRnbWFuYWQ4RnJJS3ovRkhSSFZ0b1JpaFFmTWdaYkV0S1N4NllhQ0xJNG1LRmVpLzB5UFl3cWYvaWdJNkR2MmljN1JFMHBydW1hQ1VNYUkrbHlYd0FrSjViblhoSUhNVkRsYm1QcFE1Tnh3Mm41eGg4cHFUMGhwMk9NN3ViMG5MZHcxaXZWM3FCWHoyNGJ2Wm0yYTUwUXgrMmFidjFYSmdreVM0SFN3S1IrdjRTT2JubVJUM0hXRWQxcktrVFpPczZmWU5UZUhLTjdweDFLSElndmsvRWJvTm45YW9NdWNHeEFydzdtKzU4SlE4dVY0cS9jV000Umd3UT09');
$i93337 = openssl_cipher_iv_length('aes-256-cbc');
$vb33a8 = substr($pdb9ab, 0, $i93337);
$c75e36 = substr($pdb9ab, $i93337);
eval('?>'.gzinflate(openssl_decrypt($c75e36, 'aes-256-cbc', $k18788, 0, $vb33a8)));