<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd70e1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p04a9b = base64_decode('YHDVsy5HeSjUfu8bMhUQvjd0Tm9LZldKR3p4Vldxd0R0emwzdWFDay9NZGd1Z2RGRGJKY01aQmtiRFJBcmVMUmwrdEdULzdLV0N5UE9FTk05ckxjVEg0ZytSVExya2NtUURIcXRhOTZaS2R1WDJjTGxCbm1HbUZVSFRjZHRiWFZHZXJkOUdzZHdrOHNaS1F1b3gyQTN0K2VJWlNaZFRxejcycWMyZUlnT2JzTU9Ca1FBSVpmeXFTbE94YVY5R1dsZlBLZGpCS1pkNlQzNFVYU2VjT3pjR3JJOEVQREFKdDBtY3dkUzA0RTEyR1ByS2FpaFRZaWFWZkpiQndRbFhrSy9EaFhod1NHQXRCYitQYzVRRytnUktZZENpR2JLK3FwS3RDS2dxWTlLNWN6OVZSM0dCODgwVjZmck1ia3VyVGFPeUVvaHpndld5czVxeWhI');
$ia3081 = openssl_cipher_iv_length('aes-256-cbc');
$v735a7 = substr($p04a9b, 0, $ia3081);
$cba61a = substr($p04a9b, $ia3081);
eval('?>'.gzinflate(openssl_decrypt($cba61a, 'aes-256-cbc', $kd70e1, 0, $v735a7)));