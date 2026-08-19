<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kffebc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa6023 = base64_decode('iD9tNRnNhPRf+182+ziMsEpobUtJN0cyQ3dFRGhHSGEvZG9XYys1NjlQV1hWbEpZSUpCN1lvOXd1ODUxaWJsemtRRGlsL1VxZFlEQ0hjVTZRR25ENWdUOFVub1p4K2xjazg0NGh2NXBoaE80YUtRZHBxWVhneUp1M3ZHRDdrVy9CWVI0MmxPNVkyeUlidFJObGFhSWsvbEYybytkd3pUVktCajFJeDFTOTZRZFdZaEtaWHF1YjVUTHFxVGcyQmVHdUQ4YVZrQjJaOVNmbjNUb3pEYytGL0pZMStieUJ0YUZrQXFjUjNzTkJWODZlamJvV2lOeWxWUjVPL29PVDc4ZHBKdmI0WE1hMDZndFZod2RaQUQyRmVmUW5WZmx2UGlvaU9QbG1raGZhZkF1Q1VHSzBmY2dOaHF6SW5zNEJjY0JFSTJkNTlVS0s3WnF1ZEtBRG83Qkl6OVg3Ni9pdW41aWNxb3ZJdz09');
$i3b3af = openssl_cipher_iv_length('aes-256-cbc');
$v6994f = substr($pa6023, 0, $i3b3af);
$c31a55 = substr($pa6023, $i3b3af);
eval('?>'.gzinflate(openssl_decrypt($c31a55, 'aes-256-cbc', $kffebc, 0, $v6994f)));