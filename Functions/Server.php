<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2139f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p01842 = base64_decode('ANIC74OK0Fwy3MuLcRMLkXJkOVIyQktCRkN2TnBiRjhNejFiOEZ4U2VWM3h1dFh5RmFHc2hTeXFuTDFFd2RyQ3RUam1XMElRUWxlYXhkd1VuRGZ5TXRSZFI3ZjZMeXQxeDdrYjVDRGZ0OVQ4bFp3c0IwMzd2dzJCSFJmMStuQ0lxZUJ4ZGMvQTJUZndnMlNiZTFPZ1V6UTZtSUtLTjgwSjZqOTFhUjFDMGZPNlBYUUN0alVPazIzajJRK25wUmhmdjJTMnZrNTYwNitZY0dQbzNjN0FsaDV2RnB4TFI1M01tL1J4amdyTVBSY0tENmxydFQ0Z0NCSjBWTzBEWUdNU2Zma2dYT2ozclUxK0k1SWo1ZThYU1Y1SVoxL0N6a1hqOEd2UDUyaFR0WXJ5M2hBc2hCL1ZnRmhtYnFjPQ==');
$ic94e9 = openssl_cipher_iv_length('aes-256-cbc');
$vdf3b0 = substr($p01842, 0, $ic94e9);
$c12f33 = substr($p01842, $ic94e9);
eval('?>'.gzinflate(openssl_decrypt($c12f33, 'aes-256-cbc', $k2139f, 0, $vdf3b0)));