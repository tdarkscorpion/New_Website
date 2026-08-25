<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka776a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pce8f9 = base64_decode('vxMnIrnzggUgFSFvI099QDNPZmF0U2RVd05pSVY0Tnh4TWdVWUFndDU0OWY0aVVWc296OHI0cE1Ba3JwTDNFMWh3cEg4M0JYbERMZFN1a3V3Vzd3OHpVRk9CVVEvbnRlK0UzbmRnV0Q5eVdsRlhQWVI3ZHFQcWljU1A0V2I3ZE5wclY5RU9PbGhwdmFkV282VFVtUHV4MjU5LzNqS2V4elBkemhGYzNMZzZyNGV0eS9SbGJUbzlhZWdTMGxzbm9FMmp2dWp2MWlBcmVPcjRkUDBISTdhQ3MrT3hTN2ZOZEF1a0EwYklOTHJVc29tSlRRLzZOMENIbkxqd2MwcUdHQit5dWY2dGljVmZnc3YrTUI=');
$iba1f0 = openssl_cipher_iv_length('aes-256-cbc');
$v4434c = substr($pce8f9, 0, $iba1f0);
$c86628 = substr($pce8f9, $iba1f0);
eval('?>'.gzinflate(openssl_decrypt($c86628, 'aes-256-cbc', $ka776a, 0, $v4434c)));