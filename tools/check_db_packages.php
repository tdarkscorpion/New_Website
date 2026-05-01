<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke2c04 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4860 = base64_decode('hWH0CjI198ry2mDz3Ix7LTZHb1k5YXlMNkV1THM3VnhBUG9STTAzRmE0UGtNMngydU1GQVp1cUtycy92OWNUc3dVdThpVFUrUGlocmZ1NG53T2RpRUE2V042ekRLNFl6dk4xQXRZa2hUcG12dm5admNjeGU2WEcyRG00QWlsNkpHcGh4VDZxQldhamFuN0RhcmRNYWVkYmZYT0piQTBLNVJaYll0M0FqUGJiMVZGdUdIWHhLY2QvUXVTbisrLzFSaHhmemd4MEwvNjcvdmlERzRzMDIybDRBZzNFcDhqN2h3UVNPWUE9PQ==');
$icdc35 = openssl_cipher_iv_length('aes-256-cbc');
$vaddbd = substr($pa4860, 0, $icdc35);
$ca91ba = substr($pa4860, $icdc35);
eval('?>'.gzinflate(openssl_decrypt($ca91ba, 'aes-256-cbc', $ke2c04, 0, $vaddbd)));