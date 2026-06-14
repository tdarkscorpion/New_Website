<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9a227 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4377e = base64_decode('MyEc52E4UyXPj5hN+LjgeVFHYXNSOEJic2N4cUhROU9qVDdkSjBuREwyT2NJZTlRN2pwQ2FSUk5MR1kxK0FoVHMxRURQdVptMWJmdWZ3bldnTkRqQUg2WVdPQXY2T2VpNGJGS3V2Vm1jMDRLSEZHZWphdUxwWU0waHRhTE1Jcy9FMlBWYmZoUHdOMmt4dzBWd3RXWVBoNHRWK0V5VHVCbXRIeE9zd2dCYzM5L29QVXF6MThNSW1BRy92aTdoOWc3T2FUT002ZVMyR3BGdUR6dXFyK2F2dTBNQ0FBbmNGK29hS3Y5TVFHamd0cTFKY2w5a3RubDNodWN2VmM9');
$i673cc = openssl_cipher_iv_length('aes-256-cbc');
$vb70b1 = substr($p4377e, 0, $i673cc);
$c80ea3 = substr($p4377e, $i673cc);
eval('?>'.gzinflate(openssl_decrypt($c80ea3, 'aes-256-cbc', $k9a227, 0, $vb70b1)));