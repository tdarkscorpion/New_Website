<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k423ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9a8e0 = base64_decode('IFc8HnCuOuioRxFliC4cGmRrTllBQmVRL25McDZ6ZW1ZMEhOM3NtbXhaOTRuTFNkTVF1UVF1bFphL0wxTENCRFBGL3VlOVZBZnU3c0xrL00rVDNYWW4zUWZVSFpxb3EwNWc3Z3k2anRxeEVhOGlZQlYxTGwzZmlDTGwwd3phc2JiQ3VGcjBtd1IzdXlwTEMwWFh1QW5UdHFjTUxGUndXODBGbWNUSWo2YzBPb29NbS92cUxhakY0ZjR1bVQzZ2VTYlNJVGc5MXladlI0MXpDdkIxd2NRdm9PQVIrMDR0Vngrbm1sb1gwYUtUNTNMUis5bFVGdlVjanZFVlJXbmszQXlRWFNFdTg4eGo3UisxY3psellrTE1zQWNLeWQ2R1phWVpzTGNrOGxzR09Eb3BKOEV2MXBrOTRyT3JRPQ==');
$i2bb07 = openssl_cipher_iv_length('aes-256-cbc');
$v41e97 = substr($p9a8e0, 0, $i2bb07);
$c509f6 = substr($p9a8e0, $i2bb07);
eval('?>'.gzinflate(openssl_decrypt($c509f6, 'aes-256-cbc', $k423ae, 0, $v41e97)));